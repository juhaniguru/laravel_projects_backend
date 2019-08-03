<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfNotAdminIsOwnerMiddleware
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
       
            if($request->user()->role == 'manager'){
                if($request->project->manager_id == $request->user()->id)
                {
                    return $next($request);
                }
            }

            abort(403, 'Unauthorized'); 

    }
}
