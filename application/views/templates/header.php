<?php  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $judul; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Media prestasi favicons -->
        <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
        <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i|Raleway:300,400,500,600,700,800|Montserrat:300,400,,600,700|Poppins" rel="stylesheet">
        <!-- Bootstrap CSS File -->
        <link href="<?= base_url(); ?>assets/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/bootstrap/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/style_user.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/style-reglogin.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/style-event.css" rel="stylesheet">
	</head>
	<body>
        <!-- Media prestasi top bar -->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
                <div class="contact-info float-left">
                    <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">admin@mediaprestasi.com</a>
                    <a href="#"><i class="fa fa-info"></i> Cara share info</a>
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
        <!-- Media prestasi header -->
        <header id="header">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <h2><a href="<?= base_url(); ?>" class="scrollto"><img style="height: 50px;" src="<?= base_url(); ?>assets/img/logo.png"></a></h2>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="menu-has-children"><a href="#">Kategori</a>
                            <ul>
                                <?php foreach ($kategori as $kategori) : ?>
                                    <li><a href="<?= base_url(); ?><?= $kategori['link']; ?>"><?= $kategori['kategori']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="<?= base_url(); ?>artikel">Artikel</a></li>
                        <li><a href="<?= base_url(); ?>mediapartner">Media partner</a></li>
                        <li><a href="#contact">Kontak</a></li>
                        <?php if (isset($this->session->userdata['logged_in'])) : ?>
                            <li class="menu-has-children username"><a href="#"><i class="fa fa-user"></i> Hi, <?php echo $this->session->userdata['username']; ?></a>
                                <ul>
                                    <li><a href="<?=base_url(); ?>member/<?= $this->session->userdata['username']; ?>"><i class="fa fa-user"></i> Profil</a></li>
                                    <li><a href="<?= base_url() ?>logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if (!isset($this->session->userdata['logged_in'])) : ?>
                            <li><a href="<?= base_url(); ?>login" class="btn-login scrollto">Login</a></li>
                        <?php endif; ?>

                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header><!-- #header -->
  