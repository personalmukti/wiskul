	<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url(); ?>assets/vege/images/bg_1.jpg');">
	    <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center">
	            <div class="col-md-9 ftco-animate text-center">
	                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>">Beranda</a></span></p>

	                <h1 class="mb-0 bread">Detail Item</h1>
	            </div>
	        </div>
	    </div>
	</div>

	<section class="ftco-section">
	    <div class="container">
	        <div class="row">
	            <?php foreach ($item->result() as $q) : ?>
	                <div class="col-lg-3 mb-5 ftco-animate">
	                    <a href="<?= base_url(); ?>assets/image/menu/<?= $q->gbr_menu; ?>" class="image-popup">
	                        <img src="<?= base_url(); ?>assets/image/menu/<?= $q->gbr_menu; ?>" class="img-fluid" alt="<?= base_url(); ?>assets/image/menu/<?= $q->nama_menu; ?>"></a>
	                </div>
	                <div class="col-lg-9 product-details pl-md-5 ftco-animate">
	                    <h3><?= $q->nama_menu; ?></h3>
	                    <hr>
	                    </div> -->
	                    <p class="price"><span>Rp. <?= $q->harga_menu; ?>,-</span></p>
	                    <hr>
	                    <p><?= $q->deskripsi_menu; ?></p>
						<form>
							<input type="button" class="btn btn-info btn-xs" value="Kembali!" onclick="history.back()">
						</form>
	                </div>
	            <?php endforeach ?>
	        </div>
	    </div>
	</section>