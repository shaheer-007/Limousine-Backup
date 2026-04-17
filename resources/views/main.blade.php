<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ config('app.name', 'Premium Limousine') }} - Luxury Chauffeur & Limousine Services">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Premier Limousine') }} | Luxury Transportation</title>
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-override.css') }}">

</head>

<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
    <script src="{{ asset('assets/js/vaultedge.js') }}"></script>
</body>
</html>