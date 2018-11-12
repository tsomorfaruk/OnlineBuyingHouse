<?php

namespace App\Http\Middleware;

use App\Session\Session;
use Closure;
use app\Http\Controllers\BuyerController;
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
            return redirect('/login');
        }
        //return $next($request);
    }
}
