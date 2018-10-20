<?php

namespace Aye;

use Illuminate\Console\Command;


class BaseCommand extends Command
{
    public function getSignature()
    {
        // exposing signature so we can call the command
        return $this->signature;
    }
}