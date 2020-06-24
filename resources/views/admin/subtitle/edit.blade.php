@extends('admin.layouts.base')
@section('title','Subtitle')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-defualt">
        <div class="panel-body">
          <form class="form" action="/backend/subtitle.edit/{{$subtitle->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label>Language</label>
              <input type="text" name="title" class="form-control" value="{{$subtitle->title}}">
            </div>
            <div class="form-group">
              <img src="{{asset('images/flag')}}/{{$subtitle->image}}" style="width:200px;">
              <br><br>
              <input type="file" name="image">

            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
