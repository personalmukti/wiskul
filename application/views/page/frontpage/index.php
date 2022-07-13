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
                      <h3>' . $value['mastertag'] . '</h3>
                      <h5>' . $value['tagline'] . '</h5>
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

    <section class="ftco-section ftco-category ftco-no-pt">
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6 order-md-last align-items-stretch d-flex">
                <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex">
                  <div class="text text-center">
                    <h2>Suasana Kuliner Nyaman</h2>
                    <p>Nikmati pengalaman kuliner terbaik dengan nuansa malam yang seru. Ajak semua keluarga dan sahabatmu untuk berkunjung ke Wisata Kuliner Kerkof.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?= base_url(); ?>assets/vege/images/1.png);">
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?= base_url(); ?>assets/vege/images/2.png);">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?= base_url(); ?>assets/vege/images/3.png);">
            </div>
            <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?= base_url(); ?>assets/vege/images/4.png);">
            </div>
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