<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next){

    //     if(auth()->check()){
    //         if (auth()->user()->role =='admin') {
    //             return $next($request);
    //         }
    //     }
    //     return redirect()->to('/');
    //     ;
    // }

    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado y tiene el rol de "admin"
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request); // Permitir el acceso al usuario autenticado con el rol de "admin"
        }

        // Devolver un error 403 Forbidden para usuarios autenticados sin el rol de "admin"
        return redirect()->to('/');
    }
}
