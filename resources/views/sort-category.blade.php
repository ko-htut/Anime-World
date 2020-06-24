@extends('layouts.base')
@section('title','SERIES . MOVIES')
@section('content')
<div class="container">
  <div class="section">
      
        <div class="row">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab col s3">
                      <a href="#test1" class="active">Movies</a>
                  </li>
                  <li class="tab col s3"><a href="#test2">Series</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
              @foreach($movie as $row)
                @if($row->category_id == $category->id)
                <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image">
                    <img src="{{asset('images/movie')}}/{{$row->image}}" style="height:300px;">
                    <span class="card-title bg-title">{{$row->title}}</span>
                    <a href="/movies/{{$row->id}}/{{$row->slug}}" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                        <span class="truncate">Series : </span>
      
                    <div class="max-lines"></div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
            </div>
            <div id="test2" class="col s12">
              @foreach($series as $row)
              @if($row->category_id == $category->id)
                <div class="col s12 m4 l4">
                  <div class="card">
                    <div class="card-image">
                      <img src="{{asset('images/series')}}/{{$row->images}}" style="height:300px;">
                      <div class="card-title bg-title">{{$row->title}}</div>
                      <a href="/series/{{$row->id}}/{{$row->slug}}" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <div class="max-lines"></div>
                    </div>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
      </div>


  </div>
</div>
@endsection

