<?php

namespace App\Http\Middleware;

use Closure;

class goosd
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
        if ($request->age == 10) 
        {
           return redirect('/type_age');
        }
          return $next($request);
    }
}
