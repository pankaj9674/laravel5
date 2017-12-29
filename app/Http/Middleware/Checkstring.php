<?php

namespace App\Http\Middleware;

use Closure;

class Checkstring
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
//echo $request->getPathInfo();
//dd(strpos($request->getPathInfo(),'api'));
      if (strpos($request->getPathInfo(),'api') !=false)

        return $next($request);

        abort(404);
    }
}
