<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Aye\CommandsRepository;

use App\Http\Requests;

class MainController extends Controller
{
    protected $repo;

    public function __construct(CommandsRepository $repo)
    {
        // inject our dependencies
        $this->repo = $repo;
    }
    
    public function index()
    {
        $commands = $this->repo->getCommands();

        return view('remote.index', ['commands' => $commands]);
    }
}
