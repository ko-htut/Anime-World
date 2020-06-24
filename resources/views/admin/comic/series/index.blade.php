@extends('admin.layouts.base')
@section('title','Comic Series')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="/backend/comic/series.add" class="btn btn-primary pull-right">Add</a>
        </div>
        <div class="panel-body">
          @if($series->isEmpty())
          <div class="alert alert-danger">
            <h3 class="text-center">There is no data!</h3>
          </div>
          @else
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($series as $row)
              <tr>
                <td><img src="{{asset('images/comic')}}/{{$row->images}}" style="width:100px;"> </td>
                <td>{{$row->title}}</td>
                <td>
                  <a href="/backend/comic/series.edit/{{$row->id}}" class="btn btn-info">Edit</a>
                  <a href="/backend/comic/series.delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
          <div class="text-center">
              {{$series->links()}}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
