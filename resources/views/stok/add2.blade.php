@extends('admin')
@section('content')
<div class="right_col" role="main">
   <div class="x_panel" style="">
      <div class="x_title">
         <h2>Form Stok</h2>
         <ul class="nav navbar-right panel_toolbox"></ul>
         <div class="clearfix"></div>
         <table class="table table-responsive">
             <thead>
                 <tr>
                     <td>Master Produk</td>
                     <td>Nama Obat</td>
                     <td>Total</td>
                 </tr>
             </thead>
             <tbody>
                @foreach($data1 as $key => $data)
                @foreach($data->produk as $key => $data2)
                    <tr>
                        <td>{{ $data2->nama_produk }}</td>
                        <td>{{ $data2->nama_obat }}</td>
                        <td>{{ $data2->total }}</td>
                    </tr>
                @endforeach
                @endforeach
            </tbody>
         </table>
         
         </ul>
      </div>
      <form action="{{ url('/stok/save/') }}" method="POST" enctype="multipart/form-data">     
         <input type="hidden" name="_token" value="{{csrf_token()}}">
      </form>
      <div class="x_content">
      </div>
   </div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div id="custom_notifications" class="custom-notifications dsp_none">
   <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
   </ul>
   <div class="clearfix"></div>
   <div id="notif-group" class="tabbed_notifications"></div>
</div>
</body>
@endsection
</html>
