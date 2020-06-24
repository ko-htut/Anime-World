@extends('admin.layouts.base')
@section('title','Subtitle')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="/backend/subtitle.add" class="btn btn-primary pull-right">Add</a>
        </div>
        <div class="panel-body">
          @if($subtitle->isEmpty())
          <div class="alert alert-danger">
            <h3 class="text-center">There is no data!</h3>
          </div>
          @else
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th>Flag</th>
                <th>Language</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subtitle as $row)
              <tr>
                <td><img src="{{asset('images/flag')}}/{{$row->image}}" style="width:100px;"> </td>
                <td>{{$row->title}}</td>
                <td>
                  <a href="/backend/subtitle.edit/{{$row->id}}" class="btn btn-info">Edit</a>
                  <a href="/backend/subtitle.delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
