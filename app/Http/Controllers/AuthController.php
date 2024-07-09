<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $validated = $request->validate([
           'email' => 'required|email|exists:users',
            'password' => 'required',
        ],['email.exists' => 'Email address not recognised']);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return to_route('admin.dashboard.dashboard')->with('success', 'Login Successfully');
        }
           return to_route('admin.dashboard.login')->withErrors([
            'email'=>'Email or password is incorrect'
        ]);

    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
