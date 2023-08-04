<?php

namespace Evgeny\TempCode;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function register()
    {
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes(
            [
                __DIR__.'/config/temp-code.php' => config_path('temp-code.php')
            ]
        );
    }

}