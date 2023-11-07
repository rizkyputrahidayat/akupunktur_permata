 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
   <div class="container d-flex justify-content-between">

     <div class="logo">
       <!-- <h1><a href="index.html"><span>warna</span>usaha</a></h1> -->
       <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?= base_url('Home'); ?>"><img src="<?= base_url(); ?>/assets/home/assets/img/bg_ap.png" alt="" class="img-fluid"></a>
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