<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth() -> check() && auth() -> user() -> akses === 'admin'){
            return $next($request);
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
