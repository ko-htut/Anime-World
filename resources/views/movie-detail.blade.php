@extends('layouts.base')
@section('title','MOVIES')
@section('content')
<div class="container">
  <div id="headers" class="section scrollspy">
    <h2 class="header">{{$movie->title}}</h2>
    <img src="{{asset('images/movie')}}/{{$movie->image}}" style="border-radius:8px; width:300px;" class="materialboxed">
    <hr>
    <table class="bordered responsive-table">
      <tr>
        <td>
          Subtitle :
          @foreach($subtitle as $row)
            @if($row->id == $movie->subtitle_id)
              {{$row->title}}
            @endif
          @endforeach
        </td>
        <td>
          Data Plan :
          @foreach($dataplan as $row)
            @if($row->id==$movie->dataplan_id)
              {{$row->title}}
            @endif
          @endforeach
        </td>
        <td>
          <a href="{{$movie->link}}" class="btn btn-info" target="_blank">Download</a>
        </td>
      </tr>
    </table>
    <div class="zawgyi">
        {!! $movie->review!!}
    </div>
    

  </div>
</div>
@endsection
