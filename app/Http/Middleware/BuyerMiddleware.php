<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Session;
class BuyerMiddleware
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
        if(Session::get('buyerEmail'))
        {
            return $next($request);
        }
        else
        {
            return redirect('/buyer/login');
        }
        //return $next($request);
    }
}
