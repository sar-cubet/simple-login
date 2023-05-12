<?php

namespace SarCubet\SimpleLogin;

use Illuminate\Support\ServiceProvider;
class SimpleLoginServiceProvider extends ServiceProvider {
    
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'simple-login');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/simple-login'),

        ]);

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ]);
    
    }

    public function register()
    {

    }
}