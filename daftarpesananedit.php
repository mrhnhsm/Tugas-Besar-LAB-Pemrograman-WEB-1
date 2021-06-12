<?php
session_start();
include "koneksidata.php";
if(!isset($_SESSION['username'])){
    header ("location:loginadmin.php");
}
if(isset($_SESSION['username'])){
    $username= $_SESSION['username'];
}
?>

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
          <li><a class="nav-link scrollto active" href="halamanadmin.php">Home</a></li>
          <li><a class="nav-link scrollto" href="halamanadmin.php">Alasan Memilih Kami</a></li>
          <li><a class="nav-link scrollto" href="halamanadmin.php">Menu</a></li>
          <li><a class="nav-link scrollto" href="daftarpesanan.php">Daftar Pesanan</a></li>
          <li><a class="nav-link scrollto" href="daftarpesananedit.php">Edit Proses Pesanan</a></li>
          <li><a class="nav-link scrollto" href="logoutadmin.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        
         <div>
         <center>
        <pp>Welcome Admin, <?php echo $_SESSION['username']; echo " "?><br></pp>
            </center></div>
        
    </div>
  </header><!-- End Header -->

    <!--Awal Jadwal-->
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div class="jumbotron" id="pesanan">
            <div class="container">
          <h1 class="display-4">Edit Daftar Pesanan </h1>
            <table class="table table-hover">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Makanan</th>
                <th>Minuman</th>
                <th>Makanan Penutup</th>
                <th>Status</th>
                <th>Proses Hapus Pesanan</th>
                <th>Proses Edit Pesanan</th>
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
                    <td >
                    
                         <a  class="btn btn-danger" href="hapuspesanan.php?nama=<?php echo $d['nama']; ?>">Hapus Pesanan</a>
                    </td>
                    <td>
                        <a class="btn btn-info" href="editpesanan.php?nama=<?php echo $d['nama']; ?>">Edit Pesanan</a>
                    
                    </td>
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
        
         <!-- CDN BOOTSTRAP AWAL-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!--AKHIR CDN BOOTSTRAP-->


</body>

</html>