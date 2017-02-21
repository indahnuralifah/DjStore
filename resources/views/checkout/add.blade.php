@extends('app_home')
@section ('content')


<div class="col-md-9" id="checkout">

                    <div class="box">
                     <form method="post" action="{{url('/checkout/custom/save/')}}" enctype="multipart/form-data">
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
                                            <input type="text" class="form-control" id="firstname" name="nama_pembeli">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Email</label>
                                            <input type="text" class="form-control" id="lastname" name="email">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                            
                                <div class="row">
                                    

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telephone</label>
                                            <input type="number" class="form-control" id="phone" name="no_hp">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Alamat</label>
                                            <input type="text" class="form-control" id="email" name="alamat">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <br>
                            <br>
                           <div class="box-footer">
                            
                                <div class="pull-left">
                                    <a href="{{url('cart')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back</a>
                                </div>
                                <div class="pull-right">
                                        <a href="{{url('checkout/add1')}}" class="btn btn-default">Next<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.box -->

</div>




@endsection