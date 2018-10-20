<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class VolumeUpCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'pactl set-sink-volume 0 +20%';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:volup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increase volume by 20%';
}