<?php

namespace Jimmyjetter\Sendexception;

use Illuminate\Support\ServiceProvider;

class SendExceptionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/exception-config.php' => config_path('exception-config.php'),
        ], 'exception-config');

    }

    public function register()
    {

    }

}
