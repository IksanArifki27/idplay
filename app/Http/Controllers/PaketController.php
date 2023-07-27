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
    public function updatePaket(Request $request ,$id){
        $data = Paket::find($id);
        $data->update($request->all());
        return redirect('/KelolaPaket')->with('success','Data Berhasil di Update');
        
    }
    public function hapusPaket($id){
        $data = Paket::find($id);
        $data->delete();
        return redirect('/KelolaPaket')->with('success','Data Berhasil di hapus');
    }
    public function paketProduk (){
        $datas = Paket::all();
        return view('products',compact('datas'));
    }
    public function detailProduk ($id){
        $data = Paket::find($id);
        return view('product-single',compact('data'));
    }
}
