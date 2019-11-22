<?php

namespace App\Http\Middleware;

use Closure;

class Vacaciones
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
        if(now()->format('F') == "July"){ 
            return redirect () -> action('JuezController@inicio');
        }
        return $next($request);
        
    }
}
