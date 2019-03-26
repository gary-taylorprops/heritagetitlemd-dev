<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- https://github.com/BlackrockDigital/startbootstrap-sb-admin-2 -->
        <title>@yield('title')</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex">

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    		<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom styles for this template-->
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
		
    </head>
    <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            @include('includes.topbar')
            @include('includes.messages')
            @yield('content')

          </div>
          <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('js/app.js') }}"></script>

      <!-- Plugin JavaScript -->
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

      <!-- Custom scripts for all pages-->
      <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'article-ckeditor' );
      </script>
    </body>
</html>