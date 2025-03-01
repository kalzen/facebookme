<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ...existing code...
    
    protected $middleware = [
        // ...existing middleware...
        \App\Http\Middleware\ForceHttps::class,
    ];
    
    // ...existing code...
}
