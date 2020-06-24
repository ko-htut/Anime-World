@extends('layouts.base')
@section('title','HOME')
@section('content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">

        <div class="carousel">
          @foreach($movie as $row)
          <a class="carousel-item" href="/movies/{{$row->id}}/{{$row->slug}}"><img src="{{asset('images/movie')}}/{{$row->image}}"></a>
          @endforeach
        </div>

      </div>
    </div>
    <div class="parallax"><img src="{{asset('images/home.jpg')}}" alt="Anime World Background Image"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
            <h4 class="center">Category</h4>
            <br/><br/>
            <div class="center">
                @foreach($category as $row)
                <a href="/category/{{$row->id}}/{{$row->slug}}" class="chip btn-primary" id="category1" >{{$row->title}}</a>
                @endforeach
            </div>
            
          </div>
        </div>
      </div>

    </div>
  </div>

<section style="background:#f2f2f2;">
    <div class="container" >
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Our Partners</h4>
          <br/><br/>
          @foreach($credit as $row)
          <div class="col s6 m3 m3">
              <a href="/partner/{{$row->id}}/{{$row->slug}}">
                  <img src="{{asset('images/upload')}}/{{$row->image}}" class="circle responsive-img" alt="{{$row->title}}"/>
              </a>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>
  

@endsection
