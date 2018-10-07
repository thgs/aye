<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    protected $repo;

    public function __construct()
    {
        // inject our dependencies
    }
    
    public function index()
    {
        return view('remote.index');
    }
}
