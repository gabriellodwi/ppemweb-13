<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('custom_user')->check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
