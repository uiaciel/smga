<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PT. Sumber Mineral Global Abadi Tbk</title>
    <meta name="title" content="PT. Sumber Mineral Global Abadi Tbk">
    <meta name="description" content="{{ __('frontend.profil') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sumbermineralglobalabadi.com/">
    <meta property="og:title" content="PT. Sumber Mineral Global Abadi Tbk">
    <meta property="og:description"
        content="PT. Sumber Mineral Global Abadi has experience in the mineral business supported by qualified natural resources as well as professional human resources as our step to provide quality and sustainable products">
    <meta property="og:image" content="{{ asset('img/header-SMGA.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sumbermineralglobalabadi.com/">
    <meta property="twitter:title" content="PT. Sumber Mineral Global Abadi Tbk">
    <meta property="twitter:description"
        content="PT. Sumber Mineral Global Abadi has experience in the mineral business supported by qualified natural resources as well as professional human resources as our step to provide quality and sustainable products">
    <meta property="twitter:image" content="{{ asset('img/header-SMGA.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    {{-- <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json"> --}}
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

    </style>
</head>

<body class="bg-dark">
    {{-- <nav class="py-0 bg-primary  ">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="bi bi-telephone-fill">
                            +6221 – 250 0120</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i
                            class="bi bi-envelope-fill"></i> info@sumberglobalenergy.com</a></li>

            </ul>
            <ul class="nav d-none d-lg-block d-xl-none">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
            </ul>
        </div>
    </nav> --}}


    @yield('slider')
    <main>
        @yield('content')
    </main>



</body>

</html>
