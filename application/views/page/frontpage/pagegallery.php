    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<?php foreach ($gbr->result_array() as $g) : ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="<?= base_url(); ?>assets/image/galeri/<?= $g['img']; ?>" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/image/galeri/<?= $g['img']; ?>" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?= $g['judul']; ?></a></h3>
    					</div>
    				</div>
    			</div>
				<?php endforeach ?>
    		</div>
    	<!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div> -->
        </div>
    	</div>
    </section>

		