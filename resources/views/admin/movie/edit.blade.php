@extends('admin.layouts.base')
@section('title','Movie')
@section('content')

<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="/backend/movies.edit/{{$movie->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="{{$movie->title}}">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label>Slug</label>
              <input type="text" name="slug" class="form-control" value="{{$movie->slug}}">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label>Subtitle</label>
                <select class="form-control" name="subtitle">
                  <option value=""> -- choose one -- </option>
                  @foreach($subtitle as $row)
                  <option value="{{$row->id}}" @if($movie->subtitle_id==$row->id) selected @endif>{{$row->title}}</option>
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
                  <option value="{{$row->id}}" @if($movie->dataplan_id==$row->id) selected @endif>{{$row->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label>Link</label>
              <input type="text" name="link" class="form-control" value="{{$movie->link}}">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label>Credit</label>
              <select class="form-control" name="credit_id">
                  <option value=""> -- choose one -- </option>
                  @foreach($credit as $row)
                  <option value="{{$row->id}}" @if($movie->credit_id==$row->id) selected @endif>{{$row->title}}</option>
                  @endforeach
                </select>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label>Category</label>
              <select class="form-control" name="category_id">
                  <option value=""> -- choose one -- </option>
                  @foreach($category as $row)
                  <option value="{{$row->id}}" @if($movie->category_id==$row->id) selected @endif>{{$row->title}}</option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
              <label>Review</label>
              <textarea name="review" rows="8" cols="80" class="form-control">{{$movie->review}}</textarea>
            </div>

            <br><br>
            <div class="form-group">
              <img src="{{asset('images/movie')}}/{{$movie->image}}" style="200px;">
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
<script>
  CKEDITOR.replace( 'review' );
</script>
@endsection
