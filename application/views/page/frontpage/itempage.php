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
	                    <a href="<?= base_url(); ?>assets/image/<?= $q->gbr_menu; ?>" class="image-popup">
	                        <img src="<?= base_url(); ?>assets/image/<?= $q->gbr_menu; ?>" class="img-fluid" alt="<?= base_url(); ?>assets/image/<?= $q->nama_menu; ?>"></a>
	                </div>
	                <div class="col-lg-9 product-details pl-md-5 ftco-animate">
	                    <h3><?= $q->nama_menu; ?></h3>
	                    <hr>
	                    <!--<div class="rating d-flex">
	                        <p class="text-left mr-4">
	                            <a href="#" class="mr-2">5.0</a>
	                            <a href="#"><span class="ion-ios-star-outline"></span></a>
	                            <a href="#"><span class="ion-ios-star-outline"></span></a>
	                            <a href="#"><span class="ion-ios-star-outline"></span></a>
	                            <a href="#"><span class="ion-ios-star-outline"></span></a>
	                            <a href="#"><span class="ion-ios-star-outline"></span></a>
	                        </p>
	                        <p class="text-left mr-4">
	                            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
	                        </p>
	                        <p class="text-left">
	                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
	                        </p>
	                    </div> -->
	                    <p class="price"><span>Rp. <?= $q->harga_menu; ?>,-</span></p>
	                    <hr>
	                    <p><?= $q->deskripsi_menu; ?></p>
	                    <!--<div class="row mt-4">
	                        <div class="col-md-6">
	                            <div class="form-group d-flex">
	                                <div class="select-wrap">
	                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                                    <select name="" id="" class="form-control">
	                                        <option value="">Small</option>
	                                        <option value="">Medium</option>
	                                        <option value="">Large</option>
	                                        <option value="">Extra Large</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="w-100"></div>
	                        <div class="input-group col-md-6 d-flex mb-3">
	                            <span class="input-group-btn mr-2">
	                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
	                                    <i class="ion-ios-remove"></i>
	                                </button>
	                            </span>
	                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	                            <span class="input-group-btn ml-2">
	                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                                    <i class="ion-ios-add"></i>
	                                </button>
	                            </span>
	                        </div>
	                        <div class="w-100"></div>
	                        <div class="col-md-12">
	                            <p style="color: #000;">600 kg available</p>
	                        </div>
	                    </div> -->
	                </div>
	            <?php endforeach ?>
	        </div>
	    </div>
	</section>