<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class MPVPauseCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'echo \'{ "command": ["set_property", "pause", "yes"] }\' | socat - /tmp/mpvsocket';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:mpvp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MPV Pause';
}