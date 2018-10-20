<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Aye\LaravelCommandsRepo;

class MainController extends Controller
{
    protected $repo;

    public function __construct(LaravelCommandsRepo $repo)
    {
        $this->repo = $repo;
    }
    
    public function index()
    {
        $commands = $this->repo->getRegisteredCommands();

        return view('remote.index', ['commands' => $commands]);
    }
}
