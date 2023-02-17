<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Video Site - Admin</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_admin/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_admin/css/style.css') }}" rel="stylesheet">

  </head>

  <body>

    
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
          <h1><a href="index.html">VideoSite Admin</a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <!-- <li><a href="">Home</a></li> -->
            <li><a href="{{ route('admin.categories') }}">Categories</a></li>
            <li><a href="{{ route('admin.contact-us-data') }}">Contact Us Data</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header>

    <main id="main">
     
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row">

            <div class="col entries">

              @yield('content')
              
            </div>

          </div>
        </div>
      </section>

    </main>

    
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Video Site</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Project Demo @ PU WorkShop
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_admin/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</html>