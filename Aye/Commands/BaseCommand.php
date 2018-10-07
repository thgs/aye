<?php

namespace Aye\Commands;

class BaseCommand
{
    protected $command;

    public function execute()
    {
        exec($this->command);
    }
}