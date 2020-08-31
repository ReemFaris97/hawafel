<!DOCTYPE html>
<html>

<head>
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Layout |||||||||||||||||||||||||||| -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('home')</title>
    <link rel="icon" href="{{asset('website/img/logo-nav.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap-rtl.css')}}">
    @yield('styles')
    <link rel="stylesheet" href="{{asset('website/css/main.css')}}">
    <!-- /////////////////////||||||||||||||||||||||||||||| End Layout |||||||||||||||||||||||||||| -->
</head>

<body>
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Navbar |||||||||||||||||||||||||||| -->
    <h1>Layout page
    </h1>
    <!-- /////////////////////||||||||||||||||||||||||||||| End Navbar |||||||||||||||||||||||||||| -->

    @yield('content')

    <!-- /////////////////////||||||||||||||||||||||||||||| Start Footer |||||||||||||||||||||||||||| -->
    <footer>
      
    </footer>
    <!-- /////////////////////||||||||||||||||||||||||||||| End Footer |||||||||||||||||||||||||||| -->

    <!-- /////////////////////||||||||||||||||||||||||||||| Start Script |||||||||||||||||||||||||||| -->
    <script src="{{asset('website/js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
    <!-- /////////////////////||||||||||||||||||||||||||||| End Script |||||||||||||||||||||||||||| -->
</body>

</html>
