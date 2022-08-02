<?php

namespace Gerfey\TecDoc;

use Illuminate\Support\ServiceProvider;

class GerfeyTecDocServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->mergeConfigFrom(__DIR__ . '/../config/tecdoc.php', 'tecdoc');

            $this->publishes(
                [
                    __DIR__ . '/../config/tecdoc.php' => config_path('tecdoc.php'),
                ],
                'tecdoc'
            );
        }
    }
}
