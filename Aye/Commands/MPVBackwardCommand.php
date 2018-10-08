<?php
namespace Aye\Commands;
class MPVBackwardCommand extends BaseCommand
{
    protected $command = 'echo \'{ "command": ["seek", -10] }\' | socat - /tmp/mpvsocket';
}
