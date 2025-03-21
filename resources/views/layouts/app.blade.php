<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos la empresa líder en desarrollo de software personalizado y estrategias de marketing digital, especializada en soluciones innovadoras en la nube. No solo creamos tecnología; impulsamos el éxito de tu negocio con herramientas diseñadas a la medida de tus necesidades. Más que un proveedor, somos tu socio estratégico en cada paso de tu crecimiento.">
    <meta name="keywords" content="Desarrollo web, aplicaciones mobiles, apps, Startup, mexico, Marketing Digital, Marketing, SEO, DesarrollosQV, QV, Desarrollos">
    <meta name="author" content="DesarrollosQV">

    <title>
        @yield('title', 'Bienvenido(a) - Desarrollos QV')
    </title>
    
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />

    <!-- Current locale and alternate locales -->
    <meta property="og:locale" content="es_ES" />
    <meta property="og:locale:alternate" content="es_ES" />

    <!-- Facebook data -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Desarrollos QV - empresa líder en desarrollo de software personalizado y estrategias de marketing digital." />
    <meta property="og:description" content="Somos la empresa líder en desarrollo de software personalizado y estrategias de marketing digital, especializada en soluciones innovadoras en la nube. No solo creamos tecnología; impulsamos el éxito de tu negocio con herramientas diseñadas a la medida de tus necesidades. Más que un proveedor, somos tu socio estratégico en cada paso de tu crecimiento." />
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}" />
    <meta property="og:url" content="https://desarrollosqv.com" />
    <meta property="og:site_name" content="desarrollosQV" />
    <meta property="fb:app_id" content="953467689457824">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="https://desarrollosqv.com">
    <meta name="twitter:title" content="Desarrollos QV - empresa líder en desarrollo de software personalizado y estrategias de marketing digital.">
    <meta name="twitter:description" content="Somos la empresa líder en desarrollo de software personalizado y estrategias de marketing digital, especializada en soluciones innovadoras en la nube. No solo creamos tecnología; impulsamos el éxito de tu negocio con herramientas diseñadas a la medida de tus necesidades. Más que un proveedor, somos tu socio estratégico en cada paso de tu crecimiento.">
    <meta name="twitter:creator" content="DesarrollosQV">
    <meta name="twitter:image" content="{{ asset('assets/img/og-image.jpg') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Desarrollos QV - empresa líder en desarrollo de software personalizado y estrategias de marketing digital." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://desarrollosqv.com" />
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}" />
    <meta property="og:description" content="Somos la empresa líder en desarrollo de software personalizado y estrategias de marketing digital, especializada en soluciones innovadoras en la nube. No solo creamos tecnología; impulsamos el éxito de tu negocio con herramientas diseñadas a la medida de tus necesidades. Más que un proveedor, somos tu socio estratégico en cada paso de tu crecimiento." />
    <meta property="og:site_name" content="desarrollosQV" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css') }}">

    
    @yield('css')

</head>

<body>
    <div class="content-wrapper">
        
        <!-- /header -->
        @include('includes.navbar')
        <!-- /header -->

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

     <!-- /footer -->
     @include('includes.footer')
     <!-- /footer -->


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    
    @yield('javascript')
</body>

</html>
