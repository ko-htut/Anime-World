@extends('admin.layouts.base')
@section('title','Movie')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="/backend/movies.add" class="btn btn-primary pull-right">Add</a>
        </div>
        <div class="panel-body">
          @if($movie->isEmpty())
          <div class="alert alert-danger">
            <h3 class="text-center">There is no data!</h3>
          </div>
          @else
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Data Plan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($movie as $row)
              <tr>
                <td><img src="{{asset('images/movie')}}/{{$row->image}}" style="width:100px;"> </td>
                <td>{{$row->title}}</td>
                <td>
                  @foreach($subtitle as $item)
                    @if($item->id == $row->subtitle_id)
                    {{$item->title}}
                    @endif
                  @endforeach
                </td>
                <td>
                  @foreach($dataplan as $item)
                    @if($item->id == $row->dataplan_id)
                      {{$item->title}}
                    @endif
                  @endforeach
                </td>
                <td>
                  <a href="/backend/movies.edit/{{$row->id}}" class="btn btn-info">Edit</a>
                  <a href="/backend/movies.delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
          <div class="text-center">
              {{$movie->links()}}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
