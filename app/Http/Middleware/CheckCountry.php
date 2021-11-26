<?php

namespace App\Http\Middleware;

use App\Helpers\Currency;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Cookie::get('currency') == null)
            Cookie::queue('currency', Currency::currencyCode(), 2132131);

            return $next($request);
    }
}
