<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend - @yield('title')</title>
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>
  @include('admin.layouts.nav')
  @include('admin.layouts.sidebar')
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="/backend/dashboard"><em class="fa fa-home"></em></a></li>
        <li class="active">@yield('title')</li>
      </ol>
    </div><!--/.row-->

  	<div class="row">
  		<div class="col-lg-12">
  			<h1 class="page-header">@yield('title')</h1>
  		</div>
  	</div><!--/.row-->

    @yield('content')
    </div>
  </div>


  <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/chart.min.js')}}"></script>
	<script src="{{asset('assets/js/chart-data.js')}}"></script>
	<script src="{{asset('assets/js/easypiechart.js')}}"></script>
	<script src="{{asset('assets/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
</body>
</html>
