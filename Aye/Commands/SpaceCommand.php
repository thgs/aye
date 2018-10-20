<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class SpaceCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'xdotool key space';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:space';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a space keystroke';
}