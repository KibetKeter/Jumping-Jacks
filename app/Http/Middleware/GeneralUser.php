<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GeneralUser
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
      if(Auth::check() && Auth::user()->roleId == 1)
      {
        return redirect('/admin');

      }

      if(Auth::check() && Auth::user()->roleId == 2)
      {
        return $next($request);

      }
    }
}
