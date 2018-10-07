<?php

namespace Aye\Commands;

class LightUpCommand extends Command
{
    public function execute()
    {
        $cmd = 'light -A 5';
        
        exec($cmd);
    }
}