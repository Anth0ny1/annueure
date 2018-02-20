<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class isBanned
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
      // if (!empty($request)) {
        # code...
        // dd($request->user());
        // dd(Auth::guard($guard)->check());
    if (!empty($request->user()->status)) {
      if ($request->user()->status == 'inactif'){
        return redirect()->route('home')->with('danger', 'Votre compte à été désactivé contacter nous pour plus d\'information');
      }
    }
    return $next($request);

    }
  // }

}
