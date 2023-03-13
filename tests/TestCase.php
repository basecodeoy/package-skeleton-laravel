<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use PreemStudio\Jetpack\Tests\AbstractTestCase;
use PreemStudio\Skeleton\ServiceProvider;

final class TestCase extends AbstractTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'PreemStudio\\Skeleton\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            ServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
}
