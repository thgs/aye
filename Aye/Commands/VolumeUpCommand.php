<?php

namespace Aye\Commands;

class VolumeUpCommand extends BaseCommand
{
    protected $command = 'pactl set-sink-volume 0 +20%';
}