@extends('layouts.base')
@section('title','SEASON')
@section('content')
<div class="container">
  <div id="headers" class="section scrollspy">
    <h2 class="header">{{$season->title}}</h2>
    <div class="row">
      <div class="col s12 m4 l4" style="padding:5px;">
        <img src="{{asset('images/season')}}/{{$season->image}}" style="border-radius:8px; width:300px;">
      </div>
      <div class="col s12 m8 l8">

      </div>
    </div>

    {!! $season->review!!}
    <ul class="collapsible popout" data-collapsible="accordion">

    </ul>

    <ul class="collection with-header">
      <li class="collection-header"><h4>Episodes</h4></li>
      @foreach($episode as $row)
      @if($row->season_id == $season->id)
      <li class="collection-item"><div>{{$row->title}}<a href="{{$row->link}}" class="secondary-content" target="_blank"><i class="material-icons">cloud_download</i></a></div></li>
      @endif
      @endforeach
    </ul>

  </div>
</div>
@endsection
