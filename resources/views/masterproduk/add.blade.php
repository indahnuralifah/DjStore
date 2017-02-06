@extends('admin')
@section('content')
<div class="right_col" role="main">
<!--             <div class="x_title">
                    <h2>Form Master Produk</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>
 -->
           <form action="{{ url('/masterproduk/save/') }}" method="POST" >     
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
            <div class="x_content">
            <br>    
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" type="text" name="nama_produk" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
             </div>
            </div>   

            <div class="clearfix"></div>
            <br>
            <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
            </div>
            </div>
            </div><br>
      <h3 style="float:left">View Master Produk</h3>
      <br>

            <div class="x_panel" style="">
                
              
            <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                                <tr class="headings">
                                 <th>No<center> </th>
                                 <th>Nama Produk</th>
                                 <th></th>
                                 <th></th> 
                                </tr>
                             </thead> 
                           <tbody>   
                           <?php $i = 1; ?>
                          @foreach($data2 as $masterproduk)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $masterproduk->nama_produk}}</td>
                            <td>
                        <a href="{{ url('/edit/masterproduk/'.$masterproduk->id) }}"><i class="icon wb-edit" aria-hidden="true">Edit</i></a>
                        </td>
                        <td>
                              <a href="{{ url('/delete/masterproduk/'.$masterproduk->id) }}" onclick="return confirm('Delete?')"><i class="icon wb-trash" aria-hidden="true">Delete</i></a>
                              </td>
                         </tr> 
                          @endforeach                     
                    </tbody>
                  </table>
                </div>
             



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
</html>
@endsection