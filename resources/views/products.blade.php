@extends('layouts.main')
@section('content')

<div id="page" class="site">
    <section class="course-listing-page">
        <div class="container">
            <div id="filters" class="button-group">
                <button class="button" data-filter="*">all</button>
                  <button class="button" data-filter=".business">business</button>
                  <button class="button" data-filter=".design">design</button>
                  <button class="button" data-filter=".development">development</button>
                  <button class="button" data-filter=".seo">seo</button>
                  <button class="button" data-filter=".marketing">marketing</button>
            </div>

            <div class="grid gap-2" id="cGrid" >
                <div class="grid-item business" data-category="business">
                    <div class="img-wrap">
                        <img src="images/course-pic.png" alt="courses picture">
                    </div>
                    <a href="/single-product" class="learn-desining-banner-course">Contoh >>></a>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><span>Duration:</span> 4 Years</p>
                            <p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
                            <p><span>Fee:</span> 4,00,000</p>
                        </section>
                    </div>
                </div>

                @foreach ($datas as $item) 
                <div class="grid-item business" data-category="business">
                    <div class="img-wrap">
                        <img src="images/course-pic.png" alt="courses picture">
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