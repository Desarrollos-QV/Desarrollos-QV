<footer class="bg-dark text-inverse mt-5 mt-md-16">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="./assets/img/logo-white.png" srcset="./assets/img/logo-light@2x.png 2x"
                        alt="" />
                    <p class="mb-4">© 2025 DesarrollosQV. <br class="d-none d-lg-block" />Todos los derechos
                        reservados.</p>
                    <nav class="nav social social-white">
                        <a href="https://www.facebook.com/DesarrollosQV" target="_blank"><i class="uil uil-facebook-f"></i></a>
                        <a href="https://x.com/DesarrollosQv" target="_blank"><i class="uil uil-twitter"></i></a>
                        <a href="https://www.instagram.com/desarrollosqv/" target="_blank"><i class="uil uil-instagram"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Contáctanos</h4>
                    <address class="pe-xl-15 pe-xxl-17">Nuevo Casas Grandes, Chihuahua, México.
                    </address>
                    <a href="mailto:conexion@desarrollosqv.com">conexion@desarrollosqv.com</a><br /> +521
                    (636) 122 9546
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Más información</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Nuestros Servicios</a></li>
                        <li><a href="#">Nuestros Clientes</a></li>
                        <li><a href="#">Contáctanos</a></li> 
                        <li><a href="#">Política de privacidad</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Nuestro boletín informativo</h4>
                    <p class="mb-5">Suscríbete a nuestro boletín para recibir nuestras novedades y ofertas.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form
                                action="{{ route('newsletter') }}"
                                method="post" id="subscribe-newaletter" name="mc-embedded-subscribe-form"
                                class="newsletter-form validate dark-fields needs-validation-news" target="_blank" novalidate>
                                @CSRF
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="email"
                                            class="required email form-control" placeholder="Email Address"
                                            id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Join" name="subscribe"
                                            id="mc-embedded-subscribe2" class="btn btn-primary ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none">
                                        </div>
                                        <div class="response" id="mce-success-response2" style="display:none">
                                        </div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                            type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                            value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>


<div class="modal fade modal-newsletter" id="modal-newsletter" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <figure class="mb-6"><img src="{{ asset('assets/img/illustrations/i7.png') }}" srcset="{{ asset('assets/img/illustrations/i7@2x.png 2x') }}" alt="" /></figure>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <h3>Gracias por unirte a nuestra lista de correos!</h3>
        <p class="mb-6 message"></p>
      </div>
      <!--/.modal-body -->
    </div>
    <!--/.modal-content -->
  </div>
  <!--/.modal-dialog -->
</div>
<!--/.modal -->