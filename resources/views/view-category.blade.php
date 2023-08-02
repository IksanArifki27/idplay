@extends('layouts.main')
@section('content')

<div id="page" class="site">
    <section class="course-listing-page">
        <div class="container">
            {{-- <div id="filters" class="button-group">
                <button class="button" data-filter="*">all</button>
                  <button class="button" data-filter=".business">business</button>
                  <button class="button" data-filter=".design">design</button>
                  <button class="button" data-filter=".development">development</button>
                  <button class="button" data-filter=".seo">seo</button>
                  <button class="button" data-filter=".marketing">marketing</button>
            </div> --}}
            <a href="/products" style="padding: 8px 16px;  color:white; border-radius:5px; font-size:34px;">🔙</a>
            <br><br>
             @if ($message = Session::get('error'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                             </div>     
                @endif
            <h2 style="font-size:24px;justify-content:center; display:flex;">Kategori {{$kategori->nama}}</h2>
            <br>
            <div class="grid gap-2" id="cGrid" >
                @foreach ($paket as $item) 
                <div class="grid-item business" data-category="business">
                    <div class="img-wrap">
                        <img src="{{asset('images/course-pic.png')}}" alt="courses picture">
                    </div>
                    <a href="/detail-product/{{$item->id}}" class="learn-desining-banner-course">{{$item->nama}} >>></a>
                    <div class="box-body">
                        <p>{{$item->deskripsi}}</p>
                        <section>
                            <p><span>Speed : </span>{{$item->kecepatan}} Mbps </p>
                            <p><span>Device : </span>{{$item->device}} Device</p>
                            <p><span>Fee:</span> {{$item->biaya}} </p>
                        </section>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@endsection