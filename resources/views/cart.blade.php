@extends('app_home')

@section('content')

 <div class="col-md-12" id="basket">

                    <div class="box">
                        <form method="post" action="{{ url('cart/checkout') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h1>Barang cart</h1>
                            <div class="table-responsive">
                            @if($data!='')
                                <table class="table">
                                    <thead>
                                        <tr>
                             
                                             <th>Nama Barang</th>
                                            <th>Nama Produk</th>
                                            <th>Kuantitas</th>
                                            <th>Harga</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                      $grandtotal=0;
                                      ?>
                                @if(is_array($data)||is_object($data))
                                    @foreach($data as $cart)
                                    <?php
                                        $grandtotal = 0;
                                    ?>
                                        <tr>
                           
                                            <td>{{$cart['nama_barang']}}</td>
                                            <td>{{$cart['nama_produk']}}</td>
                                            <td>
                                            <input type="hidden" name="id_{{ $cart['id'] }}" value="{{ $cart['id'] }}">
                                            <input type="hidden" name="totalbarang_{{ $cart['id'] }}" value="{{ $cart['total'] }}">
                                            <input type="number" name="total_{{ $cart['id'] }}" class="form-control" oninput="qty{{$cart['id']}}(this.value)" style="width: 60px;">
                                              <input type="hidden" name="gambar" value="{{ $cart['gambar'] }}">
                                              <input type="hidden" name="nama_barang" value="{{ $cart['nama_barang'] }}">
                                              <input type="hidden" name="nama_produk" value="{{ $cart['nama_produk']}}">
                                              <input type="hidden" name="harga" value="{{ $cart['harga'] }}" id="harga{{$cart['id']}}">
                                            </td>
                                            <td>Rp.{{$cart['harga']}}</td>
                                            <td class="total-payment" id="total-payment{{$cart['id']}}">Rp.{{$cart['harga']}}</td>
                                            <input type="hidden" id="totaltumbal{{$cart['id']}}" value="{{$grandtotal}}">;


                                        <!--     <td><a href="#"><i class="fa fa-trash-o"></i></a> -->
                                           
                                            </td>
                                        </tr>
                                        
                                    
                                    @endforeach
                                @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4"></th>
                                            <th colspan="2" id="total">Rp. {{ $total }}</th>
                                        </tr>
                                    @if(is_array($data)||is_object($data))
                                        @foreach($data as $cart)
                                        <script>
                                           function qty{{$cart['id']}}(val){
                                            var a = val;
                                            var b = document.getElementById("harga{{$cart['id']}}").value;
                                            var c = document.getElementById("totaltumbal{{$cart['id']}}").value;
                                            $('#total-payment{{$cart['id']}}').html("Rp."+a*b);
                                           }
                                       </script>
                                        @endforeach
                                    @endif
                                    </tfoot>
                                </table>
                                @endif
                            </div>
                            <div class="box-footer">
                                
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                            </div>
                            </div>

@endsection
