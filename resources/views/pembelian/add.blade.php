@extends('admin')
@section('content')

<script type="text/javascript">
  function showData(no_pesanan,nama_pembeli,no_hp,email,alamat,nama_barang,jenis_barang,warna,ukuran,jumlah_barang,keterangan,status, foto) {
 
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
                          <a href="#" data-toggle="modal" data-target="#detail" style="text-decoration: none;" onclick="showData('{{ $pesanan->no_pesanan }}','{{ $pesanan->nama_pembeli }}','{{ $pesanan->no_hp }}','{{ $pesanan->email }}','{{ $pesanan->alamat }}','{{ $pesanan->nama_barang }}','{{ $pesanan->jenis_barang }}','{{ $pesanan->warna }}','{{ $pesanan->ukuran }}','{{ $pesanan->jumlah_barang }}','{{ $pesanan->keterangan }}', '{{ $pesanan->status }}', '{{ $pesanan->foto }}')">{{$pesanan->nama_pembeli}}</a>
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
                      <a href="/admin/pembelian/{{$pesanan->id}}/destroy" onclick="return confirm('Apakah anda yakin ingin menyetujui pesanan?')" class="btn btn-primary">Hapus</a>
                        @if($pesanan->status=='pending')
                      <a href="/admin/pembelian/{{$pesanan->id}}/reject" onclick="return confirm('Apakah anda yakin ingin menolak pesanan?')" class="btn btn-danger">Tolak</a>
                      <a href="/admin/pembelian/{{$pesanan->id}}/accept" onclick="return confirm('Apakah anda yakin ingin menyetujui pesanan?')" class="btn btn-primary">Terima</a>

                      @else
                      @endif
                      </td>
                    </tr>
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