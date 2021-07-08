@extends('layouts.masterhome')

@section('contenthome')

<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">LEMBAGA ILMU PENGETAHUAN INDONESIA</span></h2>
          <p class="animate__animated animate__fadeInUp">Informasi tentang peneliatian Yang telah dilakukan divisi Antena dan Propagasi-P2ET LIPI</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Refleksi Renstra 2015-2019 dan Perencanaan Program 2020-2024</h2>
          <p class="animate__animated animate__fadeInUp">Outline : Anggota Keltian Antena dan Propagasi, Hasil Riset telah dilakukan, Riset yang akan datang, dan kerjasama</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
 
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
</section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Tujuan</a></h4>
              <p class="description">Peningkatan temuan, terobosan dan pembaharuan ilmu pengetahuan serta pemanfaatannya dalam mewujudkan daya saing bangsa</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Tujuan</a></h4>
              <p class="description">Peningkatan nilai tambah dan kelestarian Sumber Daya Indonesia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tujuan</a></h4>
              <p class="description">Peningkatan posisi dan citra Indonesia di komunitas global dalam bidang ilmu pengetahuan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Tujuan</a></h4>
              <p class="description">Peningkatan budaya ilmiah masyarakat Indonesia</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>VISI dan MISI</h2>
          <p>Lembaga penelitian pertama, terbesar dan terbaik di Indonesia</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>VISI </h3>
            <p class="font-italic">
                Menjadi lembaga ilmu pengetahuan berkelas dunia dalam penelitian, pengembangan dan pemanfaatan ilmu pengetahuan untuk meningkatkan daya saing bangsa.
            </p>
       
          
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>MISI</h3>
          
            <ul>
              <li><i class="icofont-check"></i>Menciptakan invensi ilmu pengetahuan yang dapat mendorong inovasi dalam rangka meningkatkan daya saing ekonomi bangsa;</li>
              <li><i class="icofont-check"></i> Mengembangkan ilmu pengetahuan yang bermanfaat untuk konservasi dan pemanfaatan Sumber Daya berkelanjutan;</li>
              <li><i class="icofont-check"></i> Meningkatkan pengakuan internasional dalam bidang ilmu pengetahuan;</li>
              <li><i class="icofont-check"></i>Meningkatkan kualitas SDM Indonesia melalui aktivitas Ilmiah.</li>
            </ul>
          </div>
        </div>


      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

</html>

@stop