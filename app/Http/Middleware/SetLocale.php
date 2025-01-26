<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if($request->route('lang') && in_array($request->route('lang'), ['id', 'en'])){
            $lang = $request->route('lang');
        }
        
        app()->setLocale($lang);
        return $next($request);
    }
}
