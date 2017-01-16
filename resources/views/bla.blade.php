@extends('app_home')

@section('content')
       
<div class="col-md-9">
                    <div class="box">
                        <h1>Custom Items</h1>
                        <p class="lead">Bisa mengcustom items sesuka hati kamu</p>
                        <p class="text-muted">Hanya berlaku untuk Jersey, T-Shirt, Topi.</p>

                        
                        <form action="{{ url('/custom/save/') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Nama Pemesan</label>
                                        <input type="password" class="form-control" id="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">Nomor Telepon</label>
                                        <input type="password" class="form-control" id="password_1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Email</label>
                                        <input type="password" class="form-control" id="password_2">
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Alamat</label>
                                        <textarea type="message" class="form-control"></textarea>
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
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">Jenis Item</label>
                                        <select class="form-control" id="state">
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
                                        <input type="text" class="form-control" id="company">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Ukuran</label>
                                        <select class="form-control" id="state">
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
                                        <input type="number" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Keterangan</label>
                                          <textarea type="message" class="form-control"></textarea
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
