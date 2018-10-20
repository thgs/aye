<?php

namespace Aye;

use App;
use Artisan;

class LaravelCommandsRepo
{
    public function getRegisteredCommands()
    {
        // get only commands of aye namespace
        return array_filter(Artisan::all(), function ($command, $sign) {
            return substr($sign, 0, 3) == 'aye';
        }, ARRAY_FILTER_USE_BOTH);
    }
}
