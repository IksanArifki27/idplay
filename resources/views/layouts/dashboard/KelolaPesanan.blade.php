
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Kelola Pesanan</title>

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
                                            <th>Nama Pemesan</th>
                                            <th>Tgl Pesan</th>
                                            <th>Email</th>
                                            <th>NO RESI</th>
                                            <th>No Hp</th>
                                            {{-- <th>alamat</th> --}}
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            <th>Cetak</th>
                                           
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                        
                                    @endphp
                                    <tbody>
                                        @foreach ($datas as $data)     
                                        <tr>
                                            <td>{{$no++}} </td>
                                            <td>{{$data->name}} </td>
                                            <td>{{$data->created_at->format('d-M-Y')}} </td>
                                            <td>{{$data->email}} </td>
                                            <td>{{$data->resi}} </td>
                                            <td>{{$data->noHP}} </td>
                                            {{-- <td>{{$data->alamat}} </td> --}}
                                            <td>{{$data->nama_produk}} </td>
                                            <td> @money($data->biaya)</td>
                                            <td><strong>{{$data->pesan_status}}</strong></td>
                                            <td>
                                               <form action="/pesanan/{{$data->id}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group">
                                                    <select name="order_status" class="form-select mr-3">
                                                        <option value="">Pilih Status</option>
                                                        <option value="diproses" {{Request::get('status')== 'diproses' ? 'pilih' : ''}}>diproses</option>
                                                        <option value="survei" {{Request::get('status')== 'survei' ? 'pilih' : ''}}>survei</option>
                                                        <option value="komplit" {{Request::get('status')== 'komplit' ? 'pilih' : ''}}>komplit</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary ">update status</button>
                                                </div>
                                               </form>
                                            </td>
                                            <td>

                                                <a href="/eskportPDF/{{$data->id}}" class="btn btn-danger">PDF</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                {{$datas->links()}}
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