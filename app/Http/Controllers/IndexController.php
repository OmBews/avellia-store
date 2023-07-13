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

    function items($slug) {
        $game = Game::where('slug', $slug)->first();
        return view('index.items', compact('game'));
    }
}
