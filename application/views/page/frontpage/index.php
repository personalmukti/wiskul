<section>
  <div class="dynamic-slider">
    <?php $banner = $this->Settings_model->getBanner(); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        foreach ($banner->result_array() as $key => $value) {
          $active = ($key == 0) ? 'active' : '';
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '" class="' . $active . '"></li>';
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        foreach ($banner->result_array() as $key => $value) {
          $active = ($key == 0) ? 'active' : '';
          echo '<div class="carousel-item ' . $active . '">
                    <img class="slider-foto" src="' . base_url() . 'assets/image/banner/' . $value['img'] . '">
                    <div class="carousel-caption d-none d-md-block">
                      <h3 class="mastertag">' . $value['mastertag'] . '</h3>
                      <h6 class="tagline">' . $value['tagline'] . '</h5>
                    </div>
                </div>';
        }
        ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="frammed-content">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <p>
              <img src="<?= base_url('assets/image/top-frame.png'); ?>">
              <span class="subheading">LIVE MUSIK HARI INI</span>
              <?php foreach ($jadwal->result_array() as $j) : ?>
                <h5><?= $j['hari']; ?></h5>
                <h2 class="mb-4"><?= $j['artis']; ?></h2>
              <?php endforeach ?>
              <img src="<?= base_url('assets/image/bottom-frame.png'); ?>">
            </p>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-partner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Gallery</span>
        <h2 class="mb-4">Wisata Kuliner Kerkof</h2>
        <p>Setiap momment yang berhasil kami abadikan</p>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
          <?php $gbr = $this->Gallery_model->getlimitgalery(); ?>
          <div class="col-sm ftco-animate fadeInUp ftco-animated">
            <?php foreach ($gbr->result_array() as $i): ?>
              <img src="<?= base_url(); ?>assets/image/galeri/<?= $i['img']; ?>" class="img-fluid" alt="<?= $i['judul']; ?>" width="250px" height="250px">
            <?php endforeach ?>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <hr>
        <p><a href="#" class="btn btn-info btn-sm">Semua Galeri</a></p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Mitra Kami</span>
        <h2 class="mb-4">Daftar Stand Wisata Kuliner Kerkof</h2>
        <p>Temukan pilihan jajanan kesukaan kamu di semua stand mitra kami.</p>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <?php foreach ($stand as $q) : ?>
        <div class="col-md-6 col-lg-3 ftco-animate text-center">
          <div class="product" style="height: 255px!important; vertical-align: middle!important;">
            <div class="img-prod" style="vertical-align: middle!important;">
              <a href="<?= base_url(); ?>home/details/<?php echo $q['id']; ?>"><br>
                <img class="img-fluid" src="<?= base_url(); ?>assets/vege/images/<?php echo $q['foto']; ?>" width="150px" height="150px" alt="<?php echo $q['nama_slot']; ?>">
                <div class="overlay"></div>
                <div class="text py-3 pb-4 px-3 text-center">
                  <div class="d-flex">
                    <div class="pricing">
                      <p class="price"><b><?php echo $q['nama_slot']; ?></b></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>