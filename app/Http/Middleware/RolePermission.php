<?php

namespace App\Http\Middleware;

use Closure;

class RolePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            // No tiene el rol esperado!
            return redirect()
            ->back()
            ->with('errors', 'No tiene permiso para acceder a la página');
            }
        return $next($request);
    }
}
