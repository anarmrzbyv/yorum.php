<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPrice
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->price > 100) {
            return redirect('/');
        }
        return $next($request);
    }
}
