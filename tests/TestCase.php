<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use PreemStudio\Jetpack\Tests\AbstractTestCase;
use PreemStudio\Skeleton\SkeletonServiceProvider;

final class TestCase extends AbstractTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'PreemStudio\\Skeleton\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_skeleton_table.php.stub';
        $migration->up();
        */
    }
}
