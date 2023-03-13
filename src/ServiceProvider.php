<?php

declare(strict_types=1);

namespace PreemStudio\Skeleton;

use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $this->app->singleton('skeleton', fn () => new Skeleton);
    }

    public function provides(): array
    {
        return ['skeleton'];
    }
}
