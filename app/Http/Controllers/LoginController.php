<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use RealRashid\SweetAlert\Facades\Alert;
// use Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('Frontend.Auth.login');
    }
    public function auth(Request $request)
    {
       $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($request->all());
        // dd($request->session()->regenerate());
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/form-laporan');
        }
        return back()->with('LoginError', 'login failed');
    }
}
