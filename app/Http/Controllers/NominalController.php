<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Nominal;
use Illuminate\Http\Request;

class NominalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nominals = Nominal::get();
        $games = Game::get();
        return view('admin.nominals.index', compact('nominals', 'games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games = Game::get();
        return view('admin.nominals.create', compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'photo' => 'required|image',
            'games_id' => 'required',
            'name' => 'required|max:200',
            'price' => 'required|numeric',
        ]);
        
        $extension = $request->file('photo')->getClientOriginalExtension();
        $name = random_int(0000000000, 10000000000).'.'.$extension;
        $request->file('photo')->storeAs('photo', $name);
        $request['thumbnail'] = $name;
        
        Nominal::create($request->except('_token', 'photo'));

        return redirect('/app/nominals')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nominal = Nominal::findOrFail($id);
        $games = Game::get();

        return view('admin.nominals.edit', compact('nominal', 'games'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials = $request->validate([
            'photo' => 'image',
            'games_id' => 'required',
            'name' => 'required|max:200',
            'price' => 'required|numeric',
        ]);

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $name = random_int(0000000000, 10000000000).'.'.$extension;
            $request->file('photo')->storeAs('photo', $name);
            $request['thumbnail'] = $name;
        }

        $nominal = Nominal::findOrFail($id);

        $nominal->update($request->except('_token', 'photo'));

        return redirect('/app/nominals')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nominal = Nominal::findOrFail($id);
        $nominal->delete();
        return redirect('/app/nominals')->with('success', 'Data berhasil dihapus!');
    }
}
