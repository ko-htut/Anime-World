<html lang="en">
  <head>
     
     <meta name="description" content="AMST မှ Anime ချစ်သူတို့အတွက် အင်္ဂလိပ်၊ မြန်မာ စာတန်းထိုးများကို တင်ဆက်ပေးလျှက်ရှိပါသည်။" />
    <meta itemprop="headline" content="{{$series->title}}">
    <meta itemprop="image" content="http://mmanimeworld.com/images/series/{{$series->images}}">
    <meta itemprop="url" content="http://mmanimeworld.com/series/{{$series->id}}/{{$series->slug}}" />
    <meta itemprop="author" content="Anime World" />
    <meta itemprop="datePublished" content="{{$series->created_at}}" />
    <meta itemprop="description" content="Anime World မှ Anime ချစ်သူတို့အတွက် အင်္ဂလိပ်၊ မြန်မာ စာတန်းထိုးများကို တင်ဆက်ပေးလျှက်ရှိပါသည်။">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AnimeWorld">
    <meta name="twitter:title" content="{{$series->title}}">
    <meta name="twitter:creator" content="@AnimeWorld">
    <meta name="twitter:image:src" content="http://mmanimeworld.com/images/series/{{$series->images}}">
    <meta name="twitter:description" content="AMST မှ Anime ချစ်သူတို့အတွက် အင်္ဂလိပ်၊ မြန်မာ စာတန်းထိုးများကို တင်ဆက်ပေးလျှက်ရှိပါသည်။"/>
    <meta property="og:title" content="{{$series->title}}" />
    <meta property="og:type" content="series" />
    <meta property="og:url" content="http://mmanimeworld.com/series/{{$series->id}}/{{$series->slug}}"/>
    <meta property="og:image" content="http://mmanimeworld.com/images/series/{{$series->images}}"/>
    <meta property="og:description" content="AMST မှ Anime ချစ်သူတို့အတွက် အင်္ဂလိပ်၊ မြန်မာ စာတန်းထိုးများကို တင်ဆက်ပေးလျှက်ရှိပါသည်။"/>
    <meta property="og:site_name" content="www.mmanimeworld.com" />


    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta charset="utf-8">
    <title>{{$series->title}} - AMST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
    
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