<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        $games = Game::get();
        return view('index', compact('games'));
    }
}
