<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Anime Movies</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109857073-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-109857073-5');
    </script>

  </head>
  <body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

  </body>
  </html>
