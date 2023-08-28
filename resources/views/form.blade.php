
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Form IDPLAY</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
   <style>
    #map {height:300px;}
   </style>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('Admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
{{-- class="bg-gradient-primary" --}}
<body  style="background-color: #241468">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
                        @error('password')
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                             </div>     
                            @enderror
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> 
                        <img src="{{asset('images/idplay.png')}}" width="450" alt="" class="mt-5 align-item-center" >
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pesan produk</h1>
                            </div>
                            <!-- ubah sini -->
                            <form class="user" method="POST" action="/orderForm" enctype="multipart/form-data">
                                @csrf
                                <!-- nama -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukan Nama" name="name" required>
                                </div>
                                <!-- no hp -->
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukan No tlpn" name="noHP" required>
                                </div>
                                <!-- alamat -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukan Alamat" name="alamat" required>
                                </div>
                                {{-- NIK --}}
                                 <div class="form-group">
                                    <input  type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="NIK" name="NIK" required>
                                </div>
                                <!-- email -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email" required>
                                </div>
                                {{-- ft ktp --}}
                                <p>foto ktp</p>
                                <div class="form-group">
                                    <input  type="file" class="form-control" id="exampleInputEmail"
                                        placeholder="Selfie " name="fotoKTP" required>
                                </div>
                                {{--  ft selfie--}}
                                <p>foto selfie</p>
                                <div class="form-group">
                                    <input  type="file" class="form-control " id="exampleInputEmail"
                                        placeholder="Selfie Address" name="selfie" >
                                </div>
                                
                                <!-- nama produk -->
                                <div class="form-group">
                                    <input  type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="namaproduk" value="{{$data->nama}}">
                                </div>
                                <!-- nama produk -->
                                <div class="form-group">
                                    <input  type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="biaya" value="{{$data->biaya}}">
                                </div>
                                <!-- nama produk -->
                                <div class="form-group">
                                    <input  type="hidden" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="paketid" value="{{$id}}">
                                </div>
                               
                                
                                 <div id="map"></div> 
                                 <br>
                                  <div class="form-group">
                                    <input  type="text" class="form-control form-control-user" id="latitude"
                                        placeholder="latitude" name="lat" >
                                </div>
                                 <div class="form-group">
                                    <input  type="text" class="form-control form-control-user" id="longitude"
                                        placeholder="longitude" name="lot" >
                                </div>
                                 <br><br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Buatkan Pesanan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    @include('layouts.inc.script')
    <script>

	var map = L.map('map').setView([-7.983908, 112.621391], 13);
    let latitude = "0";
    let longitude = "0";

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 20,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    var popup = L.popup()
        .setLatLng([-7.983908, 112.621391])
        .setContent('Ketik Untuk Melihat')
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent('Alamat anda :  ' + e.latlng.lat.toString()+" & "+e.latlng.lng.toString())
            .openOn(map);             
            document.getElementById("latitude").value = e.latlng.lat.toString();
            document.getElementById("longitude").value = e.latlng.lng.toString();
    }
    
    document.getElementById("latitude").innerHTML = latitude;
    document.getElementById("longitude").innerHTML = longitude;
    
    map.on('click', onMapClick);
 </script>

</body>

</html>