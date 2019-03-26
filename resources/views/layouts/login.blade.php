<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex">


        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    		<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="/css/agency.min.css" rel="stylesheet">
		
    </head>
    <body id="page-top">


      @yield('content')


      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('js/app.js') }}"></script>

      <!-- Plugin JavaScript -->
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

      <!-- Contact form JavaScript -->
      <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
      <script src="{{ asset('js/contact_me.js') }}"></script>

      <!-- Custom scripts for this template -->
      <script src="{{ asset('js/agency.min.js') }}"></script>

    </body>
</html>