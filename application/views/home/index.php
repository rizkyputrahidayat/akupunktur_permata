<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/home/assets/img/logo-only.png" rel="icon">
  <link href="<?= base_url(); ?>/assets/home/assets/img/logo-only.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/home/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div style="display: flex" class="logo">
        <!-- <h1><a href="index.html"><span>warna</span>usaha</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url('Home'); ?>"><img style="width: 55px; min-height: 55px !important;" src="<?= base_url(); ?>/assets/home/assets/img/ic_akp.png" alt="" class="img-fluid"></a>
        <div style="padding-left: 15px; margin: auto;">
            <p style="font-size:14px; color: #FFFFFF; margin-bottom: 0px;"> <b>AKUPUNKTUR PERMATA </b> </p>
            <p style="font-size:9.5px; color: #FFFFFF; margin: 0px; margin-top: -5px;"> Akupunktur Kesehatan Keluarga Anda </p>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('Home'); ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('Home/about'); ?>">Tentang Kami</a></li>
          <li class="dropdown"><a href="#"><span>Layanan Populer</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="<?= base_url('Home/Nyeri_kepala'); ?>">Nyeri Kepala</a></li>
              <li><a href="<?= base_url('Home/Nyeri_leher'); ?>">Nyeri Leher </a></li>
              <li><a href="<?= base_url('Home/Nyeri_bahu'); ?>">Nyeri Bahu</a></li>
              <li><a href="<?= base_url('Home/Nyeri_lutut'); ?>">Nyeri Lutut</a></li>
              <li><a href="<?= base_url('Home/Nyeri_pinggang'); ?>">Nyeri Pinggang</a></li>
              <li><a href="<?= base_url('Home/Syaraf_kejepit'); ?>">Syaraf Kejepit</a></li>
              <li><a href="<?= base_url('Home/Stroke'); ?>">STOKE</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('Home/jadwal'); ?>">Jadwal</a></li>
          <li><a href="<?= base_url('Home/blog'); ?>">Blog</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('Home/gallery'); ?>">Gallery</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('auth/register'); ?>">Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(<?= base_url(); ?>/assets/img/hero2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <p class="animate__animated animate__fadeInUp">AKUPUNKTUR PERMATA</p>
                <h2 class="animate__animated animate__fadeInDown">"Solusi Efektif untuk Nyeri Otot, Tulang, dan Sendi Anda"</h2>
                <a href="https://api.whatsapp.com/send/?phone=6281210211189&text=Halo%20Akupunktur%20Permata%2C%0A%0ASaya%20minta%20jadwal%20kunjungan%20untuk%20konsultasi%20dan%20terapi%20di%20Akupunktur%20Permata." class="btn-get-started scrollto animate__animated animate__fadeInUp"><i class="bi bi-headset"></i> CUSTOMER SERVICE</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(<?= base_url(); ?>/assets/img/hero1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <p class="animate__animated animate__fadeInUp">AKUPUNKTUR PERMATA</p>
                <h2 class="animate__animated animate__fadeInDown">"Solusi Efektif untuk Nyeri Otot, Tulang, dan Sendi Anda"</h2>
                <a href="https://api.whatsapp.com/send/?phone=6281210211189&text=Halo%20Akupunktur%20Permata%2C%0A%0ASaya%20minta%20jadwal%20kunjungan%20untuk%20konsultasi%20dan%20terapi%20di%20Akupunktur%20Permata." target="_blank" class="btn-get-started scrollto animate__animated animate__fadeInUp"><i class="bi bi-headset"></i> CUSTOMER SERVICE</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(<?= base_url(); ?>/assets/img/hero3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <p class="animate__animated animate__fadeInUp">AKUPUNKTUR PERMATA</p>
                <h2 class="animate__animated animate__fadeInDown">"Solusi Efektif untuk Nyeri Otot, Tulang, dan Sendi Anda"</h2>
                <a href="https://api.whatsapp.com/send/?phone=6281210211189&text=Halo%20Akupunktur%20Permata%2C%0A%0ASaya%20minta%20jadwal%20kunjungan%20untuk%20konsultasi%20dan%20terapi%20di%20Akupunktur%20Permata." class="btn-get-started scrollto animate__animated animate__fadeInUp"><i class="bi bi-headset"></i> CUSTOMER SERVICE</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <br>
              <h2>TENTANG KAMI</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <img src="<?= base_url(); ?>/assets/home/assets/img/about/hero1.jpg" alt="">
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well ">
                <h4 class="sec-head">PROFILE</h4>
                <p>
                  Kesehatan tubuh merupakan hal yang sangat penting dan tidak dapat dipandang sebelah mata. Masalah nyeri otot, tulang, dan sendi bisa sangat mengganggu keseharian Anda, dan bisa mempengaruhi produktivitas dan kualitas hidup Anda. Jika Anda mengalami masalah tersebut, maka kami memiliki solusi yang tepat untuk Anda.
                </p>
                <p>
                  Akupunktur Permata adalah layanan kesehatan akupunktur yang mengkhususkan diri pada pengobatan nyeri otot, tulang, dan sendi. Kami memiliki tim ahli terapis akupunktur yang berpengalaman dan kompeten dalam memberikan pengobatan yang efektif untuk mengatasi masalah kesehatan Anda.
                </p>
                <div class=""><a href="<?= base_url('Home/about'); ?>" class="btn-about">Read More</a></div>
              </div>

            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->


    <!-- ======= Pelayana Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>LAYANAN TERPOPULER KAMI</h2>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/sakit_kepala.jpg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    NYERI KEPALA
                  </h4>
                  <p>
                    Sakit kepala atau nyeri kepala adalah kondisi ketika seseorang merasakan rasa sakit, tekanan, atau ketegangan di sekitar kepala
                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Nyeri_kepala'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/leher.jpg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    NYERI LEHER
                  </h4>
                  <p>
                    Nyeri leher dapat disebabkan oleh berbagai faktor, seperti postur yang buruk, cedera fisik, kondisi medis, stres dan kecemasan, kurangnya gerakan, posisi tidur yang salah, dll.
                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Nyeri_leher'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/bahu.jpg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    NYERI BAHU
                  </h4>
                  <p>
                    Nyeri bahu dapat disebabkan oleh berbagai kondisi medis atau faktor lain, termasuk cedera, postur yang buruk, kondisi medis, stres, beban berlebihan pada bahu, dll.
                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Nyeri_bahu'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
          </div>
          <br>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/lutut.jpg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    NYERI LUTUT
                  </h4>
                  <p>
                    Nyeri lutut pada orang dewasa bisa disebabkan oleh berbagai faktor, termasuk cedera, kondisi medis, berlebihan beban pada lutut, masalah postur, faktor usia, dll.
                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Nyeri_lutut'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/pinggang.jpg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    NYERI PINGGANG
                  </h4>
                  <p>
                    Nyeri pinggang dapat disebabkan oleh berbagai faktor, seperti cedera fisik, postur yang buruk, kelebihan berat badan, kondisi medis seperti herniated disk, dll.

                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Nyeri_pinggang'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/saraf.jpg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    SYARAF KEJEPIT
                  </h4>
                  <p>
                    Syaraf kejepit atau kondisi medis yang dikenal dengan istilah "pinched nerve" terjadi ketika saraf terjepit atau tertekan oleh jaringan di sekitarnya.
                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Syaraf_kejepit'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
            </div>
            <!-- End Left Blog-->

          </div><br>
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <img src="<?= base_url(); ?>/assets/home/assets/img/blog/stroke1.jpeg" alt="">
              </div>
              <div class="blog-meta">

              </div>
              <div class="blog-text text-center">
                <h4>
                  STROKE
                </h4>
                <p>
                  Stroke adalah kondisi medis yang terjadi ketika pasokan darah ke otak terganggu atau terhenti, biasanya disebabkan oleh penyumbatan atau pecahnya pembuluh darah di otak.
                </p>
              </div>
              <div class="text-center"><a href="<?= base_url('Home/Stroke'); ?>" class="btn ready-btn align-center">Read More</a></div>
            </div>
          </div>
          <!-- End Left Blog-->


        </div>

      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="<?= base_url(); ?>/assets/home/assets/img/about/hero4.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>Mempunyai Keluhan Dengan Kesehatan Anda</h2>
            <h5>Jangan Ragu untu datang atau menghubungi kami!</h5>
            <a href="https://api.whatsapp.com/send/?phone=6281210211189&text=Halo%20Akupunktur%20Permata%2C%0A%0ASaya%20minta%20jadwal%20kunjungan%20untuk%20konsultasi%20dan%20terapi%20di%20Akupunktur%20Permata." target="_blank" class="ready-btn scrollto">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Konsultasikan tentang kesehatan anda pada kami</h3>
              <a class="sus-btn" href="https://api.whatsapp.com/send/?phone=6281210211189&text=Halo%20Akupunktur%20Permata%2C%0A%0ASaya%20minta%20jadwal%20kunjungan%20untuk%20konsultasi%20dan%20terapi%20di%20Akupunktur%20Permata." target="_blank">Free Konsultasi</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->


    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="</?= base_url(); ?>/assets/home/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                <h3>Muhammad Syukri</h3>
                <h4>(52 Tahun)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya sudah mencoba beberapa sesi akupunktur dengan Akupunktur Permata dan saya merasa sangat lega setiap kali selesai. Saya memiliki masalah nyeri kronis dan akupunktur telah membantu saya mengelola rasa sakit saya dengan sangat baik.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="</?= base_url(); ?>/assets/home/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                <h3>Fatimah Az-zahra</h3>
                <h4>(38 Tahun)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya baru saja menyelesaikan program akupunktur dengan Akupunktur Permata dan saya merasa sehat dan bahagia. Praktisi mereka sangat ramah dan profesional, dan saya merasa sangat dihargai sebagai pasien.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="</?= base_url(); ?>/assets/home/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                <h3>Elidaswis</h3>
                <h4>(50 Tahun)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya telah mencoba berbagai jenis pengobatan untuk masalah kesehatan saya dan akupunktur adalah yang terbaik. Saya sangat senang menemukan Akupunktur Permata karena mereka memiliki praktisi yang sangat terampil dan perhatian pada kebutuhan saya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <a href="<?= base_url('Home'); ?>"><img src="<?= base_url(); ?>/assets/home/assets/img/logo-akupunktur.png" alt="" class="img-fluid"></a>
                </div>

                <p>Layanan Kesehatan Akupunktur Akurat, Tepat, Tanpa Obat.</p>
                <!-- <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Untuk Informasi lebih Lanjut. Silahkan Hubungi Kami pada contact di bawah!!
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +62 812-1021-1189</a></p>
                  <p><span>Email:</span> contact@akupunkturpermata.id</a></p>
                  <p><span>Jam Kerja:</span> Setiap Hari 08:00-21:00 WIB</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Map</h4>
                <div class="footer-contacts text-center">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3801079258897!2d106.7787701204349!3d-6.213497785806541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7942b54a85d%3A0x950e8ada7f1416a1!2sGriya%20Akupunktur%20Permata!5e0!3m2!1sid!2sid!4v1680499486149!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                <?= date('Y'); ?> &copy; Copyright <strong>AKUPUNKTUR PERMATA</strong>. All Rights Reserved
              </p>
            </div>
            <!--<div class="credits">-->
            <!--  Web Developer <a href="https://duduweb.id/">Duduweb.id</a>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <a href="https://api.whatsapp.com/send/?phone=6281210211189&text=Halo%20Akupunktur%20Permata%2C%0A%0ASaya%20minta%20jadwal%20kunjungan%20untuk%20konsultasi%20dan%20terapi%20di%20Akupunktur%20Permata." class="wa-floating d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-whatsapp"></i></a>
  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/home/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>/assets/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>/assets/home/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/home/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/home/assets/js/main.js"></script>

</body>

</html>