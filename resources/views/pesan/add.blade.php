@extends('app_home')
@section ('content')

<div class="box">

Kirim Bukti TF
<div class="clearfix"></div>

		   <form action="{{ url('/custom/save/') }}" method="POST" enctype="multipart/form-data" autocomplete="off">     
           <input type="hidden" name="_token"  value="{{csrf_token()}}">
            <input  type="hidden" name="id" value="{{$data->id}}" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
           <br>
            <div class="item form-group">
            <label for="password" class="control-label col-md-3">Gambar</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" name="bukti_tf">
            </div>
            </div>

            <div class="clearfix"></div>
            <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
            </div>
            

</div>

@endsection