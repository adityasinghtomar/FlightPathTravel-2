<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Middleware\StartSession;

class EnsureSession extends StartSession
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
        $response = parent::handle($request, $next);

        return $response->withHeaders([
            'Cache-Control' => 'nocache, no-store, max-age=0, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT'
        ]);
    }
}
