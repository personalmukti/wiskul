	<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url(); ?>assets/vege/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>">Beranda</a></span></p>
            <h1 class="mb-0 bread">Hubungi Kami</h1>
          </div>
        </div>
      </div>
    </div>
    <?php foreach ($webinfo->result_array() as $q): ?>
    	
    <?php endforeach ?>
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Alamat:</span><br> <?= $q['alamat']; ?></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Telepon:</span><br> <?= $q['no_telp']; ?></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span><br> <?= $q['email']; ?></p>
	          </div>
          </div>
        </div>
      </div>
    </section>