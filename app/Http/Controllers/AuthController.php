<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView(){
        return view('layouts.dashboard.login');
    }
    public function loginPost(Request $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function registerView(){
         return view('layouts.dashboard.register');
    }
    public function registerPost(Request $request){
        User::create([
            "username" => $request->username,
            "noHP" => $request->noHP,
            "alamat" => $request->alamat,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "remember_token" => Str::random(60),
        ]);
       return redirect('/login');
        
    }
    public function Logout(){
        Auth::logout();
        return redirect('/login');
    }
}
