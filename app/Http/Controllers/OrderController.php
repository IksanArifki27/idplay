<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
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
            $order->save();
            
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
            
        }
        return redirect()->back();
    }
}
