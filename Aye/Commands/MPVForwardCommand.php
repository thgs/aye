<?php
namespace Aye\Commands;
class MPVForwardCommand extends BaseCommand
{
    protected $command = 'echo \'{ "command": ["seek", 10] }\' | socat - /tmp/mpvsocket';
}
