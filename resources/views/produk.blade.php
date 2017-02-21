@extends('app_home')
@section ('content')

<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Items</li>
                    </ul>

                    <div class="row products">

                        <div class="col-md-3 col-sm-4">
                          @foreach($data2 as $key => $produk)
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="{{url('gambar/'.$produk->gambar)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                               <img src="{{url('gambar/'.$produk->gambar)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="{{url('gambar/'.$produk->gambar)}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>{{$produk->nama_barang}}</h3>
                                    <p class="price">Rp. {{$produk->harga}}</p>
                                    <p class="buttons">
                                        <a href="addtocart/{{$produk->id}}" type="submit" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Order</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>
                    @endforeach
                    <!-- /.products -->

                    <div class="pages">

                        

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->

            </div>
            <!-- /.container -->
        </div>
       
      
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2016 Fah </p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>



@endsection