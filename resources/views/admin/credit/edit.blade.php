@extends('admin.layouts.base')
@section('title','Credit')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-defualt">
        <div class="panel-body">
          <form class="form" action="/backend/credit.edit/{{$credit->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="{{$credit->title}}">
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" name="slug" class="form-control" value="{{$credit->slug}}">
            </div>

            <div class="form-group">
              <label>Link</label>
              <input type="text" name="link" class="form-control" value="{{$credit->link}}">
            </div>
            <div class="form-group">
              <label>Page ID</label>
              <input type="text" name="page_id" class="form-control" value="{{$credit->page_id}}">
            </div>
            <div class="form-group">
              <img src="{{asset('images/upload')}}/{{$credit->image}}" alt="">
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
