<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this area.');
        }

        if (Auth::user()->role !== 'superadmin') {
            return redirect()->route('dashboard.client');
        }

        return $next($request);
    }
}
