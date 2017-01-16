@extends('app_home')

@section ('content')


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

 <div class="row products">
                    @foreach($data2 as $key => $produk)

                      
    <div class="box">
        <div class="product">
                           <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="{{url('gambar/'.$produk->Gambar)}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="{{url('gambar/'.$produk->Gambar)}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>{{$produk->nama_barang}}</h3>
                                    <p class="price">Rp. {{$produk->harga}}</p>
                                    <p class="as">
                                        <a href="addtocart/{{$produk->id}}" type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add </a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
            </div>

                        @endforeach
@endsection