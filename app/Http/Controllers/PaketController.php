<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    //
    public function kelolaPaket(){
        $datas = Paket::with('category')->orderBy('created_at', 'desc')->get();
        $categoris = Category::all();
        // dd($datas);
        return view('layouts.dashboard.kelolaPaket',compact('datas','categoris'));
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
        $categoris = Category::all();
        return view('products',compact('datas','categoris'));
    }
    public function detailProduk ($id){
        $data = Paket::find($id);
        return view('product-single',compact('data'));
    }
    public function viewCategory($slug){
        if(Paket::where('kategori',$slug)){
           $kategori =  Category::where('id',$slug)->first();
           $paket = Paket::where('category_id',$kategori->id)->get();
            return view('view-category',compact('kategori','paket'));
        }else{
            return "tidak ada";
        }
       
    }
}
