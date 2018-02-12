<?php

namespace LaravelTools\LaravueGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class AdminLTE.
 */
class LaravueGenerator extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravueGenerator';
    }
}
