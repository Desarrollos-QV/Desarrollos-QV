@extends('layouts.app')
@section('title')
Bienvenido(a) - Desarrollos QV
@endsection
@section('content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown"
                data-group="page-title">
                <h1 class="display-1 mb-4">Transformamos tus ideas en software de alto impacto.</h1>
                <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7">Desarrollamos aplicaciones web,
                    móviles y de escritorio con la mejor tecnología, adaptadas a las necesidades de tu negocio.
                </p>
                <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons"
                    data-delay="600">
                    <span><a href="#init_page" class="btn btn-primary rounded mx-1">¿Comenzamos?</a></span>
                </div>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /Init Section -->

<section id="init_page" class="wrapper bg-light">
    <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
        <div class="row gx-0 mb-16 mb-mb-20">
            <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" data-cues data-group="images"
                data-delay="1500">
                <img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp"
                    src="{{ asset('assets/img/photos/sa1.jpg') }}"
                    srcset="{{ asset('assets/img/photos/sa1@2x.jpg 2x') }}" alt="" />
                <img class="position-absolute rounded shadow-lg" data-cue="slideInRight"
                    src="{{ asset('assets/img/photos/sa2.jpg') }}"
                    srcset="{{ asset('assets/img/photos/sa2@2x.jpg 2x') }}"
                    style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="" />
                <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft"
                    src="{{ asset('assets/img/photos/sa3.jpg') }}"
                    srcset="{{ asset('assets/img/photos/sa3@2x.jpg 2x') }}"
                    style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="" />
                <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft"
                    src="{{ asset('assets/img/photos/sa4.jpg') }}"
                    srcset="{{ asset('assets/img/photos/sa4@2x.jpg 2x') }}"
                    style="bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="" />
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->

        <div id="about" class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-20 mt-20 mb-md-18">
            <div class="col-lg-6 position-relative">
                <div class="btn btn-circle btn-primary disabled position-absolute counter-wrapper flex-column d-none d-md-flex"
                    style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">10+</span></h3>
                    <p>Años de experiencia</p>
                </div>
                <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-10 offset-md-2">
                                <figure class="rounded"><img src="{{ asset('assets/img/photos/ab1.jpg') }}" srcset="{{ asset('assets/img/photos/ab1@2x.jpg 2x') }}" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-12">
                                <figure class="rounded"><img src="{{ asset('assets/img/photos/ab2.jpg') }}" srcset="{{ asset('assets/img/photos/ab2@2x.jpg 2x') }}" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="{{ asset('assets/img/photos/ab3.jpg') }}" srcset="{{ asset('assets/img/photos/ab3@2x.jpg 2x') }}" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h3 class="display-5 mb-5">
                    🚀 DesarrollosQV: Líder en creación de Software Personalizado en México.
                </h3>
                <p class="mb-7">
                    Somos una empresa innovadora especializada en el desarrollo de software a la medida, 
                    brindando soluciones tecnológicas que impulsan el crecimiento y éxito de nuestros clientes.
                </p>
                <p class="mb-7">
                    📈 Nuestros logros:
                </p>
                
                <div class="row counter-wrapper gy-6">
                    <div class="col-md-4">
                        <h3 class="counter text-primary">250</h3>
                        <p> Proyectos completados </p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <h3 class="counter text-primary">300+</h3>
                        <p>Clientes satisfechos</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <h3 class="counter text-primary">50</h3>
                        <p>Expertos en tecnología</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!-- /About -->

        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
            <div class="col-lg-6 position-relative">
                <div class="shape rounded bg-pale-red rellax d-block" data-rellax-speed="0"
                    style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                </div>
                <div class="row gx-md-5 gy-5 position-relative">
                    <div class="col-6">
                        <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300"
                            src="{{ asset('assets/img/photos/sa5.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa5@2x.jpg 2x') }}" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                            data-delay="600" src="{{ asset('assets/img/photos/sa6.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa6@2x.jpg 2x') }}" alt="" />
                    </div>
                    <!-- /column -->
                    <div class="col-6">
                        <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900"
                            src="{{ asset('assets/img/photos/sa7.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa7@2x.jpg 2x') }}" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                            src="{{ asset('assets/img/photos/sa8.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa8@2x.jpg 2x') }}" alt="" />
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h3 class="display-4 mb-5">Impulsa tu empresa con tecnología de vanguardia.
                </h3>
                <p class="mb-5">Nuestro equipo de expertos en desarrollo de software crea soluciones
                    innovadoras
                    para optimizar procesos, mejorar la eficiencia y hacer crecer tu negocio.</p>
                <div class="row gy-3">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    Desarrollo de aplicaciones web modernas y escalables.
                                </span>
                            </li>
                            <li class="mt-3">
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Aplicaciones móviles nativas e híbridas con un diseño intuitivo.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-red mb-0">
                            <li>
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Software de escritorio para potenciar tu productividad.
                                </span>
                            </li>
                            <li class="mt-3">
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Integración con APIs y sistemas existentes.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape rounded bg-pale-green rellax d-block" data-rellax-speed="0"
                    style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                </div>
                <div class="row gx-md-5 gy-5 position-relative">
                    <div class="col-5">
                        <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" data-cue="fadeIn"
                            data-delay="300" src="{{ asset('assets/img/photos/sa9.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa9@2x.jpg 2x') }}" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                            data-delay="600" src="{{ asset('assets/img/photos/sa10.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa10@2x.jpg 2x') }}" alt="" />
                    </div>
                    <!-- /column -->
                    <div class="col-7">
                        <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900"
                            src="{{ asset('assets/img/photos/sa11.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa11@2x.jpg 2x') }}" alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-11" data-cue="fadeIn" data-delay="1200"
                            src="{{ asset('assets/img/photos/sa12.jpg') }}"
                            srcset="{{ asset('assets/img/photos/sa12@2x.jpg 2x') }}" alt="" />
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h3 class="display-4 mb-5">Control total en cada paso del desarrollo.</h3>
                <p class="mb-5">
                    Desde la planeación hasta la implementación, te ofrecemos un servicio transparente, ágil y
                    con los más altos estándares de calidad.
                </p>
                <div class="row gy-3">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-green mb-0">
                            <li>
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Desarrollo a medida según tus requerimientos.
                                </span>
                            </li>
                            <li class="mt-3">
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Uso de tecnologías modernas y seguras.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-green mb-0">
                            <li>
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Diseño UX/UI pensado en la mejor experiencia para el usuario.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative">
                <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0"
                    style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                </div>
                <div class="row gx-md-5 gy-5 position-relative align-items-center">
                    <div class="col-6">
                        <img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300"
                            src="./assets/img/photos/sa13.jpg" srcset="./assets/img/photos/sa13@2x.jpg 2x"
                            alt="" />
                    </div>
                    <!-- /column -->
                    <div class="col-6">
                        <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900"
                            src="./assets/img/photos/sa14.jpg" srcset="./assets/img/photos/sa14@2x.jpg 2x"
                            alt="" />
                        <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                            src="./assets/img/photos/sa15.jpg" srcset="./assets/img/photos/sa15@2x.jpg 2x"
                            alt="" />
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h3 class="display-4 mb-5">La mejor experiencia para el crecimiento de tu empresa.</h3>
                <p class="mb-5">
                    Nuestro enfoque en la innovación y el rendimiento nos permite entregar soluciones que se
                    adaptan al crecimiento de tu negocio.
                </p>
                <div class="row gy-3">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                            <li>
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Aplicaciones escalables y adaptables.
                                </span>
                            </li>
                            <li class="mt-3">
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Optimización en costos y tiempos de desarrollo.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                            <li>
                                <span><i class="uil uil-check"></i></span>
                                <span>
                                    Soporte y mantenimiento continuo para asegurar el éxito de tu software.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<section class="wrapper bg-soft-primary">
    <div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">
        <div class="row text-center" data-cue="slideInUp">
            <div class="col-lg-10 mx-auto">
                <div class="mt-lg-n20 mt-xl-n22 position-relative">
                    <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1"
                        style="top: 1rem; left: -3.9rem;"></div>
                    <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1"
                        style="bottom: 2rem; right: -3rem;"></div>
                    <video poster="{{ asset('assets/img/photos/movie.jpg') }}" class="player" playsinline controls
                        preload="none">
                        <source src="{{ asset('assets/media/movie.mp4') }}" type="video/mp4">
                        <source src="{{ asset('assets/media/movie.webm') }}" type="video/webm">
                    </video>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row text-center mt-12">
            <div class="col-lg-9 mx-auto">
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">
                    Descubre cómo nuestro software a medida puede mejorar la gestión y el rendimiento de tu
                    empresa.
                </h3>
                <p class="mb-5">

                </p>
                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp"
                    data-group="process">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/img/icons/lineal/shield.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                        <h4 class="mb-1">1. Ofrecemos Seguridad Avanzada</h4>
                        <p>Protegemos tus datos con las mejores prácticas y tecnologías de ciberseguridad.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4"> <img src="./assets/img/icons/lineal/savings.svg"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4 class="mb-1">2. Optimización de Presupuesto</h4>
                        <p>Creamos soluciones eficientes que maximizan tu inversión y reducen costos operativos.
                        </p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4"> <img src="./assets/img/icons/lineal/loading.svg"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4 class="mb-1">3. Tecnología Siempre Actualizada.</h4>
                        <p>Desarrollamos software con las últimas tecnologías para garantizar el mejor
                            desempeño.</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-17">
        <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 align-items-center">
            <div class="col-lg-7 position-relative">
                <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1"
                    style="top: 0; left: -1.4rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5">
                    <div class="col-md-6" data-cue="fadeIn">
                        <figure class="rounded mt-md-10 position-relative"><img
                                src="{{ asset('assets/img/photos/g5.jpg') }}"
                                srcset="{{ asset('assets/img/photos/g5@2x.jpg 2x') }}" alt="">
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-12 order-md-2" data-cue="fadeIn" data-delay="900">
                                <figure class="rounded"><img src="{{ asset('assets/img/photos/g6.jpg') }}"
                                        srcset="{{ asset('assets/img/photos/g6@2x.jpg 2x') }}" alt="">
                                </figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-10" data-cue="fadeIn" data-delay="300">
                                <div class="card bg-pale-primary text-center">
                                    <div class="card-body py-11 counter-wrapper">
                                        <h3 class="counter text-nowrap">300+</h3>
                                        <p class="mb-0">clientes que confían en nosotros</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-5 mt-5">
                <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="icon icon-top fs-lg text-center">
                                    <p>“Es una agencia que nos ha brindado una calidad en su servicio
                                        inigualable. estamos muy conformes con su soporte y el sistema
                                        realizado.”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Babel Market</h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <blockquote class="icon icon-top fs-lg text-center">
                                    <p>“Fue la mejor opción que pude conseguir, me brindaron un plan de
                                        financiamiento para mi proyecto que me permitio adquirir todo el sistema
                                        a faciles mensualidades.”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Kualti App</h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!--/.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <figure><img class="w-auto" src="{{ asset('assets/img/illustrations/i2.png') }}"
                        srcset="{{ asset('assets/img/illustrations/i2@2x.png 2x') }}" alt="" />
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Conocenos más a fondo</h2>
                <h3 class="display-5 mb-7">Nuestra Visión, Misión, Valores y Metas</h3>
                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne"> Nuestra Visión </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Ser la empresa líder en desarrollo de software en México, proporcionando
                                    soluciones innovadoras y escalables que transformen negocios y mejoren la
                                    vida de las personas a través de la tecnología.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.Nuestra Vision -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingTwo">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">Nuestra Misión </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Brindar soluciones tecnológicas personalizadas de alta calidad, asegurando
                                    la satisfacción de nuestros clientes mediante procesos ágiles, innovación
                                    constante y un equipo de expertos altamente capacitados.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.Nuestra Mision -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingThree">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree"> Nuestros Valores </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li>
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            <b>Innovación:</b> Nos mantenemos a la vanguardia con tecnología de
                                            última generación.
                                        </span>
                                    </li>
                                    <li class="mt-3">
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            <b>Compromiso:</b> Nos involucramos en cada proyecto con pasión y
                                            dedicación.
                                        </span>
                                    </li>
                                    <li class="mt-3">
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            <b>Calidad:</b> Entregamos soluciones eficientes, seguras y
                                            escalables.
                                        </span>
                                    </li>
                                    <li class="mt-3">
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            <b>Transparencia:</b> Creemos en la comunicación abierta y honesta
                                            con nuestros clientes.
                                        </span>
                                    </li>
                                    <li class="mt-3">
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            <b>Trabajo en equipo:</b> Valoramos la colaboración y el crecimiento
                                            conjunto.
                                        </span>
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.Nuestros valores -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingFour">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseTwo">Nuestras Metas</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li>
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            Expandir nuestros servicios a nivel internacional.
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            Desarrollar más de 100 proyectos exitosos en los próximos 5 años.
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            Consolidarnos como el socio tecnológico de confianza para empresas
                                            de todos los sectores.
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="uil uil-check"></i></span>
                                        <span>
                                            Mantener un equipo de expertos en constante crecimiento y
                                            capacitación.
                                        </span>
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.Nuestras Metas -->
                </div>
                <!--/.accordion -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<!-- /section -->
<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map"
    data-image-src="./assets/img/map.png">
    <div class="container pt-0 pb-14 pt-md-18 pb-md-18">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                <h3 class="display-4 mb-8 px-lg-12">
                    Únete a nuestra comunidad y lleva tu empresa al siguiente nivel con nuestras soluciones de
                    software personalizadas.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join">
            <span><a class="btn btn-green rounded mx-1">Contactanos</a></span>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection