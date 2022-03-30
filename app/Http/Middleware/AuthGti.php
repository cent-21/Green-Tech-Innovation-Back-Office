<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthGti
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(f_getCookie(md5('token_gti')) != null) {
            return redirect()->route('login');
        } else {
            return $next($request);
        }
    }
}
