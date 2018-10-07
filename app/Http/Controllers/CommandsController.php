<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommandsController extends Controller
{
    public function execute($command)
    {
        // get command instance
        $className = 'Aye\\Commands\\'.$command.'Command';
        $command = \App::make($className);
        
        // execute
        $command->execute();
        
        // return home
        return redirect('/');
    }
}
