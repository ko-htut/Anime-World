@extends('admin.layouts.base')
@section('title','Season')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-defualt">
        <div class="panel-body">
          <form class="form" action="/backend/series/season.add" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" name="slug" class="form-control">
            </div>
            <div class="form-group">
              <label>Review</label>
              <textarea name="review" rows="8" cols="80" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label>Series</label>
              <select class="form-control" name="series_id">
                <option value=""> -- choose one -- </option>
                @foreach($series as $row)
                <option value="{{$row->id}}">{{$row->title}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <input type="file" name="image">
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  CKEDITOR.replace( 'review' );
</script>
@endsection
