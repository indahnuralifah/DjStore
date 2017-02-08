@extends('app_home')
@section('content')

    <div id="all"></div>
                    <div class="box">
                        <form method="post" action="{{('/checkout/payment/save')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                            <h1>Checkout - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>
                                <div class="row">   
                                    <div class="col-sm-6" >
                                        <div class="box payment-method col-sm-3">

                                            <h4>Payment gateway</h4>

                                            <p>Bank Transfer</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="Transfer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="box payment-method col-sm-3">

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
                                <div class="pull-left">
                                    <a href="{{url('/order')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                </div>
                                <div class="pull-right">
                                    
                                    <div class="box-footer collapse-right">
                                        <a href="{{url('pesan/add2')}}" class="btn btn-primary navbar-btn" >Next<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>

@endsection