<header class="wrapper">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ url('./') }}">
                    <img src="{{ asset('assets/img/logo-dark.png') }}"
                        srcset="{{ asset('assets/img/logo@2x.png 2x') }}" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Inicio</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('index')) active @endif" href="{{ url('./') }}">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('index/#about')) active @endif" href="{{ url('./#about') }}">
                                Conocenos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('services')) active @endif" href="{{ url('./services') }}">
                                Nuestros Servicios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('clients')) active @endif" href="{{ url('./clients') }}">
                                Nuestros Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('contact')) active @endif" href="{{ url('./contact') }}">
                                Contáctanos
                            </a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:conexion@desarrollosqv.com"
                                class="link-inverse">conexion@desarrollosqv.com</a>
                            <br /> +52 (636) 122 9546 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item">
                        {{-- Light --}}
                        <a href="#" class="nav-link active">
                            <i class="uil uil-sun"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        {{-- Dark --}}
                        <a href="#" class="nav-link">
                            <i class="uil uil-moon"></i>
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>