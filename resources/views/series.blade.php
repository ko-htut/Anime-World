@extends('layouts.base')
@section('title','SERIES MOVIES')
@section('content')
<div class="container">
  <div class="section">

    <div class="row">

      <div class="row">
        <div class="col s12">
          <ul class="tabs tabs-fixed-width">
            <li class="tab col s3"><a href="#test1" class="active">By Seasons</a></li>
            <li class="tab col s3"><a href="#test2">By Series</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12">
          @foreach($season as $row)

          <div class="col s12 m4 l4">
            <div class="card">
              <div class="card-image">
                <img src="{{asset('images/season')}}/{{$row->image}}" style="height:300px;">
                <span class="card-title bg-title">{{$row->title}}</span>
                <a href="/season/{{$row->id}}/{{$row->slug}}" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                @foreach($series as $item)
                  @if($row->series_id == $item->id)
                    <span class="truncate">Series : {{$item->title}}</span>
                  @endif
                @endforeach
                <div class="max-lines">{!! mb_substr($row->review,0,200) !!}...</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div id="test2" class="col s12">
          @foreach($series as $row)
            <div class="col s12 m4 l4">
              <div class="card">
                <div class="card-image">
                  <img src="{{asset('images/series')}}/{{$row->images}}" style="height:300px;">
                  <div class="card-title bg-title">{{$row->title}}</div>
                  <a href="/series/{{$row->id}}/{{$row->slug}}" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <div class="max-lines">{!! mb_substr($row->review,0,200) !!}...</div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
