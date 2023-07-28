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
}
