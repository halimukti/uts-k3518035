<?= $this->extend('layout/layout_blog') ?>
<?= $this->section('content') ?>
<!-- Hero-area -->
<div class="hero-area section">

  <!-- Backgound Image -->
  <div class="bg-image bg-parallax overlay" style="background-image:url(<?= base_url('assets/img/page-background.jpg') ?>)"></div>
  <!-- /Backgound Image -->

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h1 class="white-text">Kontak Kami</h1>

      </div>
    </div>
  </div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <!-- contact form -->
      <div class="col-md-6">
        <div class="contact-form">
          <h4>Kirim Pesan</h4>
          <form>
            <input class="input" type="text" name="name" placeholder="Nama">
            <input class="input" type="email" name="email" placeholder="Email">
            <input class="input" type="text" name="subject" placeholder="Subjek">
            <textarea class="input" name="message" placeholder="Tulis Pesan"></textarea>
            <button class="main-button icon-button pull-right">Kirim Pesan</button>
          </form>
        </div>
      </div>
      <!-- /contact form -->

      <!-- contact information -->
      <div class="col-md-5 col-md-offset-1">
        <h4>Kontak</h4>
        <ul class="contact-details">
          <li><i class="fa fa-envelope"></i>ptik@fkip.uns.ac.id</li>
          <li><i class="fa fa-phone"></i>(0271)648939</li>
          <li><i class="fa fa-map-marker"></i>Jl. Jend. Ahmad Yani 200A Pabelan, Kartasura, Sukoharjo 57100</li>
        </ul>

        <!-- contact map -->
        <div id="contact-map"></div>
        <!-- /contact map -->

      </div>
      <!-- contact information -->

    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</div>
<!-- /Contact -->
<?= $this->endSection() ?>