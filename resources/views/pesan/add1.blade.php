@extends('app_home')
@section('content')
<?php
    $pesanan = \App\Pemesanan::where('no_pesanan', session()->pull('no_pesanan'))->first();
?>

    <div id="all">
                    <div class="box">
                        <form method="post" action="{{('/checkout/payment/save')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                            <h1>Checkout - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>
                                <div class="row">   
                                <br>
                                <br>
                                    <div class="col-sm-6" >
                                        <div class="box payment-method" style="width: 100%; margin-left: 0%;">

                                            <h4>Payment gateway</h4>

                                            <p>Bank Transfer</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="Transfer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="box payment-method" style="width: 100%; margin-left: 0%;">

                                            <h4>Cash on delivery</h4>

                                            <p>You pay when you get it.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="Cash On Delivery">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                
                                <div class="box-footer">
                                    <br>
                                        <div class="pull-left">
                                            <a href="{{url('pesan/add')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back</a>
                                        </div>
                                        <div class="pull-right">
                                                <a href="{{url('pesan/add2')}}" class="btn btn-default">Next<i class="fa fa-chevron-right"></i></a>
                                        </div>
                                </div>

                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->


          
@endsection