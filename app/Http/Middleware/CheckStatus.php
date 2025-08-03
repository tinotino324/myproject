<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckStatus
{
    public function handle(Request $request, Closure $next)
    {
        die("111");
        // Example logic
        if (auth()->check() && auth()->user()->status !== 'active') {
            return redirect('/login')->withErrors(['status' => 'Your account is not active.']);
        }

        return $next($request);
    }
}
