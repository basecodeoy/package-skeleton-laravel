<?php

namespace PreemStudio\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PreemStudio\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \PreemStudio\Skeleton\Skeleton::class;
    }
}
