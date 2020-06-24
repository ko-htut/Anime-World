@extends('layouts.base')
@section('title','MOVIES')
@section('content')
<div class="container">
  <div class="section">

    <div class="row">
      @foreach($movie as $row)
        <div class="col s12 m4 l4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset('images/movie')}}/{{$row->image}}" style="height:300px;">
              <span class="card-title bg-title">{{$row->title}}</span>
              <a href="/movies/{{$row->id}}/{{$row->slug}}" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>Subtitle :
                @foreach($subtitle as $item)
                  @if($item->id == $row->subtitle_id)
                    {{$item->title}}
                  @endif
                @endforeach
              </p>
              <p>Data Plan :
                @foreach($dataplan as $item)
                  @if($item->id==$row->dataplan_id)
                    {{$item->title}}
                  @endif
                @endforeach
              </p>
            </div>
          </div>
        </div>
      @endforeach
  </div>
  
    <div class="text-center">
        {{$movie->links()}}
    </div>
  </div>
</div>
@endsection
