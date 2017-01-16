@extends('app_home')
@section('content')
       
<div class="col-md-9">
                    <div class="box">
                        <h1>Custom Items</h1>
                        <p class="lead">Bisa mengcustom items sesuka hati kamu</p>
                        <p class="text-muted">Hanya berlaku untuk Jersey, T-Shirt, Topi.</p>

                        
                        <form action="{{ url('/custom/save/') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="x_content">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Nama Pemesan</label>
                                        <input type="text" name="nama_pembeli" class="form-control" id="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">Nomor Telepon</label>
                                        <input type="text" name="no_telp" class="form-control" id="password_1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Email</label>
                                        <input type="text" name="email" class="form-control" id="password_2">
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Alamat</label>
                                        <textarea type="message" name="alamat" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                    
                           
                        </form>

                        <hr>

                        <h4>Details</h4>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Nama Item</label>
                                        <input type="text" class="form-control" name="nama_barang" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">Jenis Item</label>
                                        <select class="form-control" name="jenis_barang" id="state">
                                            <option>Jersey</option>
                                            <option>TShirt</option>
                                            <option>Topi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company">Warna</label>
                                        <input type="text" class="form-control" name="warna" id="company">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Ukuran</label>
                                        <select class="form-control" name="ukuran" id="state">
                                            <option>XXL</option>
                                            <option>XL</option>
                                            <option>L</option>
                                            <option>ML</option>
                                            <option>M</option>
                                            <option>S</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                    
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Jumlah Barang</label>
                                        <input type="number" class="form-control" name="jumlah_barang" id="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Keterangan</label>
                                          <textarea type="message" name="keterangan" class="form-control"></textarea
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        
                   
           
@endsection
