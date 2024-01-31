<?php

namespace Intop\Tools;

use Illuminate\Support\ServiceProvider;

class ExceptionNotifierProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/exceptions.php' => config_path('exceptions.php'),
        ]);

    }
}