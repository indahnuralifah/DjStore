@extends('app_home')
@section('content')
    <script src="{{url('js/jquery-1.11.0.min.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
  $(document).ready(function(){
    // $('#nomor_telepon').on('keyup',function(){
    //   var phone = $(this).val();
    //   alert(phone.replace("-",""));
    //   // $('#hidden_phone').val(phone);
    //   // alert($('#hidden_phone').val());
    // });
    $('#modal_form').submit(function(e){
      // formData = new FormData($('#modal_form')[0]);
      e.preventDefault();
      $.ajax({
        url: '{{ url('custom/store') }}',
        type: 'POST',
        data: $('#modal_form').serializeArray(),
        success:function(data){
          // if (data.success==true) {
            if (data.success==false) {
              alert(data.error_msg);
            }
            else{
              $('#p_id').html('Terimakasih sudah memesan :) <a href="/order">klik disini</a></p> <b>*Copy nomor pesanan anda</b> </p>'+'<h1>'+data.nomor_pesanan.no_pesanan+'</h1>');
              $('#no_pesanan').modal();
            }
          // }

          // else{
          //   console.log('fail');
          // }
        },
        error:function(){
          console.log('error');
        }
      });
    });
  });
</script>
<div class="example-modal">
<div>
        <div class="modal" id="no_pesanan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nomor Pemesanan Anda</h4>
              </div>
              <div class="modal-body">
                <p id="p_id"></p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      </div>
       
<div class="col-md-9">
                    <div class="box">
                        <h1>Custom Items</h1>
                        <p class="lead">Bisa mengcustom items sesuka hati kamu</p>
                        <p class="text-muted">Hanya berlaku untuk Jersey, T-Shirt, Topi.</p>

                        
                       
                        
            <div class="x_content">

            <form id="modal_form" role="form" autocomplete="off">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Nama Pemesan</label>
                                        <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">Nomor Telepon</label>
                                      <!--   <input name="telp" class="form-control" id="nomor_telepon" required="" type="text" value="{{old('telp')}}" data-inputmask='"mask": "9999-9999-9999"' data-mask>
                  <input type="hidden" name="hidden_phone"> -->
                                        <input type="number" name="no_hp" class="form-control" id="no_hp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Email</label>
                                        <input type="text" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Alamat</label>
                                        <textarea type="message" name="alamat" id="alamat" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                    
                           

                        <hr>

                        <h4>Details</h4>
                        
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Nama Item</label>
                                        <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">Jenis Item</label>
                                        <select class="form-control" name="jenis_barang" id="jenis_barang">
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
                                        <input type="text" class="form-control" name="warna" id="warna">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Ukuran</label>
                                        <select class="form-control" name="ukuran" id="ukuran">
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
                                        <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Keterangan</label>
                                          <textarea type="message" name="keterangan" class="form-control" id="keterangan" ></textarea
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>

                                </div>
                            </div>
                        </form>
                    </div>
               

        
                   
           
@endsection
