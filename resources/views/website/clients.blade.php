@extends('layouts.app')
@section('title')
Conocenos - Desarrollos QV
@endsection
@section('content')
<section class="wrapper bg-light">
    <div class="container py-14 py-md-17">
        <div class="row gx-lg-8 mb-10 gy-5">
            <div class="col-lg-6">
                <h3 class="display-5 mb-0">Más de 300 clientes confían en nosotros. Únase a ellos utilizando
                    nuestros servicios y haga crecer su negocio..</h3>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <p class="lead mb-0">
                    Únete a nuestra comunidad y lleva tu empresa al siguiente nivel con nuestras soluciones de
                    software personalizadas.
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->

        <div class="px-lg-5">
            <div class="swiper-container clients mb-0" data-margin="30" data-dots="false"
                data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5"
                data-items-md="4" data-items-xs="2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/ahitevoy_customer.png') }}"
                                alt="ahitevoy_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/zendit_customer.png') }}"
                                alt="zendit_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/always_customer.png') }}"
                                alt="always_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/apayapp_customer.png') }}"
                                alt="apayapp_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/babel_customer.png') }}" alt="babel_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/beepbeep_customer.png') }}"
                                alt="beepbeep_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/boxi_customer.png') }}" alt="boxi_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/kualti_customer.png') }}"
                                alt="kualti_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/lachona_customer.png') }}"
                                alt="lachona_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/miabue_customer.png') }}"
                                alt="miabue_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/perry_customer.png') }}" alt="perry_customer" />
                        </div>
                        <div class="swiper-slide px-5">
                            <img src="{{ asset('assets/img/customers/troopers_customer.png') }}"
                                alt="troopers_customer" />
                        </div>
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->

        </div>
        <!-- /div -->
    </div>
</section>
@endsection