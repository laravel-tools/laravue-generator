<?php

namespace LaravelTools\LaravueGenerator;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Console\DetectsApplicationNamespace;
use Cz\Git\GitRepository;

class LaravueGeneratorServiceProvider extends BaseServiceProvider
{
    use DetectsApplicationNamespace;

    public function boot(Router $router)
    {

    }

    public function register()
    {
        if (!defined('VUEJS_TEMPLATE_PATH')) {
            define('VUEJS_TEMPLATE_PATH', realpath(__DIR__.'/../../public/.vue-templates'));
        }

        if ($this->app->runningInConsole()) {
            $this->commands([\LaravelTools\LaravueGenerator\Console\DownloadVueTemplate::class]);
        }
    }

    protected function getContainer()
    {
        return $this->app;
    }
}