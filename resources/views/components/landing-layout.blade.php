<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | CariBakat</title>
    <link rel="shortcut icon"
        href="https://media.istockphoto.com/id/1269500670/id/vektor/ikon-bebek-karet-kuning.jpg?s=612x612&w=0&k=20&c=FhXYJY8x9jGI8fhAht4w1wNXeZhxCAlcNTL6ri-qiX0=">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/fonts/line-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/animate.min.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }}">
    <!-- CUSTOM CSS -->
    {{ $stylesheets }}

    @vite([])
</head>

<body id="top">
    <div class="site-wrap">
        <x-partials.landing.navbar />

        {{ $content }}

        <x-partials.landing.footer />
    </div>

    <!-- SCRIPTS -->
    <script src="{{ asset('assets/landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/stickyfill.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/jquery.easing.1.3.js') }}"></script>

    <script src="{{ asset('assets/landing/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/landing/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('assets/landing/js/custom.js') }}"></script>
    <!-- CUSTOM SCRIPT -->
    {{ $scripts }}
</body>

</html>
