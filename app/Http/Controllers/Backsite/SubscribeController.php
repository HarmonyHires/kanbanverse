<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
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
        $order->status = 'pending';
        $order->total = $plan->price_number;
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

        if ($order->user_id !== auth()->user()->id) {
            return redirect()->back();
        }

        return view('subscribe.order', compact('order'));
    }
}
