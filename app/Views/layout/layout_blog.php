<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>PTIK</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.min.css') ?>">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand" style="background-image: url(<?= base_url('assets/img/logo.png') ?>); width: 100px; background-size:cover; background-repeat:no-repeat">
        </div>
        <!-- /Logo -->

        <!-- Mobile toggle -->
        <button class="navbar-toggle">
          <span></span>
        </button>
        <!-- /Mobile toggle -->
      </div>

      <!-- Navigation -->
      <nav id="nav">
        <ul class="main-menu nav navbar-nav navbar-right">
          <li><a href="<?= base_url() ?>">Beranda</a></li>
          <li><a href="/profil">Profil</a></li>
          <li><a href="/matakuliah">Mata Kuliah</a></li>
          <li><a href="/blog">Fasilitas</a></li>
          <li><a href="/contact">Kontak</a></li>
        </ul>
      </nav>
      <!-- /Navigation -->

    </div>
  </header>
  <!-- /Header -->

  <?= $this->renderSection('content') ?>
  <!-- Footer -->
  <footer id="footer" class="section">

    <!-- container -->
    <div class="container">

      <!-- row -->
      <div class="row">

        <!-- footer logo -->
        <div class="col-md-6">
          <div class="footer-logo">
            <a class="logo" href="index.html">
              <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo">
            </a>
          </div>
        </div>
        <!-- footer logo -->

        <!-- footer nav -->
        <div class="col-md-6">
          <ul class="footer-nav">
            <li><a href="/home">Beranda</a></li>
            <li><a href="/profile">Profil</a></li>
            <li><a href="/matakuliah">Mata Kuliah</a></li>
            <li><a href="/blog">Fasilitas</a></li>
            <li><a href="/contact">Kontak</a></li>
          </ul>
        </div>
        <!-- /footer nav -->

      </div>
      <!-- /row -->

      <!-- row -->
      <div id="bottom-footer" class="row">

        <!-- social -->
        <div class="col-md-4 col-md-push-8">
          <ul class="footer-social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <!-- /social -->

        <!-- copyright -->
        <div class="col-md-8 col-md-pull-4">
          <div class="footer-copyright">
            <span>&copy; Copyright 2018. All Rights Reserved.<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://ptik.fkip.uns.ac.id/">PTIK</a></span>
          </div>
        </div>
        <!-- /copyright -->

      </div>
      <!-- row -->

    </div>
    <!-- /container -->

  </footer>
  <!-- /Footer -->

  <!-- preloader -->
  <div id='preloader'>
    <div class='preloader'></div>
  </div>
  <!-- /preloader -->


  <!-- jQuery Plugins -->
  <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>