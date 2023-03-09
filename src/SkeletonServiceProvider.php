<?php

declare(strict_types=1);

namespace PreemStudio\Skeleton;

use PreemStudio\Jetpack\Package\AbstractServiceProvider;
use PreemStudio\Jetpack\Package\Package;
use PreemStudio\Skeleton\Commands\SkeletonCommand;

final class SkeletonServiceProvider extends AbstractServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_skeleton_table')
            ->hasCommand(SkeletonCommand::class);
    }
}
