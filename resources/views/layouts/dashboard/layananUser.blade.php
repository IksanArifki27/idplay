
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Layanan Produk User</title>

    <!-- Custom fonts for this template-->
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

                        <h1 class="h3 mb-4 text-gray-800">Kategori Paket</h1>
                         @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                             </div>     
                            @endif
 
                            <a href="/showCart" class="btn btn-primary"> <i class="fa fa-shopping-cart" ></i>Keranjang </a>
                               
                                </div>
                    <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(38, 44, 156)" >
                    <div class="row">
                        <!-- Penghargaan 1-->
                        @foreach ($datas as $item)
                        <div class="col-xl-3 col-lg-5 ">
                            <div class="card shadow mb-3">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 border-bottom-success">
                                    <h6 class="m-0 font-weight-bold text-primary">Kategori {{$item->category->nama}} </h6>
                                </div>
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                                            src="images/course-pic.png" alt="...">
                                    </div>
                                    <div style="text-align: justify;">
                                        <h3 class="fw-500">{{$item->nama}} </h3>
                                        <div class="box-body">
                                            <section>
                                                <p><span>Speed : </span>{{$item->kecepatan}} Mbps </p>
                                                <p><span>Device : </span>{{$item->device}} Device</p>
                                                <p><span>Fee:</span> {{$item->biaya}} </p>
                                            </section>
                                        <p>{{$item->deskripsi}}</p>

                                        <form action="/add_cart/{{$item->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Tambah Ke Keranjang >>></button>
                                        </form>

                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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