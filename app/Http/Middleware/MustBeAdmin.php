<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        if(auth()->check() && auth()->user()->acctypes_id == 1){
            return $next($request);
        }

        flash()->error('Oops! You are not logged as Administrator.');
        return back()->withInput();
    }
}
