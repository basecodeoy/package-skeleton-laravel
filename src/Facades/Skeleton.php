<?php

declare(strict_types=1);

namespace PreemStudio\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PreemStudio\Skeleton\Skeleton
 */
final class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \PreemStudio\Skeleton\Skeleton::class;
    }
}
