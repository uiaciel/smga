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

<body>
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
                                <li class="nav-item"><a href="#" class="nav-link active text-uppercase"
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
                                <li class="nav-item "><a href="#"
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

            </header>
            <!-- Navbar -->



        </div>
        <span class="animate-border2 bg-primary " style="width: 100% !important"></span>
    </section>
    @yield('slider')
    <main>
        @yield('content')
    </main>

    <footer id="dk-footer " class="dk-footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 col-lg-4 ">
                    <div class="dk-footer-box-info bg-dark ">
                        <a href="index.html " class="footer-logo ">
                            <img src="/img/logo-icon-smga.png " style="width: 100px;" alt="footer_logo "
                                class="img-fluid ">
                        </a>
                        <p class="footer-info-text text-white ">
                            {{ __('frontend.profil') }}
                        </p>
                        <div class="footer-social-link ">
                            <h3>Media Sosial</h3>
                            <ul>
                                <li>
                                    <a href="# ">
                                        <i class="bi bi-facebook "></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="# ">
                                        <i class="bi bi-instagram "></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="# ">
                                        <i class="bi bi-google "></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="# ">
                                        <i class="bi bi-linkedin "></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="# ">
                                        <i class="bi bi-twitter "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>

                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-7 ms-4 mt-4 ">
                    <div class="row ">
                        <div class="col-md-6 ">
                            <div class="contact-us contact-us-last  ">
                                <div class="contact-icon ">
                                    <i class="bi bi-map-fill " aria-hidden="true "></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Graha BIP Lt. 2</h3>
                                    <p class="text-white">Jl. Gatot Subroto No. Kav. 23</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6 ">
                            <div class="contact-us contact-us-last ">
                                <div class="contact-icon ">
                                    <i class="bi bi-telephone-fill " aria-hidden="true "></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info ">
                                    <h3>+6221 – 250 0120</h3>
                                    <p class="text-white">sumbermineralglobalabadi@gmail.com</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row ">
                        <div class="col-md-12 col-lg-6 mb-3 ">
                            <div class="footer-widget">
                                <div class="section-heading ">
                                    <h3>Halaman</h3>
                                    <span class="animate-border border-black "></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="# ">Tentang Kami</a>
                                    </li>
                                    <li>
                                        <a href="# ">Layanan</a>
                                    </li>
                                    <li>
                                        <a href="# ">Hubungan Investor</a>
                                    </li>
                                    <li>
                                        <a href="# ">Media & Berita</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="# ">Karir</a>
                                    </li>
                                    <li>
                                        <a href="# ">Blog</a>
                                    </li>
                                    <li>
                                        <a href="# ">CSR</a>
                                    </li>
                                    <li>
                                        <a href="# ">Kontak Kami</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6 ">
                            <div class="footer-widget ">
                                <div class="section-heading ">
                                    <h3>Share Price</h3>
                                    <span class="animate-border border-black "></span>
                                </div>
                                {{-- <div class="card" style="width: 18rem;">

                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>

                                    </div>
                                </div> --}}

                                <form action="# ">
                                    <div class="form-row ">

                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 ">
                        <span>Copyright © 2023, All Right Reserved</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6 ">
                        <div class="copyright-menu ">
                            <ul>
                                <!-- <li>
                                    <a href="# ">Home</a>
                                </li>
                                <li>
                                    <a href="# ">Terms</a>
                                </li>
                                <li>
                                    <a href="# ">Privacy Policy</a>
                                </li> -->
                                <li>
                                    <a href="# ">Back to top</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->

    </footer>

</body>

</html>
