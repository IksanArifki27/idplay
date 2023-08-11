@extends('layouts.main')
@section('content')
    <div id="page" class="site">
    <section class="page-content" id="course-page">
        <div class="container">
            <main class="course-detail">
                 <a href="/" class="btn-checkout">Kembali</a>
                <img class="img-logo" src="images/idplay.png" width="300" alt="">
                <div class="card">
                    <h1 class="text-thanks">Terimakasih Telah Berbelanjan Produk Kami</h1>
                    <hr>
                    <div class="card-detail">

                        @foreach ($orders as $item)
                        <h2>Nama = {{$item->name}}</h2>
                        <h2>No RESI =  {{$item->resi}}</h2>
                        @endforeach
                    </div>
                </div>
               
            </main>
        </div>
    </section>
    </div>
    
@endsection