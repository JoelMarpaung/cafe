<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'admin')
                return redirect('admin');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'customer')
                return redirect('customer');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'kasir')
                return redirect('kasir');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'inventori')
                return redirect('inventori');
        }
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->role == 'pelayan')
                return redirect('pelayan');
        }
        return $next($request);
    }
}
