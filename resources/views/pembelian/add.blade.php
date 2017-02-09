@extends('admin')
@section('content')

<!-- Modal -->
          <!--         <form action="{{ url('/harga/add/') }}" method="POST" > 
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale" aria-hidden="true"
                  aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title">Harga</h4>
                        </div>
                        <div class="modal-body">
                          <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Total Harga</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="password" type="number" name="harga" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                             </div>
                            </div>  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default margin-0" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form> -->
                  <!-- End Modal -->

<script type="text/javascript">
  function showData(no_pesanan,nama_pembeli,no_hp,email,alamat,nama_barang,jenis_barang,warna,ukuran,jumlah_barang,keterangan,status, foto,harga,bukti_tf) {
 
                        $('#no-pesanan').html(no_pesanan);
                        $('#nama-pesan').html(nama_pembeli);
                        $('#telp-pesan').html(no_hp);
                        $('#email').html(email);
                        $('#alamat-pesan').html(alamat);
                        $('#nama-barang').html(nama_barang);
                        $('#jenis-barang').html(jenis_barang);
                        $('#warna').html(warna);
                        $('#ukuran').html(ukuran);
                        $('#jumlah-barang').html(jumlah_barang);
                        $('#about').html(keterangan);
                        $('#state').html(status);
                        $('#gambar-pesan').html(foto);
                        $('#harga').html(harga);
                        $('#bukti-tf').html(bukti_tf);

  }
</script>

<div class="right_col" role="main">
     <div class="x_panel" style="">
            <div class="x_title">
                    <h2>Form Pemesanan</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>

                <table aria-describedby="example2_info" role="grid" id="example2" class="table table-bordered table-hover dataTable">
                <thead>
                <tr role="row">
                    <th>No</th>
            				<th>Nama Pemesan</th>
            				<th>Nomor Telepon</th>
                    <th>Nomor Pemesanan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($data as $pesanan)
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td>
                          <a href="#" data-toggle="modal" data-target="#detail" style="text-decoration: none;" onclick="showData('{{ $pesanan->no_pesanan }}','{{ $pesanan->nama_pembeli }}','{{ $pesanan->no_hp }}','{{ $pesanan->email }}','{{ $pesanan->alamat }}','{{ $pesanan->nama_barang }}','{{ $pesanan->jenis_barang }}','{{ $pesanan->warna }}','{{ $pesanan->ukuran }}','{{ $pesanan->jumlah_barang }}','{{ $pesanan->keterangan }}', '{{ $pesanan->status }}', '{{ $pesanan->foto }}', '{{ $pesanan->harga }}', '{{ $pesanan->bukti_tf }}')">{{$pesanan->nama_pembeli}}</a>
                      </td>
                      <td>{{$pesanan->no_hp}}</td>
                      <td>{{$pesanan->no_pesanan}}</td>
                      <td>
                      @if($pesanan->status=='pending')
                      PENDING
                      @else
                      @if($pesanan->status=='DITOLAK')
                      DITOLAK
                      @elseif($pesanan->status=='DITERIMA')
                      DITERIMA
                      @endif
                      @endif
                      </td>
                      <td>
                      <a href="{{url('/admin/pembelian/destroy/'.$pesanan->id) }}" onclick="return confirm('Apakah anda yakin ingin menyetujui pesanan?')" class="btn btn-primary">Hapus</a>
                        @if($pesanan->status=='pending')
                      <a href="{{url('/admin/pembelian/reject/'.$pesanan->id) }}" onclick="return confirm('Apakah anda yakin ingin menolak pesanan?')" class="btn btn-danger">Tolak</a>
                      <a href="!" class="btn btn-primary" data-target="#exampleNiftyFadeScale" data-toggle="modal">Terima</a>

                      @else
                      @endif
                      </td>
                    </tr>
                            <form action="{{ url('/harga/add/') }}" method="POST" > 
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale" aria-hidden="true"
                  aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title">Harga</h4>
                        </div>
                        <div class="modal-body">
                          <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Total Harga</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="password" type="number" name="harga" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                            <input type="hidden" name="id" value="{{$pesanan->id}}">
                             </div>
                            </div>  
                        </div>
                        <div class="modal-footer">
                          <button  class="btn btn-default margin-0" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                @endforeach
                </tbody>
          
              </table>

<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pesanan <span id="title-pesan"></span></h4>
      </div>
      <div class="modal-body">
        <div class="row" style="margin: auto;">
            <table class="table">
                <tr>
                    <td>Nomor Pemesanan</td>
                    <td id="no-pesanan"></td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td id="nama-pesan"></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td id="telp-pesan"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td id="email"></td>
                </tr>
                  <tr>
                    <td>Alamat</td>
                    <td id="alamat-pesan"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td id="nama-barang"></td>
                </tr>
                <tr>
                    <td>Jenis Barang</td>
                    <td id="jenis-barang"></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td id="warna"></td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td id="ukuran"></td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td id="jumlah-barang"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td id="about"></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td id="state"></td>
                </tr>
                <tr>
                  <td>Harga</td>
                  <td id="harga"></td>
                </tr>
                 <tr>
                  <td>Bukti Transfer</td>
                  <td id="bukti-tf"></td>
                </tr>
            </table>
        </div>
        <div>
          <img src="" style="max-width:100%; height:auto" id="gambar-pesan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
</div>
</div> 
@endsection