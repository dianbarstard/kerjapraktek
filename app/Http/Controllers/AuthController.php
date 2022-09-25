<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function postregister(Request $request) {
        $user = new \App\Models\User;
        $user->role ="karyawan";
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str::random(50);
        $user->save();

        return redirect('/register');
    }

    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

}
