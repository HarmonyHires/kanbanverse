<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    // public function handle($request, Closure $next, ...$guards)
    // {
    //     $user = Auth::user();

    //     if (!$user) {
    //         return redirect()->route('login');
    //     }

    //     if ($request->route()->getName() === 'dashboard') {
    //         if ($user->role === 'superadmin') {
    //             return response()->view('backsite.dashboard');
    //         }

    //         return response()->view('client.workspace.index');
    //     }

    //     return $next($request);
    // }
}
