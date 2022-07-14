<section class="ftco-section ftco-partner">
  <div class="container">
    <div class="row">
      <?php $gbr = $this->Gallery_model->getgalery(); ?>
      <?php foreach ($gbr->result_array as $i => $value): ?>
    		<div class="col-sm ftco-animate fadeInUp ftco-animated">
    			<a href="<?= base_url('assets/image/banner/sample.jpg'); ?>" class="partner"><img src="<?= base_url('assets/image/banner/sample.jpg'); ?>" class="img-fluid" alt="Colorlib Template"></a>
    		</div>
      <?php endforeach ?>
    </div>
  </div>
</section>