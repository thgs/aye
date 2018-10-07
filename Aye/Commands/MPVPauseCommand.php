<?php

namespace Aye\Commands;

class MPVPauseCommand extends BaseCommand
{
    protected $command = 'echo \'{ "command": ["set_property", "pause", "yes"] }\' | socat - /tmp/mpvsocket';
}