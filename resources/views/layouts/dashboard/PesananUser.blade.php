
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Pesanan Saya</title>

    <!-- Custom fonts for this template -->
    @include('layouts.inc.css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.inc.sidebar')
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              @include('layouts.inc.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Detail Pesanan</h1>
                

                    <!-- DataTales Example -->
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                 @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                             </div>     
                            @endif
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Tgl Pesan</th>
                                            <th>Email</th>
                                           
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                        
                                    @endphp
                                    <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->name}} </td>
                                            <td>{{$item->created_at->format('d-M-Y')}} </td>
                                            <td>{{$item->email}} </td>
                                            <td>{{$item->nama_produk}} </td>
                                            <td> @money($item->biaya)</td>
                                            
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#ViewPesananUser{{$item->id}}" class="btn btn-success">view</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                       
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('layouts.inc.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    {{-- modal view --}}
    @foreach ($data as $dat)
    <div class="modal fade" id="ViewPesananUser{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan Anda</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Nama Pelanggan :{{$dat->name}} </p>
                    <p>nama Produk :{{$dat->nama_produk}} </p>
                    <p>Alamat :{{$dat->alamat}} </p>
                    <p>Email :{{$dat->email}} </p>
                    <p>Harga : @money($dat->biaya) </p>
                    <h2 >Status Pesanan {{$dat->pesan_status}} </h2>
                    @php
                        $status = $dat->pesan_status;
                    @endphp
                    <ul class="bar">
                        <li class="diproses" >Diproses</li>
                        <li class="{{$dat->pesan_status == "survei" ? " survei" : "no"}}" >survei</li>
                        @if ($status == "komplit")
                        <li class="survei" >survei</li>
                        @else
                            
                        @endif
                        <li class="{{$dat->pesan_status == "komplit" ? "komplit " : "no"}}" >Komplit</li>
                       
                        
                    </ul>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">kembali</button>
                    
                </div>
            </div>
        </div>
    </div>
     @endforeach
    {{-- end modal view --}}


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.inc.modal')

    <!-- Bootstrap core JavaScript-->
    @include('layouts.inc.script')

</body>

</html>