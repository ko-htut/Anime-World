@extends('admin.layouts.base')
@section('title','Data Plan')
@section('content')
<div class="panel panel-container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="/backend/dataplan.add" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group label-floating">
              <label class="control-label">Title</label>
              <input type="text" name="title" class="form-control">
            </div>

            <input type="submit" name="submit" value="Save" class="btn btn-primary">

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
