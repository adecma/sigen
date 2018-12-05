<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SingleSignOnMiddleware
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
        if (Auth::user()->session_id != Session::getId())
        {
            Auth::logout();
            return Redirect::guest('/login')
            ->with('message-label', 'error')
            ->with('message-body', 'Sesi telah expired / Akun anda telah masuk melalui perangkat lain, silakan login kembali');
        }
        
        return $next($request);
    }
}
