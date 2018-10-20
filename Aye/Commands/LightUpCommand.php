<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class LightUpCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'light -A 5';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:lightup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increase brightness by 5.';
}