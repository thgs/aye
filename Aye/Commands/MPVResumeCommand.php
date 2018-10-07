<?php

namespace Aye\Commands;

class MPVResumeCommand extends Command
{
    public function execute()
    {
        $cmd = 'echo \'{ "command": ["set_property", "pause", "no"] }\' | socat - /tmp/mpvsocket';
        
        exec($cmd);
    }
}