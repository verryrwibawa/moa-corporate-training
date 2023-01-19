<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', ['title' => 'Login']);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt()) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        dd('berhasil login dengan email ' . $request->email);
    }
}
