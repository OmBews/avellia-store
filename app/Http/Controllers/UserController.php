<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required|max:200',
            'email' => 'required|max:200|email',
            'password' => 'required|max:200',
        ]);

        $request['password'] = password_hash($request->password, PASSWORD_BCRYPT);
        User::create($request->except('_token'));

        return redirect('/app/admin')->with('success', 'Data berhasil dibuat!');
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
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credentials = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required|max:200',
            'email' => 'required|max:200|email',
            'password' => 'max:200',
        ]);

        $user = User::findOrFail($id);

        if($request->password){
            $request['password'] = password_hash($request->password, PASSWORD_BCRYPT);
            $user->update($request->except('_token'));
            return redirect('/app/admin')->with('success', 'Data berhasil diubah!');
        }
        
        $user->update($request->except('_token', 'password'));
        return redirect('/app/admin')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
        return redirect('/app/admin')->with('success', 'Data berhasil dihapus!');
    }
}
