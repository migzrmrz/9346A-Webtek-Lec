<!DOCTYPE html>
<html lang="en">
<head>
    <title>Colorlib Listed Directory Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
</head>
<body>
    @include('inc.nav')
    @yield('content')

    <script src="{{ asset('bootstrap/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/main.js') }}"></script>
</body>
</html>