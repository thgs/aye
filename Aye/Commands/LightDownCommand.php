<?php

namespace Aye\Commands;

class LightDownCommand extends Command
{
    public function execute()
    {
        $cmd = 'light -U 5';
        
        exec($cmd);
    }
}