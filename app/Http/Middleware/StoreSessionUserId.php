<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreSessionUserId
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            session(['user_id' => Auth::id(), 'guard' => 'web']);
        } elseif (Auth::guard('admin')->check()) {
            session(['user_id' => Auth::guard('admin')->id(), 'guard' => 'admin']);
        }

        return $next($request);
    }
}
