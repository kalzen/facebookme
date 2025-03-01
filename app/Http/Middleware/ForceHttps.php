<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->secure() && App::environment('production')) {
            return redirect()->secure($request->getRequestUri());
        }

        $response = $next($request);
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubdomains');
        
        return $response;
    }
}
