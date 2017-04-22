<?php



declare(strict_types=1);

namespace BrianFaust\Browsershot\Facades;

use Illuminate\Support\Facades\Facade;

class Browsershot extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \BrianFaust\Browsershot\Browsershot::class;
    }
}
