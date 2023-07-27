
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>kelola paket</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('Admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('Admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('Admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

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
                    <h1 class="h3 mb-2 text-gray-800">Kelola Paket Produk</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the 

                    <!-- DataTales Example -->
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#TambahProdukModal">Tambah Produk</a>
                            {{-- <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Data Paket Produk</h6> --}}
                            
                        </div>
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
                                            <th>Nama Paket</th>
                                            <th>Kecepatan</th>
                                            <th>Device</th>
                                            <th>Biaya</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>                                 
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($datas as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->kecepatan}} Mbps</td>
                                            <td>{{$data->device}} Device</td>
                                            <td>Rp. {{$data->biaya}}</td>
                                            <td>{{$data->deskripsi}}</td>
                                            <td>{{$data->category->nama}}</td>
                                            <td>
                                                {{-- <a href="/KelolaPaket/{{$data->id}}" class="btn btn-primary" data-toggle="modal" data-target="#UpdateProdukModal">Update</a> --}}
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateProdukModal{{$data->id}}" >update</button>
                                                <a href="/hapusPaket/{{$data->id}}" class="btn btn-danger">Hapus</a>
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

                {{-- tambah produk modal --}}
                <div class="modal fade" id="TambahProdukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk Paket</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                            <div class="modal-body">
                            <form class="user" method="POST" action="/tambahPaket">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Nama Paket Produk ..." name="nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Kecepatan ..." name="kecepatan">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Jumlah Device ..." name="device">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan harga Paket ..." name="biaya">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="deskripsi"  class="form-control form-control" cols="30" rows="10" placeholder="Masukan Deskripsi"></textarea>
                                            
                                        </div>
                                        <select class="form-select" name="category_id" aria-label="Default select example">
                                            <option selected disabled>Pilih Kategori</option>
                                            @foreach ($categoris as $item)
                                            <option value="{{$item->id}}">{{$item->nama}} </option>
                                            @endforeach
                                        </select>
                                        <hr>
                                      
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit" >Tambah</button>
                                        
                                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" data-dismiss="modal">Tambah</button>
                    
                </div> --}}
            </div>
        </div>
    </div>
    {{-- end tambah modal --}}

    {{-- update produk modal --}}
    @foreach ($datas as $item)
     <div class="modal fade" id="UpdateProdukModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Produk Paket</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                            <div class="modal-body">
                            <form class="user" method="POST" action="/KelolaPaket/{{$item->id}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Nama Paket Produk ..." name="nama" value="{{$item->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Kecepatan ..." name="kecepatan" value="{{$item->kecepatan}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Jumlah Device ..." name="device" value="{{$item->device}}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan harga Paket ..." name="biaya" value="{{$item->biaya}}">
                                        </div>
                                        <div class="form-group">
                                             <textarea name="deskripsi"  class="form-control form-control" cols="30" rows="10" placeholder="Masukan Deskripsi" >{{$item->deskripsi}}</textarea>
                                        </div>
                                         <select class="form-select" name="category_id" aria-label="Default select example">
                                            <option selected disabled>Pilih Kategori</option>
                                            @foreach ($categoris as $cat)
                                            <option value="{{$cat->id}}">{{$cat->nama}} </option>
                                            @endforeach
                                        </select>
                                        <hr>
                                      
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit" >Update</button>
                                        
                                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" data-dismiss="modal">Tambah</button>
                    
                </div> --}}
            </div>
        </div>
    </div>
    @endforeach
    {{-- end update produk modal --}}


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