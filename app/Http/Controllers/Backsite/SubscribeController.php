<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function detailOrder(Request $request)
    {
        $plan = Plan::where('slug', $request->type)->first();
        return view('backsite.subscribe.detail-order', compact('plan'));
    }
}
