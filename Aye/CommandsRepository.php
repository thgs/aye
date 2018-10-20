<?php

namespace Aye;

use App;

class CommandsRepository
{
    public function __construct()
    {
        $this->baseDir = base_path('Aye/Commands');
    }
    

    public function getCommands()
    {
        // from Laravel's Filesystem::files($directory)
        $glob = glob($this->baseDir.'/*', GLOB_NOSORT);

        if ($glob === false) {
            return [];
        }

        // filter BaseCommand off
        $glob = array_filter($glob, function ($x) {
            return $x != 'BaseCommand.php';
        });

        //dd($glob);
        // return instances of the commands
        return collect(array_map(function ($x) {
            $class = 'Aye\\Commands\\'.$x;
            //return \App::make($class);
        }, $glob));
    }

    public function find($commandName)
    {


    }
}
