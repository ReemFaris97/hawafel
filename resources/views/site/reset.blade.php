<!DOCTYPE html>
<html>

<head>
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Layout |||||||||||||||||||||||||||| -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('website/img/logo2.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap-rtl.css')}}">
    @yield('styles')
    <link rel="stylesheet" href="{{asset('website/css/main.css')}}">
    <!-- /////////////////////||||||||||||||||||||||||||||| End Layout |||||||||||||||||||||||||||| -->
</head>

<body>
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Content |||||||||||||||||||||||||||| -->
    @yield('content')

   

    <!-- /////////////////////||||||||||||||||||||||||||||| End Content |||||||||||||||||||||||||||| -->


    <script src="{{asset('website/js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    <script>

    </script>
    @yield('scripts')
    <!-- /////////////////////||||||||||||||||||||||||||||| End Script |||||||||||||||||||||||||||| -->
</body>

</html>
