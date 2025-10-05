<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // get ?role= value from URL
        $role = $request->query('role');

        // check if user is admin
        if ($role === 'admin') {
            return $next($request); // continue to controller or route
        }

        // otherwise block access
        return response("Access Denied: Admins only!", 403);
    }
}
