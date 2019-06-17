<?php

namespace App\Http\Middleware;

use Closure;
// use App\User;
// use Illuminate\Support\Facades\DB;
class CheckUser
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

      if(auth()->user()->admin == 0 ){
      return $next($request);
    }
      return redirect()->back();
    }
}
