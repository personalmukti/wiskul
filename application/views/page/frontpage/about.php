	<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url(); ?>assets/vege/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>">Beranda</a></span></p>
            <h1 class="mb-0 bread">Tentang Kami</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-3 p-md-5 img img-2 d-flex justify-content-center align-items-center">
						<img src="<?= base_url(); ?>assets/image/logowk.png" width="300px" height="300px">
					</div>
					<div class="col-md-9 py-5 wrap-about pb-md-5 ftco-animate">
						<div class="heading-section-bold mb-4 mt-md-5">
							<?php foreach ($konfig as $y): ?>
							<div class="ml-md-0">
								<h2 class="mb-4"><?= $y['nama_website']; ?></h2>
							</div>
						</div>
						<div class="pb-md-5">
							
								<p><?= $y['about']; ?></p>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</section>