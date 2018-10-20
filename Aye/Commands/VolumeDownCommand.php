<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class VolumeDownCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'pactl set-sink-volume 0 -20%';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:voldown';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Decrease volume by 20%';
}