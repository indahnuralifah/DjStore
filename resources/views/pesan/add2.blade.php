@extends('app_home')
@section('content')
<?php
    $pesanan = \App\Pemesanan::where('no_pesanan', session()->pull('no_pesanan'))->first();
?>

<script type="text/javascript">
  function showData(no_pesanan,nama_pembeli,no_hp,email,alamat,nama_barang,jenis_barang,warna,ukuran,jumlah_barang,keterangan,status, foto,harga) {
 
                        $('#no-pesanan').html(no_pesanan);
                        $('#nama-pesan').html(nama_pembeli);
                        $('#telp-pesan').html(no_hp);
                        $('#email').html(email);
                        $('#alamat-pesan').html(alamat);
                        $('#nama-barang').html(nama_barang);
                        $('#jenis-barang').html(jenis_barang);
                        $('#warna').html(warna);
                        $('#ukuran').html(ukuran);
                        $('#jumlah-barang').html(jumlah_barang);
                        $('#about').html(keterangan);
                        $('#state').html(status);
                        $('#gambar-pesan').html(foto);
                        $('#harga').html(harga);
  }
</script>


<div id="all">
                 
                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="{{ url('checkout/buktitf/save') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h1>Order review</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <br>
                            <br>    
                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nomor Pemesan</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Warna</th>
                                                <th>Ukuran</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                             @foreach($data as $pesanan)
                                            <tr>
                                                <td>{{$pesanan->no_pesanan}}</td>
                                                <td>{{$pesanan->nama_barang}}</td>
                                                <td>{{$pesanan->jumlah_barang}}</td>
                                                <td>{{$pesanan->warna}}</td>
                                                <td>{{$pesanan->ukuran}}</td>
                                                <td>{{$pesanan->harga}}</td>
                                            </tr>

                                            <tfoot>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Bukti Tranfer Anda</th>
                                            </tfoot>
                                          
                                        </tbody>
                                          @endforeach
                                    </table>

                                    <div class="item form-group" style="margin-left:800px; margin-top:-10px; ">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id=name="bukti_tf">
                                    </div>
                                    </div>
                                    <br>
                                    <br>
                                <!-- /.table-responsive -->
                             </div>
                            <!-- /.content -->

                            
                                <div class="box-footer">
                                    <br>
                                        <div class="pull-left">
                                            <a href="{{url('pesan/add')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back</a>
                                        </div>
                                        <div class="pull-right">
                                                <button class="btn btn-default">Next<i class="fa fa-chevron-right"></i></button>
                                        </div>
                                </div>

                        </form>
                    </div>
                    <!-- /.box -->
                </div>
 </div>
              

@endsection