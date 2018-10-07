<?php

namespace Aye\Commands;

class VolumeDownCommand extends Command
{
    public function execute()
    {
        $cmd = 'pactl set-sink-volume 0 -20%';
        
        exec($cmd);
    }
}