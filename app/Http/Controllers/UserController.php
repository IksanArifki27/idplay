<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function KelolaUser(){
        $datas = User::all();
        return view('layouts.dashboard.KelolaUser',compact('datas'));
    }
}
