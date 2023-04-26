<?php

declare(strict_types=1);

namespace BombenProdukt\Skeleton;

use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $this->app->singleton('skeleton', fn () => new Skeleton());
    }

    public function provides(): array
    {
        return ['skeleton'];
    }
}
