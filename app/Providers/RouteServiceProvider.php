<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    // ...existing code...
    
    public function boot(): void
    {
        // Force HTTPS for all route URLs in production
        if(env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        // ...existing code...
    }
}
