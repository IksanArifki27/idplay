<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){
        $pelanggan = User::where('role','user') ->count();
        $kategori = Category::all()->count();
        $produk = Paket::all()->count();
        return view('layouts.dashboard.main',compact('pelanggan','kategori','produk'));
    }
}
