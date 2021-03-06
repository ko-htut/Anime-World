@extends('admin.layouts.base')
@section('title','Series')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-defualt">
        <div class="panel-body">
          <form class="form" action="/backend/series/series.add" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" name="slug" class="form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label>Subtitle</label>
                <select class="form-control" name="subtitle">
                  <option value=""> -- choose one -- </option>
                  @foreach($subtitle as $row)
                  <option value="{{$row->id}}">{{$row->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label>Data Plan</label>
                <select class="form-control" name="dataplan">
                  <option value=""> -- choose one -- </option>
                  @foreach($dataplan as $row)
                  <option value="{{$row->id}}">{{$row->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label>Credit</label>
                <select class="form-control" name="credit_id">
                  <option value=""> -- choose one -- </option>
                  @foreach($credit as $row)
                  <option value="{{$row->id}}">{{$row->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                  <option value=""> -- choose one -- </option>
                  @foreach($category as $row)
                  <option value="{{$row->id}}">{{$row->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label>Comic</label>
                <select class="form-control" name="is_comic">
                  <option value=""> -- choose one -- </option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            
            <div class="form-group">
              <label>Review</label>
              <textarea name="review" rows="8" cols="80" class="form-control"></textarea>
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
