@extends('app_home')
@section('content')

<style type="text/css">
    .none{
        display: none!important;
    }
</style>
            <div class="box">
            <form id="form_check">
            <div class="form-group">
                  <label>Masukan Id Pemesanan</label>
                  <input type="text" class="form-control" id="no_pesanan" placeholder="Id Pemesanan" name="no_pesanan">
                </div> 

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

             <div class="row none" style="margin: auto;" id="info-message">
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
                    <td>Alamat</td>
                    <td id="alamat-pesan"></td>
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
                    <td>Nama Item</td>
                    <td id="nama-item"></td>
                </tr>
                 <tr>
                    <td>Warna</td>
                    <td id="warna"></td>
                </tr>
                 <tr>
                    <td>Jumlah Barang</td>
                    <td id="jumlah-barang"></td>
                </tr>
                 <tr>
                    <td>Jenis Item</td>
                    <td id="jenis-item"></td>
                </tr>
                 <tr>
                    <td>Ukuran</td>
                    <td id="ukuran"></td>
                </tr>
                 <tr>
                    <td>Keterangan</td>
                    <td id="keterangan"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td id="status"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td id="harga"></td>
                </tr>

                   
            </table>
             <div class="box-footer collapse-right">
                        <a href="{{url('pesan/add')}}" class="btn btn-primary navbar-btn" >Order</a>
                    </div>
        </div>
    </div>
@endsection