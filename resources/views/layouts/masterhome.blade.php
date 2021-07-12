<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Lipi | Beranda</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- Favicons -->
  <link href="{{asset('admin/assets/img/logo-lipi.png')}}" rel="icon">
  <link href="{{asset('admin/assets/img/logo-lipi.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
    {{-- Navbar --}}
    @include('layouts.includes._navhome')

    {{-- Content --}}
    @yield('contenthome')

    {{-- Footer --}}
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/penelitian">Penelitian</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/kunjungan">Kunjungan</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/kontak">Kontak Kami</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="/login">Login</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> Penelitian</li>
                  <li><i class="bx bx-chevron-right"></i> Antena dan Propagasi</li>
                  <li><i class="bx bx-chevron-right"></i> Elektronika Telekomunikasi</li>
                  <li><i class="bx bx-chevron-right"></i> Smart Sensor</li>
                  <li><i class="bx bx-chevron-right"></i> Material & Divais Sel Surya</li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  Jl. Sangkuriang, Dago, Kecamatan Coblong  <br>
                 Kota Bandung, Jawa Barat 4013
                  <strong>Phone:</strong> +62215225711<br>
                  <strong>Email:</strong> layanan@mail.lipi.go.id<br>
                </p>
    
              </div>
    
              <div class="col-lg-3 col-md-6 footer-info">
                <h3>About LIPI Bandung</h3>
                <p>Menjadi lembaga ilmu pengetahuan berkelas dunia dalam penelitian, pengembangan dan pemanfaatan ilmu pengetahuan untuk meningkatkan daya saing bangsa.</p>
            
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>LIPI Bandung</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
          </div>
        </div>
      </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>