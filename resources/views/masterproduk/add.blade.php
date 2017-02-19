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
                <h1 class="page-title">Master Produk</h1>
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
              <form action="{{ url('/masterproduk/save/') }}" method="POST" >     
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
                <div class="form-group form-material floating">
                  <input type="text" class="form-control input-lg" name="nama_produk"/>
                  <label class="floating-label">Nama Produk</label>
                </div>
              
              <div class="col-md-6 col-md-offset-10">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
            
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Data Master Produk</h3>
        </header>

        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th></th>
                <th>Hapus</th>
                <th>Edit</th>
              </tr>
            </thead>  
            <tbody>
                  <?php $i = 1; ?>
                  @foreach($data2 as $masterproduk)
              <tr>
                <td>{{ $i++}}</td>
                <td>{{ $masterproduk->nama_produk}}</td>
                <td></td>
                <td>
                    <a href="{{ url('/edit/masterproduk/'.$masterproduk->id) }}"><i class="icon wb-edit" aria-hidden="true">Edit</i></a>
                </td>
                <td>
                    <a href="{{ url('/delete/masterproduk/'.$masterproduk->id) }}" onclick="return confirm('Delete?')"><i class="icon wb-trash" aria-hidden="true">Delete</i></a>
                </td>
              </tr>
              </form>
              @endforeach 
            </tbody>
          </table>
        </div>
</div>



@endsection