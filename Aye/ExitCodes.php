<?php

namespace Aye;

class ExitCodes
{
    public $exitCodes = [
        0   => 'Ok',
        126 => 'Command invoked cannot execute',
        127 => 'Command not found'
    ];

    public function lookup($code)
    {
        return isset($this->exitCodes[$code])
            ? $this->exitCodes[$code]
            : $code;
    }
}