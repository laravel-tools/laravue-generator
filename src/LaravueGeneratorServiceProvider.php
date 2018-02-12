<?php

namespace LaravelTools\LaravueGenerator;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(Router $router)
    {

    }

    public function register()
    {

    }

    protected function getContainer()
    {
        return $this->app;
    }
}