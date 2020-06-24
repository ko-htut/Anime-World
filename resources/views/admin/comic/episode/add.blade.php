@extends('admin.layouts.base')
@section('title','Comic Episode')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="/backend/comic/episode.add" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group label-floating">
              <label class="control-label">Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group label-floating">
              <label class="control-label">Slug</label>
              <input type="text" name="slug" class="form-control">
            </div>
            <div class="form-group label-floating">
              <label class="control-label">Link</label>
              <input type="file" name="link" class="form-control">
            </div>
            <div class="form-group">
              <label>Season</label>
              <select class="form-control" name="season_id">
                <option value=""> -- choose one -- </option>
                @foreach($season as $row)
                  @foreach($series as $item)
                    @if($item->id == $row->series_id)
                    <option value="{{$row->id}}">{{$item->title}} >> {{$row->title}}</option>
                    @endif
                  @endforeach
                @endforeach
              </select>
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
