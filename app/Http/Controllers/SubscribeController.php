<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Transaction;
use Carbon\Carbon;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubscribeController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function detailOrder(Request $request)
    {
        $plan = Plan::where('slug', $request->type)->first();
        return view('subscribe.detail-order', compact('plan'));
    }

    public function order(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
        ]);

        $plan = Plan::where('id', $request->plan_id)->first();
        if (!$plan) {
            return redirect()->back()->with('error', 'Plan not found');
        }

        $order = new Order();
        $order->order_id = date('Y') . '-' . time();
        $order->user_id = auth()->user()->id;
        $order->plan_id = $plan->id;
        $order->total = $plan->price_number;
        $order->status = $order::STATUS_PENDING;
        $order->expired_at = Carbon::now()->addMinutes(60);
        $order->save();

        return redirect()->route('subscribe.payments', $order->order_id);
    }

    public function payments(Request $request, $order_id)
    {
        $order = Order::where('order_id', $order_id)->first();
        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        if ($order->isPaid()) {
            return redirect()->route('subscribe.status', $order->order_id);
        }

        if ($order->total == 0.00) {
            $data = [
                'order_id' => $order->order_id,
                'transaction_id' => strtolower(uniqid() . '-' . Str::random(6) . '-' . uniqid()),
                'gross_amount' => 0,
                'transaction_time' => Carbon::now(),
                'transaction_status' => 'free',
                'payment_type' => 'free',
                'fraud_status' => 'free',
                'status_message' => 'free',
                'status_code' => 'free',
                'signature_key' => 'free',
                'bank' => 'free',
                'va_number' => 'free',
                'biller_code' => 'free',
                'bill_key' => 'free',
                'permata_va_number' => 'free',
            ];

            DB::transaction(function () use ($order, $data) {
                $order->markAsPaid();
                $this->createPayment((object) $data, $order);
            });

            return redirect()->route('subscribe.status', $order->order_id);
        }

        if ($order->user_id !== auth()->user()->id) {
            return redirect()->back();
        }

        return view('subscribe.order', compact('order'));
    }

    public function createTransaction($order_id)
    {
        $order = Order::where('order_id', $order_id)->first();
        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        if ($order->user_id !== auth()->user()->id) {
            return redirect()->back();
        }

        $transactionDetails = [
            'order_id' => $order->order_id,
            'gross_amount' => $order->total,
        ];

        $customerDetails = [
            'first_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'phone' => '082111111'
        ];

        $transaction = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function midtransWebhook(Request $request)
    {
        $payload = $request->query('payload');
        $notification = json_decode($payload);

        $transaction = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;

        $order = Order::where('order_id', $notification->order_id)->first();

        if (!$order) {
            return redirect()->route('subscribe.failed', $notification->order_id);
        }

        if ($order->isPaid()) {
            return redirect()->route('subscribe.status', $order->order_id);
        }

        if ($transaction === 'capture') {
            if ($type === 'credit_card') {
                if ($fraud === 'challenge') {
                    $order->status = 'challenge';
                } else {
                    $order->markAsPaid();
                }
            }
        } else if ($transaction === 'settlement') {
            $order->markAsPaid();
        } else if ($transaction === 'pending') {
            $order->status = $order::STATUS_PENDING;
        } else if ($transaction === 'deny' || $transaction === 'expire' || $transaction === 'cancel') {
            $order->markAsCancelled();
        }

        DB::transaction(function () use ($order, $notification) {
            $order->save();
            $this->createPayment($notification, $order);
        });

        return redirect()->route('subscribe.status', $order->order_id);
    }

    public function midtransError(Request $request, $order_id)
    {
        $order = Order::where('order_id', $order_id)->first();
        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        if ($order->user_id !== auth()->user()->id) {
            return redirect()->back();
        }

        $order->markAsCancelled();
        return view('subscribe.error');
    }

    public function createPayment($notification, $order)
    {
        $transaction = new Transaction();

        $transaction->order_id = $order->id;
        $transaction->transaction_id = $notification->transaction_id ?? null;
        $transaction->gross_amount = $notification->gross_amount ?? null;
        $transaction->transaction_time = $notification->transaction_time ?? null;
        $transaction->transaction_status = $notification->transaction_status ?? null;
        $transaction->payment_type = $notification->payment_type ?? null;
        $transaction->fraud_status = $notification->fraud_status ?? null;
        $transaction->status_message = $notification->status_message ?? null;
        $transaction->status_code = $notification->status_code ?? null;
        $transaction->signature_key = $notification->signature_key ?? null;
        if (isset($notification->va_numbers) && is_array($notification->va_numbers) && count($notification->va_numbers) > 0) {
            $transaction->bank = $notification->va_numbers[0]->bank ?? null;
            $transaction->va_number = $notification->va_numbers[0]->va_number ?? null;
        } else {
            $transaction->bank = null;
            $transaction->va_number = null;
        }
        $transaction->biller_code = $notification->biller_code ?? null;
        $transaction->bill_key = $notification->bill_key ?? null;
        $transaction->permata_va_number = $notification->permata_va_number ?? null;
        $transaction->save();
    }

    public function status(Request $request, $order_id)
    {
        $order = Order::where('order_id', $order_id)->with('transaction', 'plan', 'user')->first();

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        if ($order->user_id !== auth()->user()->id) {
            return redirect()->back();
        }

        return view('subscribe.status', compact('order'));
    }
}
