<?php

declare(strict_types=1);

namespace BaseCodeOy\Skeleton\Commands;

use Illuminate\Console\Command;

final class SkeletonCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
