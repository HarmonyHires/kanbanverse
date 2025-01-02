<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Order;

class CheckOrderAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $order = Order::where('user_id', auth()->id())->first();

        if (!$order) {
            return redirect()->route('home');
        }

        $request->merge(['order' => $order]);

        return $next($request);
    }
}
