@extends('layouts.app')
@section('slider')
    <section id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/header-SMGA.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/header-SMGA-2.png" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-12 col-md-12 mx-auto">
                <h1 class="fw-light">PT. Sumber Mineral Global Abadi Tbk</h1>
                <p class="lead text-muted fs-3">{{ __('frontend.ringkasan') }}</p>
                {{-- <p>
                        <a href="#" class="btn btn-primary my-2">Hubungi Kami</a>

                    </p> --}}

            </div>
        </div>
    </section>
    <section class="py-5 bg-dark why-us section-bg" id="why-us">
        <div class="container">
            <div class="row">
                <h1 class="fw-light mb-4 text-white">{{ __('frontend.keunggulan') }}</h1>
                <div class="col-md-6">

                    <div class="accordion-list">
                        <ul>
                            <li> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"
                                    aria-expanded="true"><span>01</span> {{ __('frontend.pengendalian') }} <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>{{ __('frontend.keunggulan_1') }}</p>
                                </div>
                            </li>
                            <li> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"
                                    aria-expanded="false"><span>02</span>
                                    {{ __('frontend.presisi') }}
                                    <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>{{ __('frontend.keunggulan_2') }}</p>
                                </div>
                            </li>
                            <li> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"
                                    aria-expanded="false"><span>03</span>
                                    {{ __('frontend.customized') }} <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>{{ __('frontend.keunggulan_3') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="/img/header-SMGA-2.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <img src="/img/logo-icon-smga.png" class="img-fluid mx-auto d-block">

                </div>
                <div class="col-md-9">
                    <div class="text-white">
                        <h2 class="fw-bold"> {{ __('frontend.visi') }}</h2>
                        <p class="text-white fs-4">{{ __('frontend.visi_isi') }}
                        </p>
                    </div>
                    <div class="text-white ">
                        <h2 class=" fw-bold "> {{ __('frontend.misi') }}</h2>
                        <p class="text-white fs-4">{{ __('frontend.misi_isi') }}
                        </p>

                    </div>

                </div>


            </div>
        </div>

    </section>

    <div class="album py-5 bg-light ">
        <div class="container ">
            <h1 class="fw-light text-center mb-5 ">{{ __('frontend.media') }}</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
                {{-- @foreach ($berita as $post)
                    <div class="col ">
                        <div class="card shadow-sm ">
                            <img src="/storage/{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">

                            <div class="card-body ">
                                {{ $post->title }}
                                <div class="d-flex justify-content-between align-items-center ">
                                    <div class="btn-group ">
                                        <a href="/b/{{ $post->slug }}" target="_blank"
                                            class="btn btn-sm btn-outline-secondary ">Selengkapnya
                                            ..</a>
                                    </div>
                                    <small class="text-muted ">{{ $post->date }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}




            </div>
        </div>
    </div>

    {{-- <section class="py-5 bg-light ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 ">

                        <div class="card ">
                            <div class="card-body ">
                                <div>
                                    <h5 class="fw-bold "> {{ __('frontend.pesan') }}</h5>
                                    <img src="/img/direktur.png " style="width: 200px;float: left;margin-right: 10px;"
                                        class="align-text-end ">
                                    <p>Bapak Welly Thomas mendirikan perusahaan ini dengan visi untuk membuka lapangan
                                        kerja dan jaringan bisnis di bidang industri nikel, batubara, batu gamping, dan
                                        pasir silica. Ia juga memiliki moto untuk selalu bekerja
                                        dengan semangat, disiplin, serta komitmen, dan untuk selalu mengutamakan
                                        kepuasan pelanggan berlaku untuk semua staf pada industrinya Selama beberapa
                                        tahun terakhir PT Sumber Mineral Global Abadi menjadi mitra terpercaya
                                        bagi berbagai macam UMKM industri nikel, batubara, batu gamping, dan pasir
                                        silica berizin. Bapak Welly Thomas mempercayai jika timnya dapat meningkatkan
                                        performa mereka dengan dukungan besar dari perusahaan, maka
                                        itu akan membangun nilai nilai potensial untuk semua pihak.</p>


                                    <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Selengkapnya ...
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <p>Atas nama semua staf, saya akan mengambil kesempatan ini untuk mengucapkan
                                            terimakasih yang sebesar besarnya untuk para vendor, operator tongkang, para
                                            operator pelabuhan dan logistik beserta semua klien dan mitra
                                            kami yang telah mendukung PT Sumber Mineral Global Abadi dalam beberapa
                                            tahun ini.</p>

                                        <p> Saya ingin menggaris bawahi bahwa kami secara berkesinambungan berkomitmen
                                            untuk meningkatkan performa penyediaan nikel, batubara, batu gamping, dan
                                            pasir silica dengan melebarkan sayap untuk mengembangkan jasa
                                            kami. PT Sumber Mineral Global Abadi telah melalui setiap siklus ekonomi dan
                                            pasar, sekarang telah diakui sebagai pemain utama dalam industri nikel,
                                            batubara, batu gamping, dan pasir silica karena memiliki peran
                                            penting dalam pertumbuhan perdagangan nikel, pasir dan batubara di
                                            Indonesia.</p>

                                        <p>
                                            Meskipun perusahaan kami terbilang baru dalam bidang pertambangan nikel,
                                            batubara, batu gamping, dan pasir silica, perusahaan ini telah membangun
                                            asosiasi yang kuat bersama dengan klien besar di Indonesia maupun
                                            mancanegara. Perusahaan kami memiliki komitmen
                                            untuk selalu memberikan pelayanan terbaik kepada setiap klien kami. Ini
                                            memperkuat rantai pasokan melalui kerja keras dan kekuatan team yang
                                            didedikasikan untuk memperluas jangkauan bisnis.
                                        </p>
                                        <p> Sepanjang perjalanan PT Sumber Mineral Global Abadi, dalam rangka kerja sama
                                            dengan partner bisnis, telah memahami Usaha Kecil dan Menengah dalam bidang
                                            pertambangan dengan harapan untuk memperkuat posisi kami sebagai
                                            penyedia nikel, batubara, batu gamping, dan pasir silica.
                                        </p>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6 ">
                        <div class="card ">
                            <div class="card-body ">
                                <div>
                                    <h5 class="fw-bold "> {{ __('frontend.target') }}</h5>
                                    <ul>
                                        <li>Untuk terus berkembang dengan cara memahami resiko bisnis secara efektif.
                                        </li>
                                        <li>Menjadi lebih agresif dalam marketplace.</li>
                                        <li>Memaksimalkan efisiensi penambang kecil.</li>
                                        <li>Memaksimalkan kepuasan klien dengan pengantaran yang tepat waktu.</li>
                                        <li>Bersaing dengan permintaan pasar yang dinamis.</li>
                                        <li>Menjadi konsisten dalam mengimplementasikan pengelolaan perusahaan yang
                                            baik.</li>
                                        <li>Melipatgandakan penjualan di masa depan.</li>
                                    </ul>
                                    <h5 class="fw-bold "> {{ __('frontend.jasa') }}</h5>
                                    <ul>
                                        <li>Memenuhi semua kebutuhan nikel, batu gamping, atau biasa dikenal juga dengan
                                            batu kapur dan juga batubara dari klien besar maupun klien kecil. </li>
                                        <li>
                                            Memberikan klien dengan kualitas produk nikel, batu gamping, atau biasa
                                            dikenal juga dengan batu kapur dan juga batubara terbaik.
                                        </li>
                                        <li>
                                            Pengiriman nikel, batu gamping, atau biasa dikenal juga dengan batu kapur
                                            dan juga batubara tepat waktu dengan berinvestasi dalam kepemilikan tongkang
                                        </li>
                                    </ul>



                                </div>
                            </div>
                        </div>



                    </div>


                </div>
            </div>

        </section> --}}
    <section class="py-5 bg-secondary" id="calltoaction">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-sm-center">
                <div class="col-md-8 ms-5 me-5 ">

                    <p class="text-white fs-2">{{ __('frontend.mitra') }}</p>

                </div>

                <div class="d-grid gap-2 col-md-3 p-4">
                    <button class="btn btn-primary btn-lg " type="button ">{{ __('frontend.kontak') }}</button>

                </div>
            </div>
        </div>


    </section>
@endsection
