@extends('admin.layouts.base')
@section('title','Dashboard')
@section('content')
<div class="panel panel-container">
    <div class="row">
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-teal panel-widget border-right">
          <div class="row no-padding"><em class="fa fa-xl fa-play-circle-o color-blue"></em>
            <div class="large">0</div>
            <div class="text-muted">Movies</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-blue panel-widget border-right">
          <div class="row no-padding"><em class="fa fa-xl fa-desktop color-orange"></em>
            <div class="large">0</div>
            <div class="text-muted">Series</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-orange panel-widget border-right">
          <div class="row no-padding"><em class="fa fa-xl fa-book color-teal"></em>
            <div class="large">0</div>
            <div class="text-muted">Comics</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-red panel-widget ">
          <div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
            <div class="large">1.5k</div>
            <div class="text-muted">Users</div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>
@endsection
