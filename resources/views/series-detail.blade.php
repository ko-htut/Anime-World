@extends('layouts.base-series')
@section('title','SERIES')
@section('content')
<div class="container">
  <div id="headers" class="section scrollspy">
    <h2 class="header zawgyi">{{$series->title}}</h2>
    <div class="row">
      <div class="col s12 m4 l4" style="padding:5px;">
        <img src="{{asset('images/series')}}/{{$series->images}}" style="border-radius:8px; width:300px;" class="materialboxed" data-caption="{{$series->title}}">
      </div>
      <div class="col s12 m8 l8">
        <table class="bordered responsive-table">
          <tr>
            <td>Title</td>
            <td>{{$series->title}}</td>
          </tr>
          <tr>
            <td>Subtitle</td>
            <td>
              @foreach($subtitle as $row)
                @if($row->id == $series->subtitle_id)
                  <span class="zawgyi">{{$row->title}}</span>
                @endif
              @endforeach
            </td>
          </tr>
          <tr>
            <td>Data Plan</td>
            <td>
              @foreach($dataplan as $row)
                @if($row->id==$series->dataplan_id)
                  <span class="zawgyi">{{$row->title}}</span>
                @endif
              @endforeach
            </td>
          </tr>
          <tr>
              <td>Category</td>
              <td>
                  @foreach($category as $row)
                    @if($row->id == $series->category_id)
                        <span class="zawgyi">{{$row->title}}</span>
                    @endif
                  @endforeach
              </td>
          </tr>
          <tr>
              <td>Credit</td>
              <td>
                  @foreach($credit as $row)
                    @if($row->id == $series->credit_id)
                        <span class="zawgyi">{{$row->title}}</span>
                    @endif
                  @endforeach
              </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="zawgyi">
        {!! $series->review!!}
    </div>
    
    <ul class="collapsible popout" data-collapsible="accordion">
      @foreach($season as $row)
      @if($row->series_id == $series->id)
      <li>
        <div class="collapsible-header"><i class="material-icons">movie</i>{{$row->title}}</div>
        <div class="collapsible-body"><span>{!! $row->review !!}</span>
          <br>
          <a href="/season/{{$row->id}}/{{$row->slug}}" class="btn btn-info">View Detail</a>
        </div>
      </li>
      @endif
      @endforeach
    </ul>
  </div>
</div>
@endsection
