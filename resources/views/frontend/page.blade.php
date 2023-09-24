@extends('layouts.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <div class="border-start border-5 border-primary ps-4 mb-3">

                        <h1 class="display-6 mb-0">{{ $post->title }}
                        </h1>
                    </div>

                    <div class="mt-2">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <section class="py-5 bg-secondary" id="calltoaction">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-sm-center">
                <div class="col-md-8 ms-5 me-5 ">

                    <p class="text-white fs-2">{{ __('frontend.mitra') }}</p>

                </div>

                <div class="d-grid gap-2 col-md-3 p-4">
                    <a class="btn btn-primary btn-lg " href="/contact-us" type="button ">{{ __('frontend.kontak') }}</a>

                </div>
            </div>
        </div>


    </section>
@endsection
