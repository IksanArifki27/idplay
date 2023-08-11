<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function orderCash(){
        $user = Auth::user();
        $id = $user->id;
        $datas = Cart::where('user_id',$id)->get();
        
        foreach ($datas as $data) {
            $order = new Order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->noHP=$data->noHP;
            $order->alamat=$data->alamat;
            $order->alamat=$data->alamat;
            $order->user_id=$data->user_id;
            $order->nama_produk=$data->nama_produk;
            $order->biaya=$data->biaya;
            $order->paket_id=$data->paket_id;
            $order->pesan_status="process";
            $random= Str::random(4);
            $order->resi= strtoupper('IDP-'.$random);
            $order->save();
            
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
            
        }
        return redirect('/thanks')->with('success','Paket Anda berhasil DI CheckOut!');
    }

     public function pesanan(){
    $datas = Order::latest()->paginate(15);
    return view('layouts.dashboard.KelolaPesanan',compact('datas'));
   }
   public function updateOrderStatus ($id,Request $request){
     $order = Order::where('id',$id)->first();
     if($order){
        $order->update([
            "pesan_status" => $request->order_status
        ]);
        return redirect()->back()->with('success','Pesan Status Berhasil diubah');
     }else{
        return "gagal";
     }
   }

   public function PesananUser(){
        $userId = Auth::user()->id;
        $data = Order::where('user_id',$userId)->get();
        return view('layouts.dashboard.PesananUser',compact('data'));
   }

   public function PesananUserDetail ($id){
    $datas = Order::where('id',$id);
    dd($datas);
   }
   public function thanks(){
    $userId = Auth::user()->id;
    $orders = Order::where('user_id',$userId)->get();
   
    return view('thanks',compact('orders'));
   }

   public function home(){
    // $orders = Order::paginate();

    return view('index'); 
   }

   public function cekresijson(Request $request)  {
        $cekresi = $request->resi;
        if (isset($cekresi)) {
            $orders = Order::where('resi','LIKE','%'. $cekresi.'%')->get();
        }
        else{
            $orders = null;
        }
        return json_encode($orders);
   }

//    public function cekresi(Request $request){
//     $query =  $request->has('cekresi');
//     if($query) {
//         $orders = Order::where('resi','LIKE','%'. $request->cekresi.'%')->get();
//     }else{
//         // $orders = null;
//     }
   
//     return view('index',compact('orders')); 
   
    
    
//    }

}
