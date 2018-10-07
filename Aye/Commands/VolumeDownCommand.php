<?php

namespace Aye\Commands;

class VolumeDownCommand extends BaseCommand
{
    protected $command = 'pactl set-sink-volume 0 -20%';
}