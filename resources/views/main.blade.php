<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="{{ config('app.name', 'Premium Limousine') }} - Luxury Chauffeur & Limousine Services">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Alar Chauffeur Service | Luxury Transportation">
    <meta property="og:description"
        content="Premium limousine and luxury chauffeur services. Providing elegant, reliable, and safe transportation.">
    <meta property="og:image" content="{{ asset('assets/img/logo/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <title>Alar Chauffeur Service | Luxury Transportation</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/fav-icon.png') }}">
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

    <!-- WhatsApp Floating Button -->
    <a href="{{ config('contact.whatsapp_link') }}" class="ve-whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <i class="fa fa-whatsapp"></i>
    </a>
</body>

</html>
