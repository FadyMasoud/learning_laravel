<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->age < 18) {
            return response("Sorry, you must be at least 18 years old.", 403);
        }
        return $next($request);
    }
}
