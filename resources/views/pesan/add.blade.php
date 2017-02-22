@extends('app_home')
@section ('content')
<?php
    $pesanan = \App\Pemesanan::where('no_pesanan', session()->pull('no_pesanan'))->first();
?>

<div id="all">
        <div class="col-md-9" id="checkout">
                    <div class="box">
                        <form method="post" action="{{url('/checkout/address/save/')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        

                            <h1>Checkout</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <br>
                            <br>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Pemesan</label>
                                            <input type="hidden" class="form-control" id="no_pesanan" placeholder="Id Pemesanan" name="no_pesanan" value="{{$pesanan->no_pesanan}}">
                                            <input type="text" name="name" class="form-control" id="firstname" required value="{{ $pesanan->nama_pembeli }}" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{ $pesanan->email }}" readonly class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="text" name="telp" class="form-control" id="phone" required value="{{ $pesanan->no_hp }}" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Alamat</label>
                                            <textarea type="text" name="address" class="form-control" id="street" required readonly="">{{ $pesanan->alamat }}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- /.row -->
                            </div>


                            <div class="box-footer">
                            
                                <div class="pull-left">
                                    <a href="{{url('order')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back</a>
                                </div>
                                <div class="pull-right">
                                        <a href="{{url('pesan/add1')}}" class="btn btn-default">Next<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                      </form>
                </div>
        </div>
</div>

@endsection