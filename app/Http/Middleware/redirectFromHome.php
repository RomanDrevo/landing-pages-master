<?php

namespace App\Http\Middleware;

use Closure;

class redirectFromHome
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
        if($request->is('home')){
            dd('Die');
        }

        return $next($request);
    }
}
