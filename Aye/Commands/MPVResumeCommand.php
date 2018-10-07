<?php

namespace Aye\Commands;

class MPVResumeCommand extends BaseCommand
{
    protected $command = 'echo \'{ "command": ["set_property", "pause", "no"] }\' | socat - /tmp/mpvsocket';
}