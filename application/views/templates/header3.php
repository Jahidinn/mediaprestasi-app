<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Media Prestasi Indonesia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700|Poppins" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/style-reglogin.css" rel="stylesheet">
</head>
<body id="body">
  <!--==========================
    Top Bar
    ============================-->
    <section id="topbar" class="d-none d-lg-block">
      <div class="container clearfix">
        <div class="contact-info float-left">
          <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">admin@mediaprestasi.com</a>
          <i class="fa fa-phone"></i> +62 821 3050 5020
        </div>
        <div class="social-links float-right">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </section>
    <!--==========================
    Header
    ============================-->
    <header id="header">
      <div class="container-fluid">
        <div id="logo" class="pull-left">
          <h2><a href="#body" class="scrollto"><img style="height: 50px;" src="<?= base_url(); ?>assets/img/logo.png"></a></h2>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#body">Home</a></li>
            <li class="menu-has-children"><a href="#">Kategori</a>
              <ul>
                <li><a href="#">Lomba</a></li>
                <li><a href="#">Beasiswa</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#">Lowongan pekerjaan</a></li>
              </ul>
            </li>
            <li><a href="#about">Tentang kami</a></li>
            <li><a href="#contact">Media partner</a></li>
            <li><a href="#contact">Kontak</a></li>
            <?php if (isset($_SESSION["login"])): ?>
              <li class="menu-has-children username"><a href="#"><i class="fa fa-user"></i> Hi, <?php echo $row["username"]; ?></a>
                <ul>
                  <li><a href="user.php"><i class="fa fa-user"></i> Profil</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
              </li>
            <?php endif; ?>
            <?php if (!isset($_SESSION["login"])): ?>
              <li><a href="login.php" class="btn-login scrollto">Login</a></li>
            <?php endif; ?>

          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
  </header><!-- #header -->