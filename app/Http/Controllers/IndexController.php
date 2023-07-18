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

    function search() {
        $games = Game::all();
        if(isset($_GET['q'])){
            $games = Game::where('slug', 'like', '%'.$_GET['q'].'%')->orderByDesc('created_at')->get();
        }
    
        // dd($games);
        
        return view('index.search', compact('games'));
    }
}
