<?php

namespace NettSite\Payfast\Commands;

use Illuminate\Console\Command;

class PayfastCommand extends Command
{
    public $signature = 'laravel-payfast';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
