<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Single Sign On (SSO)</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>asset/sso/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/sso/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/sso/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/sso/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/sso/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/sso/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>asset/sso/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
</head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    <?php $d = $pegawai['foto']; ?>
    <header id="header">
      <div class="d-flex flex-column">

        <div class="profile">
          <img src="<?php echo $d;?>" class="img-fluid rounded-circle" style="width: 110px;height: 110px;">
          <h1 class="text-light" style="font-size: 1rem;"><a href="#"><?php echo $pegawai['nama'];?></a></h1>
          <div class="social-links mt-3 text-center">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

        <nav class="nav-menu">
          <ul>
            <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about"><i class="bx bx-user"></i> <span>Profile</span></a></li>
            <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#services"><i class="bx bx-book-content"></i> Aplikasi</a></li>
            <li><a href="<?php echo site_url();?>login/logout"><i class="bx bx-server"></i> Logout</a></li>
            <!-- <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li> -->
          </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

      </div>
    </header>
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="bg-hero d-flex flex-column justify-content-center align-items-center" style="background: url('<?php echo $d;?>') top center;background-size: cover;">
      <div  class="hero-container" data-aos="fade-in">
        <h1 ><?php echo $pegawai['nama'];?></h1>
        <p><span class="typed" data-typed-items="<?php echo $pegawai['nip'];?>, <?php echo $pegawai['pangkat'];?>, <?php echo $pegawai['jabatakecil'];?>"></span></p>
      </div>
    </section><!-- End Hero -->

    <main id="main">
    <?php include 'profile.php';?>
    <?php include 'pangkat.php';?>
    <?php include 'aplikasi.php';?>
    </main>
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          <!-- &copy; Copyright <strong><span>iPortfolio</span></strong> -->
        </div>
      </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>asset/sso/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/typed.js/typed.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/sso/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>asset/sso/js/main.js"></script>
  </body>

</html>