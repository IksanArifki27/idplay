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

    public function UpdateUser($id,Request $request){
        $data = User::find($id);
        $data->update($request->all());
        return redirect('/KelolaUser')->with('success','Data User Berhasil di update');
    }
    public function HapusUser ($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/KelolaUser')->with('success','Data User Berhasil di Hapus');
    }
}
