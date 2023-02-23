<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class NomesAdmin
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
        
        if(auth()->user()?->username!='paco'){//Ahora esta función la realizará el middleware, que estructuralemtne es mas logico que lo
            //el middleware que el controlador en este caso era el UsuarisController
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
