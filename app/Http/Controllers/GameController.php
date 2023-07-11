<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderByDesc('created_at')->get();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'photo' => 'required|image',
            'name' => 'required|max:200',
            'detail_name' => 'required|max:200',
            'developer' => 'required|max:150',
            'short_description' => 'required|max:200',
            'tutorial' => 'required',
        ]);

        $extension = $request->file('photo')->getClientOriginalExtension();
        $name = random_int(0000000000, 10000000000).'.'.$extension;
        $request->file('photo')->storeAs('photo', $name);
        $request['thumbnail'] = $name;
        
        $slug = $request->name .' '.$request->developer;
        $request['slug'] = Str::slug($slug);

        Game::create($request->except('_token', 'photo'));

        return redirect('/app/games')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::where('slug', $id)->first();
        if($game === NULL){
            abort(404);
        }

        return view('admin.games.detail', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::where('slug', $id)->first();
        if($game === NULL){
            abort(404);
        }

        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials = $request->validate([
            'photo' => 'image',
            'name' => 'required|max:200',
            'detail_name' => 'required|max:200',
            'developer' => 'required|max:150',
            'short_description' => 'required|max:200',
            'tutorial' => 'required',
        ]);

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $name = random_int(0000000000, 10000000000).'.'.$extension;
            $request->file('photo')->storeAs('photo', $name);
            $request['thumbnail'] = $name;
        }
        
        $slug = $request->name .' '.$request->developer;
        $request['slug'] = Str::slug($slug);

        $game = Game::findOrFail($id);
        $game->update($request->except('_token', 'photo'));

        return redirect('/app/games')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect('/app/games')->with('success', 'Data berhasil dihapus!');
    }
}
