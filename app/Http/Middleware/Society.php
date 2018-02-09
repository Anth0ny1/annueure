<?php

namespace App\Http\Middleware;

use Closure;

class Society
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
        if ($request->user()->role == 'societe'){
            return $next($request);
        }
        
        return redirect('/');
    }
}
