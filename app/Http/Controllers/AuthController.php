<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginView() {
        return view('auth.login');
    }

    function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/app');
        }

        return back()->withErrors([
            'password' => 'Password anda salah'
        ]);
    }

    function username() {
        return 'username';
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
