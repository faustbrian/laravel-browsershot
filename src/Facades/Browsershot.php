<?php

namespace BrianFaust\Browsershot\Facades;

use Illuminate\Support\Facades\Facade;

class Browsershot extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \BrianFaust\Browsershot\Browsershot::class;
    }
}
