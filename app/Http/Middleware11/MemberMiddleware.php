<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MemberMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isMember()) {
            return $next($request);
        }

        return redirect()->route('member_login'); // Redirect to login if not a member
    }
}
