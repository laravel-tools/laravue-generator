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
        $this->publishes([
            __DIR__.'/../config/laravue-generator.php' => config_path('laravue-generator.php'),
        ], 'config');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravue-generator.php', 'laravue-generator');

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