<?php

namespace Aye\Commands;

class MPVPauseCommand extends Command
{
    public function execute()
    {
        $cmd = 'echo \'{ "command": ["set_property", "pause", "yes"] }\' | socat - /tmp/mpvsocket';
        
        exec($cmd);
    }
}