<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/halamanutama/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/halamanutama/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/halamanutama/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/halamanutama/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/halamanutama/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/halamanutama/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/halamanutama/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/halamanutama/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/halamanutama/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Regna - v2.2.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Masuk</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Daftar</a></li>
                        @endif
                    @endauth
            @endif
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        ​<picture>
            <img src="{{asset('assets/halamanutama/img/document.png')}}" class="img-thumbnail img-utama" alt="Cinque Terre">
          </picture>
      <h1>Sistem Informasi Pengelolaan Arsip Surat</h1>
      <h2>Memudahkan Pengelolaan Arsip Surat Masuk dan Keluar</h2>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">


    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/halamanutama/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/hoverIntent/hoverIntent.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/halamanutama/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/halamanutama/js/main.js')}}"></script>

</body>

</html>