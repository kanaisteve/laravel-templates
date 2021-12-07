<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="landing-img">
        <main>
            <div class="container">
                <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-right">
                            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                                <div class="card mb-3">
                                    <!-- Logo -->
                                    <div class="d-flex justify-content-center py-4">
                                        <a href="login.php" class="logo-2 d-flex align-items-center w-auto">
                                            <img src="assets/img/ba-logo-portrait.png" alt="">
                                            <!--<span class="d-none d-lg-block">NiceAdmin</span>-->
                                        </a>
                                    </div><!-- End Logo -->

                                    <div class="card-body">
                                        @yield('content')
                                    </div>
                  
                                    <!-- Sponsor Logos -->
                                    <div class="d-flex justify-content-center py-4">
                                      <a href="login.php" class="logo-3 d-flex align-items-center">
                                      <img src="assets/img/samfratel.png" alt="" style="max-height: 40px;">
                                        <!--<span class="d-none d-lg-block">NiceAdmin</span>-->
                                      </a>
                                    </div><!-- End Sponsor Logo -->
                                </div>

                                <div class="form-footer-words">
                                  <!-- All the links in the footer should remain intact. -->
                                  <!-- You can delete the links only if you purchased the pro version. -->
                                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                  Designed by <a class="form-footer-link" href="https://samafricaonline.com/" target="_blank">samafricaonline</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main><!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- ======= Footer/Scripts ======= -->
        @include('layouts.scripts')
    </body>
</html>