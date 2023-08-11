
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Cart Detail</title>

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
                                            <th>Nama Produk</th>
                                            <th>kecepatan</th>
                                            <th>device</th>
                                            <th>harga</th>
                                            <th>aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                        $total_harga = 0;
                                    @endphp
                                    <tbody>
                                       @foreach ($carts as $item)
                                       <tr>
                                           <td>{{$no++}} </td>
                                           <td>{{$item->nama_produk}}</td>
                                           <td>{{$item->kecepatan}}</td>
                                           <td>{{$item->device}}</td>
                                           <td>{{$item->biaya}}</td>
                                           <td>
                                            <a href="/hapusCartItem/{{$item->id}}" class="btn btn-danger">Hapus</a>
                                           </td>
                                        </tr>
                                        @php
                                            $total_harga += $item->biaya;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <td colspan="5"> Total harga = <strong> {{$total_harga}} </strong> </td>
                                        <td> 
                                            <a href="/orderCash" class="btn btn-success">Check out</a>
                                        </td>
                                    </tfoot>
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