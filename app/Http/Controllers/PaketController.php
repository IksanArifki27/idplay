<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        return redirect('/KelolaPaket')->with('success','Berhasil Tambah Paket');
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

    public function layananUser (){
        $categoris = Category::all();
        $datas = Paket::with('category')->get();
        return view('layouts.dashboard.layananUser',compact('categoris','datas'));
    }
    public function detaillayanan ($id){
        $data = Paket::find($id);
        return view('layouts.dashboard.detailLayananUser',compact('data'));
    }

    public function addCart(Request $request, $id){
        $user = Auth::user();
        $paket = Paket::find($id);
        $cart = new Cart;

        $cart->name=$user->username;
        $cart->email=$user->email;
        $cart->alamat=$user->alamat;
        $cart->user_id=$user->id;
        $cart->noHP=$user->noHP;
        $cart->nama_produk=$paket->nama;
        $cart->biaya=$paket->biaya;
        $cart->kecepatan=$paket->kecepatan;
        $cart->device=$paket->device;
        $cart->paket_id=$paket->id;
        $cart->save();
         return redirect()->back()->with('success','Produk Berhasil ditambah ke keranjang');
    }
   
    public function showCart(){
        $id = Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();
        return view('layouts.dashboard.CartDetail',compact('carts'));
    }
   
   public function hapusCartItem ($id){
    $data = Cart::find($id);
    $data->delete();
    return redirect('/showCart')->with('success','Berhasil Menghapus Produk dari keranjang');;
   }

  
}
