@extends('admin')
@section('content')
<div class="right_col" role="main">
     <div class="x_panel" style="">
            <div class="x_title">
                    <h2>View Blog</h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <tr class="headings">
                         <th>Id<center> </th>
                         <th>Judul</th>
                         <th>Isi</th>
                         <th>Gambar</th>
                        </tr>
                           </thead> 
                           <tbody>   
                          @foreach($data as $key => $blog)
                        <tr>
                            <td>{{ $blog->id}}</td>
                            <td>{{ $blog->judul}}</td>
                            <td>{{ $blog->isi}}</td>
                            <td>{{ $blog->gambar}}</td>  
                         </tr> 
                          @endforeach                     
                    </tbody>
                  </table>
                </div>
              </div>
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