<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Route;
use Request;
use Session;
class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $api="")
    {   
        $routeName = $request->route()->getName();
        if (empty($routeName) || Sentinel::hasAccess($routeName)) {
            return $next($request);
        }

        if (!empty($api)) {
            return response()->json(['message' => 'No tienes permiso para usar esta ruta'], 403);
        } else {

            Session::flash('message', 'Advertencia! No hay suficientes permisos. Por favor contáctenos');
            Session::flash('status', 'Advertencia');
         return redirect()->back();
       }
        

        
    }
}
