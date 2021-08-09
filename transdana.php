<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Transaksi - OnPay</title>
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
        <h1 class="text-light"><a href="cusindex.html"><span>OnPay</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

     <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="cusindex.html">Home</a></li>
          <li><a href="cuscontact.html">Contact Us</a>
          <li><a href="keranjang.php">Keranjang</a></li>
          </li>
          <li class="drop-down"><a href="">Account</a>
            <ul>
              <li><a href="profilcus.php">Profil</a></li>
              <li class="active"><a href="riwayat.php">Riwayat Top Up</a></li>
              <li><a href="index.html">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Transaksi</h2>
          
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Transaksi Section ======= -->
    <section class="transaksi" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">


         <?php
    $koneksi = mysqli_connect("localhost", "root", "", "onpay") or die ("ERROR! GAGAL TERHUBUNG");
	mysqli_select_db($koneksi, "onpay") or die ("ERROR! GAGAL TERHUBUNG".mysqli_error());
    
    $a="D";
        $b=0;
        $c=0;
        $d=1;
        $idnya=$a.$b.$c.$d;
        $query="select*from transaksi";
        if($hasil=$koneksi->query($query)){
            if($hasil->num_rows>0){
                while($baris=$hasil->fetch_array()){
                    if($idnya==$baris[0]){
                        $d=$d+1;
                        if($d>=100){
                            $idnya=$a.$d;
                        }else if($d>=10){
                            $idnya=$a.$b.$d;
                        }else{
                            $idnya=$a.$b.$c.$d;
                        }
                    }else{
                        //echo"sama";
                    }
                }
            }
         }
    ?>
          <div class="col-lg-6">
            <form action="dana_exe.php" method="post" class="form-transaksi">
              <div class="form-group">
                <input type="text" class="form-control" name="kodedana" id="kodedana" placeholder="Kode Transaksi" value="<?= $idnya;?>"readonly/>
              </div>
            <div class="form-group">
                <input type="text" class="form-control" name="transdana" id="transdana" placeholder="Jenis Transaksi" value="DANA" readonly/>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="nominaldana" id="nominaldana" placeholder="Nominal Transaksi" />
              </div>
            
              <div class="text-center"><button type="submit">Lanjutkan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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