<?php

namespace Epmnzava\LaravelCms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\LaravelCms\Skeleton\SkeletonClass
 */
class LaravelCmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-cms';
    }
}
