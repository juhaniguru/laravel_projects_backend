<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfManagerMiddleware
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
        if($request->user()->role != 'manager' && $request->user()->role != 'admin') {  abort(403, 'Unauthorized'); }
        return $next($request);
    }
}
