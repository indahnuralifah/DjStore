@extends('admin')
@section('content')

<script>
(function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });
</script>

<div class="example example-well">
              <div class="page-header">
                <h1 class="page-title">Produk</h1>
                <div class="page-header-actions">
                  <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active">You are Here</li>
                  </ol>
                </div>
              </div>
</div>

<div class="panel">

   <div class="panel-body container-fluid">
        <form action="{{ url('/produk/save/') }}" method="POST" enctype="multipart/form-data" autocomplete="off"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
           
                <div class="form-group form-material floating">
                  <input type="text" class="form-control input-lg" name="nama_barang"/>
                  <label class="floating-label">Nama Barang</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="number" class="form-control input-lg" name="harga"/>
                  <label class="floating-label">Harga</label>
                </div>
                <div class="form-group form-material floating">
                  <select class="form-control" name="nama_produk">
                    @foreach ($produk as $masterproduk)
                       <option>{{ $masterproduk->nama_produk }}</option>
                    @endforeach
                  </select>
                  <label class="floating-label">Nama Produk</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="number" class="form-control input-lg" name="total"/>
                  <label class="floating-label">Jumlah Stok Barang</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control" readonly="" />
                  <input type="file" name="gambar" multiple="" />
                  <label class="floating-label">Gambar</label>
                </div>
              
              <div class="col-md-6 col-md-offset-10">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
              </div>
    </div>


     <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Data Produk</h3>
        </header>

        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
               <th>No<center> </th>
                   <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Nama Produk</th>
                    <th>Stok</th> 
                    <th>Gambar</th>
                    <th></th>
                    <th></th>
              </tr>
            </thead>  
            <tbody>
                  <?php $i = 1; ?>
                  @foreach($b as $bb)
              <tr>
                    <td>{{ $i++}}</td>
                    <td>{{ $bb->nama_barang}}</td>
                    <td>{{ $bb->harga}}</td>
                    <td>{{ $bb->nama_produk}}</td>
                    <td>{{ $bb->total}}</td>
                    <td><img src="{{ url('gambar/'.$bb->gambar) }}" alt="" style="max-width:100%;height: 40px;"></td>
                   <td>
                        <a href="{{ url('/edit/produk/'.$bb->id) }}"><i class="icon wb-edit" aria-hidden="true">Edit</i></a>
                    </td>
                    <td>
                              <a href="{{ url('/delete/produk/'.$bb->id) }}" onclick="return confirm('Delete?')"><i class="icon wb-trash" aria-hidden="true">Delete</i></a>
                   </td>
              </tr>
              </form>
              @endforeach 
            </tbody>
          </table>
        </div> 


</div>



@endsection