@extends('admin.layouts.base')
@section('title','Comic Episode')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="/backend/comic/episode.add" class="btn btn-primary pull-right">Add</a>
        </div>
        <div class="panel-body">
          @if($episode->isEmpty())
          <div class="alert alert-danger">
            <h3 class="text-center">There is no data!</h3>
          </div>
          @else
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th>Title</th>
                <th>Season</th>
                <th>Series</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($episode as $row)
              <tr>
                <td>{{$row->title}}</td>
                <td>
                  @foreach($season as $item)
                    @if($item->id == $row->season_id)
                      {{$item->title}}
                    @endif
                  @endforeach
                </td>
                <td>
                  @foreach($season as $item)
                    @if($item->id == $row->season_id)
                      @foreach($series as $a)
                        @if($a->id == $item->series_id)
                        {{$a->title}}
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                </td>
                <td>
                  <a href="/backend/comic/episode.edit/{{$row->id}}" class="btn btn-info">Edit</a>
                  <a href="/backend/comic/episode.delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
          <div class="text-center">
              {{$episode->links()}}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
