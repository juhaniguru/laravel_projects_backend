<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfManagerOrEmployeeMiddleware
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
       $role = $request->user()->role;
       $managerId = $request->project->manager_id;
       $isAdminOrManager = $role == 'admin' || $role == 'manager';
       $isManager = $request->user()->id == $managerId;

       if(!$isAdminOrManager && !$isManager)
       {
           abort(403, 'Unauthorized');

       } else {
            return $next($request);
       }
    }
}
