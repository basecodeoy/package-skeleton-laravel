<?php

declare(strict_types=1);

namespace PreemStudio\Skeleton;

use PreemStudio\Skeleton\Commands\SkeletonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class SkeletonServiceProvider extends PackageServiceProvider
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
