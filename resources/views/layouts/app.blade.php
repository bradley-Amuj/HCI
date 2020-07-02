<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d2773e0767.js" crossorigin="anonymous"></script>  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
     <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
       <link rel="stylesheet" href="{{ asset('css/animate.css') }}">


    <!-- Owl Carousel main css -->
  
   
   
  <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    

    
</head>
<body>
    <div id="app">
 <div class="super_container">
        @include('inc.topbar')
        @include('inc.header')
        @include('inc.navbar')
        @include('inc.slider')
        @include('inc.banner')
        @include('inc.dealsnFeatures')
        @include('inc.popularcat')
        @include('inc.explore')
        @include('inc.trend')
        @include('inc.brands')
        @include('inc.footer')
        <main class="py-4">
            <div class="container">
            @yield('content')
        </div>
        
        </main>
 </div>
    </div>
</body>
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="jquery.min.js"></script>
    <script src="{{ asset('css/owl.carousel.js') }}"></script>
</html>

