@extends('layouts.main')
@section('content')
    <div id="page" class="site">
    <section class="page-content" id="course-page">
        <div class="container">
            <main class="course-detail">
                <div class="center">
               <table >
              
                 <tr>
                    <th class="th_deg">No</th>
                    <th class="th_deg">nama produk</th>
                    <th class="th_deg">email</th>
                    <th class="th_deg">Biaya</th>
                    <th class="th_deg">kecepatan</th>
                    <th class="th_deg">aksi</th>
                </tr>
              @php
                  $no = 1;
                   $total_harga = 0;
              @endphp
               @foreach ($carts as $item)
                   
               <tr>
                   <td>{{$no++}} </td>
                   <td>{{$item->nama_produk}}</td>
                   <td>{{$item->email}}</td>
                   <td>Rp. @money($item->biaya) </td>
                   <td>{{$item->kecepatan}} Mbps</td>
                    <td>
                    <a href="/hapusCartItem/{{$item->id}}" class="btn-hapus">Hapus</a>
                    </td>
                </tr>
                @php
                $total_harga += $item->biaya;
                @endphp
                @endforeach
               <tfoot>
                    <td colspan="5"> Total harga = <strong> @money($total_harga) </strong> </td>
                    <td> 
                        <a href="/orderCash" class="btn-checkout">Beli</a>
                    </td>
                </tfoot>
               </table>
               </div>
            </main>
            </section>
            </div>
@endsection