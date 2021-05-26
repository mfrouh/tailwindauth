<?php

namespace MFrouh\TailWindAuth\Providers;

use Illuminate\Support\ServiceProvider;

class TailWindAuthServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__ . './../../resources/views' => resource_path('views'),
            ], 'views');
            // Publish lang
            $this->publishes([
                __DIR__ . './../../resources/lang' => resource_path('lang'),
            ], 'lang');
        }
    }
}
