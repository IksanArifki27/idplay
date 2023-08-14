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
            <p class="tcp">08122121</p>
            <p class="tcp">idplay@gmail.com</p>
           
        </div>
        <div class="logo">
          <img src="images/idplay.png" alt="Logo Perusahaan" />
        </div>
        <div class="company-info">
          <p>Ruko patimura Squre</p>
          <p>Jl Patimura No.13, segon</p>
          <p>Kec. Jombang. Kab Jombang</p>
          <p>jawa Timur 6185</p>
        </div>
        
    </div>

      <h2 class="title">FORMULIR BERLANGGANAN</h2>
      <p>Tanggal :{{$data->created_at->format('d-M-Y')}} </p>
      <div class="wrap">
        <h2 class="title-pelanggan">Data Pelanggan</h2>
      </div>

      <p>Nama Pelanggan  <span> :</span> <strong> {{$data->name}} </strong> </p>
      <hr />
      <p>Alamat Pemasanagan :<strong> {{$data->alamat}} </strong></p>
      <hr />
      <p>Telepon :<strong> {{$data->noHP}} </strong> </p>
      <hr />
      <p>No Identitas (KTP) : <strong> {{$data->NIK}} </strong></p>
      <hr />
      <p>Email : <strong> {{$data->email}} </strong></p>
      <hr />
      <p>Titik Kordinat (lat/lon) : <strong> {{$data->lat}}/<strong> {{$data->lot}} </strong> </strong></p>
      <hr />

      <!-- Isi surat perjanjian di sini -->
    </div>
  </body>
</html>
