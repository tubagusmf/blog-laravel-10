<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        //jika role login 2(penulis) tapi yang login rule 1(admin) maka tidak bisa masuk
        if (auth()->user()->role != $role) {
            abort(403);
        }
 
        return $next($request);
    }
}
