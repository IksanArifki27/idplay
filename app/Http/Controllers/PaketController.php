<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    //
    public function kelolaPaket(){
        $datas = Paket::all();
        return view('layouts.dashboard.kelolaPaket',compact('datas'));
    }
    public function tambahPaket(Request $request){
        Paket::create($request->all());
        return redirect('/KelolaPaket');
    }
}
