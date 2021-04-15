<?= $this->extend('layout/layout_template') ?>
<?= $this->section('content') ?>
<!-- Home -->
<div id="home" class="hero-area">

  <!-- Backgound Image -->
  <div class="bg-image bg-parallax overlay" style="background-image:url(<?= base_url('assets/img/home-background.jpg') ?>)"></div>
  <!-- /Backgound Image -->

  <div class="home-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="white-text">Pendidikan Teknik Informatika Dan Komputer</h1>
          <p class="lead white-text">Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret Surakarta merupakan Lembaga Pendidikan Tenaga Kependidikan (LPTK) yang memiliki 24 program studi di 6 jurusan.</p>
          <a class="main-button icon-button" href="#">Info</a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /Home -->

<!-- About -->
<div id="about" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <div class="col-md-6">
        <div class="section-header">
          <h2>Selamat Datang</h2>
          <p class="lead">Info PTIK</p>
        </div>

        <!-- feature -->
        <div class="feature">
          <i class="feature-icon fa fa-flask"></i>
          <div class="feature-content">
            <h4>Akreditasi Program Studi</h4>
            <p>Berdasarkan SK BAN-PT NOMOR : 4485/SK/BAN-PT/Akred/S/XI/2019 , Program Studi Pendidikan Teknik Informatika dan Komputer</p>
          </div>
        </div>
        <!-- /feature -->

        <!-- feature -->
        <div class="feature">
          <i class="feature-icon fa fa-users"></i>
          <div class="feature-content">
            <h4>Fasilitas</h4>
            <p>Progam Studi S-1 Pendidikan Teknik Informatika dan Komputer FKIP UNS menempati gedung yang cukup luas.</p>
          </div>
        </div>
        <!-- /feature -->

        <!-- feature -->
        <div class="feature">
          <i class="feature-icon fa fa-comments"></i>
          <div class="feature-content">
            <h4>Jalur Penerimaan</h4>
            <p>Sistem penerimaan mahasiswa baru di program studi pendidikan teknik informatika dan komputer.</p>
          </div>
        </div>
        <!-- /feature -->

      </div>

      <div class="col-md-6">
        <div class="about-img">
          <img src="<?= base_url('assets/img/about.png') ?>" alt="">
        </div>
      </div>

    </div>
    <!-- row -->

  </div>
  <!-- container -->
</div>
<!-- /About -->

<!-- Courses -->
<div id="courses" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">
      <div class="section-header text-center">
        <h2>Kursus Tambahan Di PTIK</h2>
        <p class="lead">PTIK menyediakan kursus tambahan di luar Mata Kuliah.</p>
      </div>
    </div>
    <!-- /row -->

    <!-- courses -->
    <div id="courses-wrapper">

      <!-- row -->
      <div class="row">

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course01.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Kursus Exel</a>
            <div class="course-details">
              <span class="course-category">Bisnis</span>
              <span class="course-price course-free">Gratis</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course02.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Pengenalan CSS </a>
            <div class="course-details">
              <span class="course-category">Web Design</span>
              <span class="course-price course-premium">Premium</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course03.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Kursus Menggambar</a>
            <div class="course-details">
              <span class="course-category">Menggambar</span>
              <span class="course-price course-premium">Premium</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course04.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Kursus Web Development</a>
            <div class="course-details">
              <span class="course-category">Web Development</span>
              <span class="course-price course-free">Gratis</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

      </div>
      <!-- /row -->

      <!-- row -->
      <div class="row">

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course05.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">PHP Tips, Tricks, and Techniques</a>
            <div class="course-details">
              <span class="course-category">Web Development</span>
              <span class="course-price course-free">Gratis</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course06.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Semua Tentang Web Design</a>
            <div class="course-details">
              <span class="course-category">Web Design</span>
              <span class="course-price course-free">Gratis</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course07.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Photography</a>
            <div class="course-details">
              <span class="course-category">Photography</span>
              <span class="course-price course-free">Gratis</span>
            </div>
          </div>
        </div>
        <!-- /single course -->


        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
              <img src="<?= base_url('assets/img/course08.jpg') ?>" alt="">
              <i class="course-link-icon fa fa-link"></i>
            </a>
            <a class="course-title" href="#">Typography From A to Z</a>
            <div class="course-details">
              <span class="course-category">Typography</span>
              <span class="course-price course-free">Gratis</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

      </div>
      <!-- /row -->

    </div>
    <!-- /courses -->

    <div class="row">
      <div class="center-btn">
        <a class="main-button icon-button" href="#">Kursus Lainnya</a>
      </div>
    </div>

  </div>
  <!-- container -->

