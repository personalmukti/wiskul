    <footer class="ftco-footer ftco-section">
      <div class="container text-center">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <?php foreach ($webinfo->result_array() as $foot): ?>
              <h2 class="ftco-heading-2"><?= $foot['nama_website']; ?></h2>
              <p><?= $foot['metatext']; ?></p>
              <?php endforeach ?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-6 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="<?= base_url('our-location'); ?>" class="py-2 d-block">Denah Stand</a></li>
                <li><a href="<?= base_url('about-us'); ?>" class="py-2 d-block">Tentang Kami</a></li>
                <li><a href="<?= base_url('contact-us'); ?>" class="py-2 d-block">Kontak</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-6">
            	<h2 class="ftco-heading-2">Ingin berkunjung?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Merdeka, Haurpanggung, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0853-2044-8881</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="<?= base_url(); ?>" target="_blank">Wisata Kuliner Kerkof</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>