<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotAdmin
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
        
        if (Auth::guard('web')->check() && Auth::guard('web')->user()->level == 1) {
            return $next($request);
        }

        return redirect()->action('Auth\LoginController@getLogin');
    }
}