</div>
<!-- /Courses -->

<!-- Call To Action -->
<div id="cta" class="section">

  <!-- Backgound Image -->
  <div class="bg-image bg-parallax overlay" style="background-image:url(<?= base_url('assets/img/cta1-background.jpg') ?>)"></div>
  <!-- /Backgound Image -->

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <div class="col-md-6">
        <h2 class="white-text">Kabar PTIK Terkini.</h2>
        <p class="lead white-text">Video Profile PTIK 2021 Branding dengan semangat kompetisi.</p>
        <a class="main-button icon-button" href="#">Lanjut Baca</a>
      </div>

    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</div>
<!-- /Call To Action -->

<!-- Why us -->
<div id="why-us" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">
      <div class="section-header text-center">
        <h2>Mengenai PTIK</h2>
        <p class="lead"></p>
      </div>

      <!-- feature -->
      <div class="col-md-4">
        <div class="feature">
          <i class="feature-icon fa fa-flask"></i>
          <div class="feature-content">
            <h4>Akreditasi Program Studi</h4>
            <p>Berdasarkan SK BAN-PT NOMOR : 4485/SK/BAN-PT/Akred/S/XI/2019 , Program Studi Pendidikan Teknik Informatika dan Komputer.</p>
          </div>
        </div>
      </div>
      <!-- /feature -->

      <!-- feature -->
      <div class="col-md-4">
        <div class="feature">
          <i class="feature-icon fa fa-users"></i>
          <div class="feature-content">
            <h4>Fasilitas</h4>
            <p>Progam Studi S-1 Pendidikan Teknik Informatika dan Komputer FKIP UNS menempati gedung yang cukup luas.</p>
          </div>
        </div>
      </div>
      <!-- /feature -->

      <!-- feature -->
      <div class="col-md-4">
        <div class="feature">
          <i class="feature-icon fa fa-comments"></i>
          <div class="feature-content">
            <h4>Jalur Penerimaan</h4>
            <p>Sistem penerimaan mahasiswa baru di program studi pendidikan teknik informatika dan komputer.</p>
          </div>
        </div>
      </div>
      <!-- /feature -->

    </div>
    <!-- /row -->

    <hr class="section-hr">

    <!-- row -->
    <div class="row">

      <div class="col-md-6">
        <h3>Acara PTIK</h3>
        <p class="lead">Video Profile PTIK 2021 Branding dengan semangat kompetisi</p>
      </div>

      <div class="col-md-5 col-md-offset-1">
        <a class="about-video" href="#">
          <img src="<?= base_url('assets/img/about-video.jpg') ?>" alt="">
          <i class="play-icon fa fa-play"></i>
        </a>
      </div>

    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</div>
<!-- /Why us -->

<!-- Contact CTA -->
<div id="contact-cta" class="section">

  <!-- Backgound Image -->
  <div class="bg-image bg-parallax overlay" style="background-image:url(<?= base_url('assets/img/cta2-background.jpg') ?>)"></div>
  <!-- Backgound Image -->

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="white-text">Kontak</h2>
        <p class="lead white-text">Telp/Fax : (0271)648939
          Email : ptik@fkip.uns.ac.id
          Website : http://ptik.fkip.uns.ac.id</p>
        <a class="main-button icon-button" href="#">Hubungi Sekarang</a>
      </div>

    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</div>
<!-- /Contact CTA -->
<?= $this->endSection() ?>