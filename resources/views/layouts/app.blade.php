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
        content="PT. Sumber Mineral Global Abadi Tbk has experience in the mineral business supported by qualified natural resources as well as professional human resources as our step to provide quality and sustainable products">
    <meta property="og:image" content="{{ asset('img/header-SMGA.png') }}">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sumbermineralglobalabadi.com/">
    <meta property="twitter:title" content="PT. Sumber Mineral Global Abadi Tbk">
    <meta property="twitter:description"
        content="PT. Sumber Mineral Global Abadi Tbk has experience in the mineral business supported by qualified natural resources as well as professional human resources as our step to provide quality and sustainable products">
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
        p {
            color: black;
        }

        .bg-page-header {
            position: relative;
        }

        .bg-page-header:after {
            background: rgba(244, 99, 11, 0.92);
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
        }

        .bg-page-header .page-header {
            text-align: center;
            border-bottom: none;
            margin: 0;
            padding: 50px 0;
            position: relative;
            z-index: 1;
        }

        .page-title h2 {
            color: #fff;
            text-transform: uppercase;
        }

        /* Solid Social Share Buttons */
        .btn-social,
        .btn-social:visited,
        .btn-social:focus,
        .btn-social:hover,
        .btn-social:active {
            color: #ffffff;
            text-decoration: none;
            transition: opacity .15s ease-in-out;
        }

        .btn-social:hover,
        .btn-social:active {
            opacity: .75;
        }

        .btn-fb {
            background-color: #3b5998;
        }

        .btn-tw {
            background-color: #1da1f2;
        }

        .btn-in {
            background-color: #0077b5;
        }

        .btn-gp {
            background-color: #db4437;
        }

        .btn-rd {
            background-color: #ff4500;
        }

        .btn-hn {
            background-color: #ff4000;
        }

        /* Outline Social Share Buttons */
        .btn-social-outline {
            background-color: transparent;
            background-image: none;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .btn-fb-outline {
            color: #3b5998;
            border-color: #3b5998;
        }

        .btn-fb-outline:hover,
        .btn-fb-outline:active {
            color: #ffffff;
            background-color: #3b5998;
        }

        .btn-tw-outline {
            color: #1da1f2;
            border-color: #1da1f2;
        }

        .btn-tw-outline:hover,
        .btn-tw-outline:active {
            color: #ffffff;
            background-color: #1da1f2;
        }

        .btn-in-outline {
            color: #0077b5;
            border-color: #0077b5;
        }

        .btn-in-outline:hover,
        .btn-in-outline:active {
            color: #ffffff;
            background-color: #0077b5;
        }

        .btn-gp-outline {
            color: #db4437;
            border-color: #db4437;
        }

        .btn-gp-outline:hover,
        .btn-gp-outline:active {
            color: #ffffff;
            background-color: #db4437;
        }

        .btn-rd-outline {
            color: #ff4500;
            border-color: #ff4500;
        }

        .btn-rd-outline:hover,
        .btn-rd-outline:active {
            color: #ffffff;
            background-color: #ff4500;
        }

        .btn-hn-outline {
            color: #ff4000;
            border-color: #ff4000;
        }

        .btn-hn-outline:hover,
        .btn-hn-outline:active {
            color: #ffffff;
            background-color: #ff4000;
        }

        /* Fluid Styles */
        .fluid {
            display: flex;
        }

        .fluid a {
            flex-grow: 1;
            margin-right: 0.25rem;
        }

        .fluid a:last-child {
            margin-right: 0rem;
        }
    </style>
</head>

<body>
    <section class="bg-secondary">
        <div class="container">
            <header class="py-2">
                <!-- Fixed navbar -->
                <nav class="navbar navbar-expand-xl">
                    <div class="container-fluid  align-items-center">
                        <a href="/" class="navbar-brand mb-md-0 me-md-auto text-dark text-decoration-none">
                            <img src="/img/logo-icon-smga.png" class="img-fluid me-2" style=" width: 40px; ">
                            <span class="fw-bold text-white sitetitle"> PT. Sumber Mineral Global Abadi Tbk</span>
                        </a>
                        <button class="navbar-toggler btn-sm collapsed bg-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                            <div class="me-lg-auto"></div>
                            <ul class="navbar-nav mb-2 mb-md-0">
                                <li class="nav-item"><a href="/" class="nav-link active text-uppercase"
                                        aria-current="page">{{ __('frontend.beranda') }}</a></li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.tentang') }}</a>
                                </li>
                                <li class="nav-item "><a href="/#news"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.media') }}</a>
                                </li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.investor') }}</a>
                                </li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        GCG
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/struktur-organisasi">Struktur
                                                Organisasi</a></li>

                                        <li><a class="dropdown-item" href="/piagam-komite-audit">Piagam Komite
                                                Audit</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.esg') }}</a>
                                </li>
                                <li class="nav-item "><a href="/contact-us"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.kontak') }}</a>
                                </li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        EN
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/locale/en">English</a></li>
                                        <li><a class="dropdown-item" href="/locale/id">Indonesia</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg text-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
                    style=" background-color: #1E4592; ">
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <h1 class="m-0">
                            <img src="https://sumberglobalenergy.co.id/img/LOGO-SGE-TBK.png"
                                class="logo"alt="Logo">
                        </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-3 py-lg-0">
                            <a href="/" class="nav-item text-white nav-link active">{{ __('home.home') }}</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown">{{ __('home.aboutus') }}</a>
                                <div class="dropdown-menu bg-light m-0">
                                    @foreach ($abouts as $ab)
                                        <a href="{{ $ab->link }}" class="dropdown-item">{{ $ab->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                            @if (App::getLocale() == 'id')
                                <a href="/id/media-center"
                                    class="nav-item text-white nav-link">{{ __('home.mediacenter') }}</a>
                            @else
                                <a href="/en/media-center"
                                    class="nav-item text-white nav-link">{{ __('home.mediacenter') }}</a>
                            @endif
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown">{{ __('home.investorrelation') }}</a>
                                <div class="dropdown-menu bg-light m-0">
                                    {{-- @foreach ($pages->where('id_menu', 4) as $ir)
                            <a href="{{ $ir->menu->slug }}/{{ $ir->slug }}"
                                class="dropdown-item">{{ $ir->title }}</a>
                        @endforeach --}}
                                    <a href="/prospektus" class="dropdown-item">Public Offering Prospectus</a>
                                    <a href="/financial-reports" class="dropdown-item">Financial Report</a>
                                    <a href="/share-price" class="dropdown-item">Share Price</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown">ESG</a>
                                <div class="dropdown-menu bg-light m-0">
                                    {{-- @foreach ($pages->where('id_menu', 5) as $esg)
                            <a href="{{ $esg->menu->slug }}/{{ $esg->slug }}"
                                class="dropdown-item">{{ $esg->title }}</a>
                        @endforeach --}}
                                </div>
                            </div>
                            <a href="/category/career"
                                class="nav-item text-white nav-link">{{ __('home.career') }}</a>
                            <a href="/contact-us" class="nav-item text-white nav-link">{{ __('home.contact') }}</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    @if (App()->getLocale() == 'id')
                                        ID
                                    @else
                                        EN
                                    @endif
                                </a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="{{ url('locale/en') }}" class="dropdown-item"><img
                                            src="https://demo.adminkit.io/img/flags/us.png" alt="Indonesia"
                                            width="20" class="align-middle me-1"><span
                                            class="align-middle">English</span></a>
                                    <a href="{{ url('locale/id') }}" class="dropdown-item"><img
                                            src="https://demo.adminkit.io/img/flags/id.png" alt="Indonesia"
                                            width="20" class="align-middle me-1"><span
                                            class="align-middle">Indonesia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->
                <div id="app">
                    @yield('content')
                </div>
                <!-- Footer Start -->
                <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6">
                                <h4 class="text-light mb-4">{{ __('home.aboutus') }}</h4>
                                <p class="text-light">
                                    {{ __('home.desc') }}
                                </p>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary me-0" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="text-light mb-4">{{ __('home.headoffice') }}</h4>
                                <p class="text-light">Graha BIP 2nd Floor</p>
                                <p class="text-light">Jl. Gatot Subroto Kav. 23 Karet Semanggi, Setiabudi,
                                    Daerah Khusus Ibukota
                                    Jakarta 12930
                                </p>
                                <p class="text-light"><i class="fa fa-phone-alt me-3"></i>(+6221) 2500120</p>
                                <p class="text-light" style="font-size: 0.9rem !important;"><i
                                        class="fa fa-envelope me-3"></i>info@sumberglobalenergy.com</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="text-light mb-4">{{ __('home.quicklink') }}</h4>
                                <a class="btn btn-link" href="/about-us/company-profile">{{ __('home.aboutus') }}</a>
                                @if (App::getLocale() == 'id')
                                    <a class="btn btn-link" href="/id/media-center">{{ __('home.mediacenter') }}</a>
                                @else
                                    <a class="btn btn-link" href="/en/media-center">{{ __('home.mediacenter') }}</a>
                                @endif
                                <a class="btn btn-link" href="/share-price">{{ __('home.shareprice') }}</a>
                                <a class="btn btn-link"
                                    href="/financial-reports">{{ __('home.financialreport') }}</a>
                                <a class="btn btn-link" href="/contact-us">{{ __('home.contact') }}</a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="text-light mb-4">{{ __('home.shareprice') }}</h4>
                                <div class="position-relative mx-auto" style="max-width: 400px">
                                    <h6 class="text-light">PT. SUMBER GLOBAL ENERGY Tbk (SGER)</h6>
                                    <h4 class="text-light">{{ $data }} @if ($tanda === '-')
                                            <i class="fa fa-caret-down text-danger" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-caret-up text-light" aria-hidden="true"></i>
                                        @endif {{ $cal }} </h4>
                                    <img src="https://ik.imagekit.io/tk6ir0e7mng/uploads/2021/05/1619944448337.png"
                                        class="img-fluid mt-3" style=" height: 40px; " />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                    &copy; <a href="#">www.sumberglobalenergy.com</a>, All Right
                                    Reserved.
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info ">
                                    <h3>+62 21 2500120</h3>
                                    <p class="text-white">info@smgagroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                        class="bi bi-arrow-up"></i></a>
                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
                </script>
                <script src="/lib/wow/wow.min.js"></script>
                <script src="/lib/easing/easing.min.js"></script>
                <script src="/lib/waypoints/waypoints.min.js"></script>
                <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
                <script>
                    document.getElementById('date').valueAsDate = new Date();
                </script>
                <!-- Template Javascript -->
                <script src="/js/main.js"></script>
                @if (empty($modal->id))
                @else
                    <script type="text/javascript">
                        window.onload = function() {
                            OpenBootstrapPopup();
                        };

                        function OpenBootstrapPopup() {
                            $("#modal{{ $modal->id }}").modal('show');
                        }
                    </script>
                @endif
                <a class="btn btn-square border-end border-start" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
        </div>
        </div>
        </div>
        </div>
        </nav>
        <section class="bg-secondary">
            <div class="container">
                <header class="py-2">
                    <!-- Fixed navbar -->
                    <nav class="navbar navbar-expand-xl">
                        <div class="container-fluid  align-items-center">
                            <a href="/" class="navbar-brand mb-md-0 me-md-auto text-dark text-decoration-none">
                                <img src="/img/logo-icon-smga.png" class="img-fluid me-2" style=" width: 40px; ">
                                <span class="fw-bold text-white sitetitle"> PT. Sumber Mineral Global Abadi</span>
                            </a>
                            <button class="navbar-toggler btn-sm collapsed bg-primary" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon "></span>
                            </button>
                            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                                <div class="me-lg-auto"></div>
                                <ul class="navbar-nav mb-2 mb-md-0">
                                    <li class="nav-item"><a href="/" class="nav-link active text-uppercase"
                                            aria-current="page">{{ __('frontend.beranda') }}</a></li>
                                    <li class="nav-item "><a href="#"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.tentang') }}</a>
                                    </li>
                                    <li class="nav-item "><a href="#"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.media') }}</a>
                                    </li>
                                    <li class="nav-item "><a href="#"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.investor') }}</a>
                                    </li>
                                    <li class="nav-item "><a href="#"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.esg') }}</a>
                                    </li>
                                    <li class="nav-item "><a href="/contact-us"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.kontak') }}</a>
                                    </li>
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle text-white fw-bold" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            EN
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/locale/en">English</a></li>
                                            <li><a class="dropdown-item" href="/locale/id">Indonesia</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-lg text-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
                        style=" background-color: #1E4592; ">
                        <a href="/" class="navbar-brand d-flex align-items-center">
                            <h1 class="m-0">
                                <img src="https://sumberglobalenergy.co.id/img/LOGO-SGE-TBK.png"
                                    class="logo"alt="Logo">
                            </h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-3 py-lg-0">
                                <a href="/"
                                    class="nav-item text-white nav-link active">{{ __('home.home') }}</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link text-white dropdown-toggle"
                                        data-bs-toggle="dropdown">{{ __('home.aboutus') }}</a>
                                    <div class="dropdown-menu bg-light m-0">
                                        @foreach ($abouts as $ab)
                                            <a href="{{ $ab->link }}"
                                                class="dropdown-item">{{ $ab->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                @if (App::getLocale() == 'id')
                                    <a href="/id/media-center"
                                        class="nav-item text-white nav-link">{{ __('home.mediacenter') }}</a>
                                @else
                                    <a href="/en/media-center"
                                        class="nav-item text-white nav-link">{{ __('home.mediacenter') }}</a>
                                @endif
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link text-white dropdown-toggle"
                                        data-bs-toggle="dropdown">{{ __('home.investorrelation') }}</a>
                                    <div class="dropdown-menu bg-light m-0">
                                        {{-- @foreach ($pages->where('id_menu', 4) as $ir)
                            <a href="{{ $ir->menu->slug }}/{{ $ir->slug }}"
                                class="dropdown-item">{{ $ir->title }}</a>
                        @endforeach --}}
                                        <a href="/prospektus" class="dropdown-item">Public Offering Prospectus</a>
                                        <a href="/financial-reports" class="dropdown-item">Financial Report</a>
                                        <a href="/share-price" class="dropdown-item">Share Price</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link text-white dropdown-toggle"
                                        data-bs-toggle="dropdown">ESG</a>
                                    <div class="dropdown-menu bg-light m-0">
                                        {{-- @foreach ($pages->where('id_menu', 5) as $esg)
                            <a href="{{ $esg->menu->slug }}/{{ $esg->slug }}"
                                class="dropdown-item">{{ $esg->title }}</a>
                        @endforeach --}}
                                    </div>
                                </div>
                                <a href="/category/career"
                                    class="nav-item text-white nav-link">{{ __('home.career') }}</a>
                                <a href="/contact-us"
                                    class="nav-item text-white nav-link">{{ __('home.contact') }}</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link text-white dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        @if (App()->getLocale() == 'id')
                                            ID
                                        @else
                                            EN
                                        @endif
                                    </a>
                                    <div class="dropdown-menu bg-light m-0">
                                        <a href="{{ url('locale/en') }}" class="dropdown-item"><img
                                                src="https://demo.adminkit.io/img/flags/us.png" alt="Indonesia"
                                                width="20" class="align-middle me-1"><span
                                                class="align-middle">English</span></a>
                                        <a href="{{ url('locale/id') }}" class="dropdown-item"><img
                                                src="https://demo.adminkit.io/img/flags/id.png" alt="Indonesia"
                                                width="20" class="align-middle me-1"><span
                                                class="align-middle">Indonesia</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar End -->
                    <div id="app">
                        @yield('content')
                    </div>
                    <!-- Footer Start -->
                    <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="container py-5">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-6">
                                    <h4 class="text-light mb-4">{{ __('home.aboutus') }}</h4>
                                    <p class="text-light">
                                        {{ __('home.desc') }}
                                    </p>
                                    <div class="d-flex pt-2">
                                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-outline-primary me-0" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h4 class="text-light mb-4">{{ __('home.headoffice') }}</h4>
                                    <p class="text-light">Graha BIP 2nd Floor</p>
                                    <p class="text-light">Jl. Gatot Subroto Kav. 23 Karet Semanggi, Setiabudi, Daerah
                                        Khusus Ibukota
                                        Jakarta 12930
                                    </p>
                                    <p class="text-light"><i class="fa fa-phone-alt me-3"></i>(+6221) 2500120</p>
                                    <p class="text-light" style="font-size: 0.9rem !important;"><i
                                            class="fa fa-envelope me-3"></i>info@sumberglobalenergy.com</p>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h4 class="text-light mb-4">{{ __('home.quicklink') }}</h4>
                                    <a class="btn btn-link"
                                        href="/about-us/company-profile">{{ __('home.aboutus') }}</a>
                                    @if (App::getLocale() == 'id')
                                        <a class="btn btn-link"
                                            href="/id/media-center">{{ __('home.mediacenter') }}</a>
                                    @else
                                        <a class="btn btn-link"
                                            href="/en/media-center">{{ __('home.mediacenter') }}</a>
                                    @endif
                                    <a class="btn btn-link" href="/share-price">{{ __('home.shareprice') }}</a>
                                    <a class="btn btn-link"
                                        href="/financial-reports">{{ __('home.financialreport') }}</a>
                                    <a class="btn btn-link" href="/contact-us">{{ __('home.contact') }}</a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h4 class="text-light mb-4">{{ __('home.shareprice') }}</h4>
                                    <div class="position-relative mx-auto" style="max-width: 400px">
                                        <h6 class="text-light">PT. SUMBER GLOBAL ENERGY Tbk (SGER)</h6>
                                        <h4 class="text-light">{{ $data }} @if ($tanda === '-')
                                                <i class="fa fa-caret-down text-danger" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-caret-up text-light" aria-hidden="true"></i>
                                            @endif {{ $cal }} </h4>
                                        <img src="https://ik.imagekit.io/tk6ir0e7mng/uploads/2021/05/1619944448337.png"
                                            class="img-fluid mt-3" style=" height: 40px; " />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                        &copy; <a href="#">www.sumberglobalenergy.com</a>, All Right Reserved.
                                    </div>
                                    <div class="col-md-6 text-center text-md-end" hidden>
                                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                                        <br />Distributed By:
                                        <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                            class="bi bi-arrow-up"></i></a>
                    <!-- JavaScript Libraries -->
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
                    </script>
                    <script src="/lib/wow/wow.min.js"></script>
                    <script src="/lib/easing/easing.min.js"></script>
                    <script src="/lib/waypoints/waypoints.min.js"></script>
                    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
                    <script>
                        document.getElementById('date').valueAsDate = new Date();
                    </script>
                    <!-- Template Javascript -->
                    <script src="/js/main.js"></script>
                    @if (empty($modal->id))
                    @else
                        <script type="text/javascript">
                            window.onload = function() {
                                OpenBootstrapPopup();
                            };

                            function OpenBootstrapPopup() {
                                $("#modal{{ $modal->id }}").modal('show');
                            }
                        </script>
                    @endif
</body>

</html>
