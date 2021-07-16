<?php

namespace GetThingsDone\Vision\Commands;

use Illuminate\Console\Command;

class VisionCommand extends Command
{
    public $signature = 'vision';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
