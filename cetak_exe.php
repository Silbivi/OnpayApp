<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selesai - OnPay</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon2.png" rel="icon">
  <link href="assets/img/LogoOnpay.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><span>OnPay</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="validasipembayaran.php">Validasi Transaksi</a></li>
          <li class="active"><a href="beliselesai.php">Pembelian Selesai</a></li>
          <li class="drop-down"><a href="">Account</a>
            <ul>
              <li><a href="profiladmin.php">Profil</a></li>
              <li><a href="index.html">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">


    <!-- ======= Keranjang Section ======= -->    
  
<link href="assets/css/style.css" rel="stylesheet">

<br>
<script>

		function printDiv(divName){

			var printContents = document.getElementById(divName).innerHTML;

			var originalContents = document.body.innerHTML;


			document.body.innerHTML = printContents;


			window.print();


			document.body.innerHTML = originalContents;


		}

	</script>

<div class="kertas" id="cetak">

 <?php
  include 'koneksi.php';
    
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('d');
    $bulan = date('m');
    $tahun = date('Y');
    $waktu = "$tanggal-$bulan-$tahun";
    
  $kode=$_GET['kodetransaksi'];
  
 $sql= mysql_query("select kodetransaksi, kodebayar, jenistrans, nominal, metodebayar from pembayaran inner join transaksi on kodetrans=kodetransaksi where kodetransaksi='$kode'");

if ($sql) {
          while ($data=mysql_fetch_array($sql)) {
              
    ?>
               <br>
                <center>ONPAY
                <br>
                TopUp E- Money dan Isi Ulang Pulsa
                <br>
                Bandung, Jawa Barat
                <br>
                <br>
                </center>
                <font style="font-size:12px;">
                &nbsp;Kode Bayar : <?php echo $data['kodebayar']; ?>
                <br>
                &nbsp;<?= $waktu;?>
                </font><br>
                
                <br>
                
                
                 &nbsp;Kode Transaksi
                 <p style="text-align: right;">
                <?php echo $data['kodetransaksi']; ?> &nbsp;</p>
                 
                  &nbsp; Jenis Transaksi
                  <p style="text-align: right;">
                  <?php echo $data['jenistrans']; ?>&nbsp; </p>
                  
                 
                  
                  <p style="text-align: right;">
                  Total Bayar : Rp. 
                  <?php echo $data['nominal']; ?>&nbsp;
                  <br>
                  Metode Bayar :
                  <?php echo $data['metodebayar']; ?>&nbsp; </p>
                  <br>
                  <center>Terima Kasi Telah Melakukan Isi Ulang atau Top Up di Toko Kami</center>
                  
    <?php
              
            }
          }
    ?>
</div>
<br>
<button onclick="printDiv('cetak')" class="button2" style="margin-left:600px;">Cetak</button>

<br><br>
 <!-- End Contact Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
  
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
             <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
          </div>
          
         <div class="col-lg-3 col-md-6 footer-info">
            <div class="social-links mt-3">
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="#" class="tumblr"><i class="bx bxl-tumblr"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 footer-contact">
           

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="#">Kelompok 1</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>