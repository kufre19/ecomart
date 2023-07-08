<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->isAdmin()) { // replace isAdmin() with the actual method name that checks if the user is an admin
                return $next($request);
            }
            else {
                return redirect()->to(env("APP_URL"))->with('error', 'Unauthorized access.');
            }
        }

        return redirect()->route('platform.login');
    }
}
