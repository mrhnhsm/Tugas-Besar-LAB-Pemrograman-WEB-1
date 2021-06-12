<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cali's Cafe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.jpg" rel="icon">
  <link href="img/logo.jpg" rel="apple-touch-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
    
    <body>
    
         <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>085271013161</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Buka 10AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Cali's Cafe</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo.jpg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Alasan Memilih Kami</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#pesanan">Daftar Pesanan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="loginusaha.php" class="book-a-table-btn scrollto d-none d-lg-flex">Login Cafe</a>

    </div>
  </header><!-- End Header -->
        
        <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat Datang Di <span>Cali's Cafe</span></h1>
          <h2>Tempat Nongkrong nya Anak Muda</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
        
        <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kenapa Kami</h2>
          <p>Kami Cafe Nya Anak Muda</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Tempat Yang Nyaman</h4>
              <p>Cafe Kami Menyediakan Tempat yang Nyaman Untuk brkumpul Bersama Keluarga, Pasangan, Dan Teman Anda</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Wifi</h4>
              <p>Cafe Kami Menyediakan Wifi Gratis Bagi Seluruh Customer</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Selfi </h4>
              <p>Cafe Kami Memiliki Tempat Astetik Untuk Para Customer Berfoto Ria</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
        
        <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-makanan">Makanan</li>
              <li data-filter=".filter-minuman">Minuman</li>
              <li data-filter=".filter-penutup">Makanan Penutup</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-makanan">
            <img src="img/sate.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sate Padang</a><span>Rp12.000</span>
            </div>
            <div class="menu-ingredients">
              Sate Padang Dengan Daging Sapi Porsi Penuh
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-penutup">
            <img src="img/eskrim.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Eskrim Full Topping</a><span>Rp15.000</span>
            </div>
            <div class="menu-ingredients">
              Eskrim Dengan Campuran Toping dan 3 rasa Eskrim
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-makanan">
            <img src="img/nasgor.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Nasi Goreng Komplit</a><span>Rp22.000</span>
            </div>
            <div class="menu-ingredients">
             Dengan Topping dan Seafood Lengkap
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-minuman">
            <img src="img/milkshake.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Milkshake Coklat</a><span>Rp16.000</span>
            </div>
            <div class="menu-ingredients">
              Minuman Milkshake dengan Campuran Eskrim
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-penutup">
            <img src="img/salad.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salad Buah</a><span>Rp10.000</span>
            </div>
            <div class="menu-ingredients">
              Salad Dengan Buah Segar
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-makanan">
            <img src="img/steak.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Steak</a><span>Rp25.000</span>
            </div>
            <div class="menu-ingredients">
              Steak Dengan Ayam Empuk dan Saus Creamy
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-minuman">
            <img src="img/jeruk.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Jus Jeruk</a><span>Rp.12.000</span>
            </div>
            <div class="menu-ingredients">
              Jus Dengan Perasan Jeruk Segar
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-minuman">
            <img src="img/pokat.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Jus Pokat</a><span>Rp.14.000</span>
            </div>
            <div class="menu-ingredients">
              Jus Dengan Pokat Khas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-penutup">
            <img src="img/puding.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pudding</a><span>Rp8.000</span>
            </div>
            <div class="menu-ingredients">
              Pudding Nutri Jell Lembut
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
        
        
    <!--Awal Jadwal-->
        
        <div class="jumbotron " id="pesanan">
            <div class="container">
          <h1 class="display-4">Daftar Pesanan </h1>
            <table class="table table-hover">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Makanan</th>
                <th>Minuman</th>
                <th>Makanan Penutup</th>
                <th>Status</th>
            </thead>
                
                <?php
                
                include_once 'koneksidata.php';
                    $no=1;
                    $data=mysqli_query($koneksi, "select * from pesanan");
                while ($d=mysqli_fetch_array($data)){
            ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['makanan']; ?></td>
                    <td><?php echo $d['minuman']; ?></td>
                    <td><?php echo $d['penutup']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                </tr>
                    <?php  
                }
                
                ?>
                
                
        </table>
        </div>
        </div>
        
        <!--Akhir Jadwal-->
        
    
    
     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cali's Cafe  </span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>