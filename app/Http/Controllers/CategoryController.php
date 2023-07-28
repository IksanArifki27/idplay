<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function kelolaKategori(){
        $datas = Category::all();
        return view('layouts.dashboard.KelolaKategori',compact('datas'));
        // dd($datas);
    }
    public function tambahKategori(Request $request){
        Category::create($request->all());
        return redirect('/KelolaKategori')->with('success','Berhasil Tambah Kategori');
    }

    public function hapusKategori($id){
        $data = Category::find($id);
        $data->delete();
        return redirect('/KelolaKategori')->with('success','Data Berhasil di hapus');
    }
}
