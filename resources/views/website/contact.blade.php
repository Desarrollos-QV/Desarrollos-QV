@extends('layouts.app')
@section('title')
    Contáctanos - Desarrollos QV
@endsection
@section('content')
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7">
                    <figure>
                        <img class="w-auto" src="{{ asset('assets/img/illustrations/i5.png') }}" srcset="{{ asset('assets/img/illustrations/i5@2x.png 2x') }}" alt="" />
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Contáctanos</h2>
                    <h3 class="display-5 mb-7">¿Tienes alguna pregunta? No dudes en contactarnos.</h3>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Dirección</h5>
                            <address>Nuevo Casas Grandes, Chihuahua, México.</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Telefono</h5>
                            <p>+52 (636) 122 9546</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:conexion@desarrollosqv.com" class="link-body">conexion@desarrollosqv.com</a></p>
                        </div>
                    </div>
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
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row gy-10 gx-lg-8 gx-xl-12">
                        <div class="col-lg-10 mx-auto">
                            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                                <div class="messages"></div>
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Jane" required>
                                            <label for="form_name">Nombre *</label>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor, introduzca su nombre.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_lastname" type="text" name="surname" class="form-control"
                                                placeholder="Doe" required>
                                            <label for="form_lastname">Apellido *</label>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor, introduzca su apellido.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="jane.doe@example.com" required>
                                            <label for="form_email">Email *</label>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Proporcione una dirección de correo electrónico válida.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-select-wrapper mb-4">
                                            <select class="form-select" id="form-select" name="department" required>
                                                <option selected disabled value="">Seleccione un departamento</option>
                                                <option value="Aplicaciones Moviles">Aplicaciones Moviles</option>
                                                <option value="Software Personalizado">Software Personalizado</option>
                                                <option value="Marketing Digital">Marketing Digital</option>
                                            </select>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor seleccione un departamento.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-floating mb-4">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Tu mensaje" style="height: 150px"
                                                required></textarea>
                                            <label for="form_message">Mensaje *</label>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor ingrese su mensaje.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Acepto los <a href="#" class="hover">términos y la política</a>.
                                            </label>
                                            <div class="invalid-feedback">
                                                Debes aceptar antes de enviar.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        {{-- <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                            value="Send message"> --}}
                                            <button class="g-recaptcha btn btn-primary rounded-pill btn-send mb-3"
                                                data-sitekey="6LdhRPsqAAAAAK8byTPreeriYuKPoAbgSeI6WPyQ"
                                                data-callback='onSubmit'
                                                data-action='submit'>
                                                Enviar Mensaje
                                            </button>
                                        <p class="text-muted"><strong>*</strong> Estos campos son obligatorios.</p>
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
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
@endsection

@section('javascript')
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LfubvsqAAAAAGF2aoleuuqTjU7CzFNoBSJuqJph"></script>

<!-- Replace the variables below. -->
<script>
    function onSubmit(token) {
      document.getElementById("contact-form").submit();
    }

    function onClick(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
        const token = await grecaptcha.enterprise.execute('6LdhRPsqAAAAAK8byTPreeriYuKPoAbgSeI6WPyQ', {action: 'submit'});
        });
    }
</script>
@endsection