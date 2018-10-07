<?php

namespace Aye\Commands;

class VolumeUpCommand extends Command
{
    public function execute()
    {
        $cmd = 'pactl set-sink-volume 0 +20%';
        
        exec($cmd);
    }
}