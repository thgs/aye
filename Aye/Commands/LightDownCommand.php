<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class LightDownCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'light -U 5';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:lightdown';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lower brightness by 5';
}