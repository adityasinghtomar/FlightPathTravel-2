<?php

namespace App\Http\Middleware;

use Closure;

class adminmiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('id') && $request->session()->get('role') === 'admin') {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Unauthorized access');
    }
}