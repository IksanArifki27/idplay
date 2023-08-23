<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/surat.css" />
    <title>Kop Surat</title>
  </head>
  <body>
    <div class="container">
    <div class="header">
        <div class="cp">
            <p class="tcp">081333370841 &nbsp;</p>
            <p class="tcp">idplayjomabng@gmail.com</p>
           
        </div>
        <div class="logo">
          <img src="images/idplay.png" alt="Logo Perusahaan" />
        </div>
        <div class="company-info">
          <p>Ruko Patimura Squre</p>
          <p>Jl Patimura No.13a, segon</p>
          <p>Kec. Jombang. Kab Jombang</p>
          <p>jawa Timur 61418</p>
        </div>
        
    </div>

      <h2 class="title">FORMULIR BERLANGGANAN</h2>
      <p>Tanggal :{{$data->created_at->format('d/m/Y')}} </p>
      <div class="wrap">
        <h2 class="title-pelanggan">Data Pelanggan</h2>
      </div>

      <p>Nama Pelanggan  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <strong> {{$data->name}} </strong> </p>
      <hr />
      <p>Alamat Pemasanagan :<strong> {{$data->alamat}} </strong></p>
      <hr />
      <p>Telepon &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<strong> {{$data->noHP}} </strong> </p>
      <hr />
      <p>No Identitas (KTP) &nbsp; &nbsp; &nbsp;  : <strong> {{$data->NIK}} </strong></p>
      <hr />
      <p>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; : <strong> {{$data->email}} </strong></p>
      <hr />
      <p>Titik Kordinat (lat/lon) :  &nbsp;Latitude : <strong> {{$data->lat}}</strong></p>
      <hr />
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Longitude : <strong> {{$data->lot}} </strong></p>
      <hr>
    
    </div>
  </body>
</html>
