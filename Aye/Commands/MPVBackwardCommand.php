<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class MPVBackwardCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'echo \'{ "command": ["seek", -10] }\' | socat - /tmp/mpvsocket';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:mpvb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MPV Backward';
}
