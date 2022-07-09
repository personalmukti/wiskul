	<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url(); ?>assets/vege/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url(); ?>">Beranda</a></span></p>
          	<?php foreach ($stands as $stand): ?>
            <h1 class="mb-0 bread">Menu Stand <?= $stand['nama_slot']; ?></h1>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<?php foreach ($menus as $menu): ?>
    				<div class="col-md-6 col-lg-3 ftco-animate">
	    				<div class="product">
	    					<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/image/<?= $menu['gbr_menu']; ?>" alt="Gambar Menu">
	    					</a>
	    					<div class="text py-3 pb-4 px-3 text-center">
	    						<h3><a href="#"><?= $menu['nama_menu']; ?></a></h3>
	    						<div class="d-flex">
	    							<div class="pricing">
			    						<p class="price"><span class="price-sale">Rp. <?= $menu['harga_menu']; ?>,-</span></p>
			    					</div>
		    					</div>
	    					</div>
	    				</div>
	    			</div>
    			<?php endforeach ?>
    		</div>
    	</div>
    </section>