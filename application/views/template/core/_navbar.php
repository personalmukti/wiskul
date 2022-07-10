	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<?php foreach ($webinfo->result_array() as $topnav) : ?>
				<a class="navbar-brand" href="<?= base_url(); ?>">
					<img src="<?= base_url(); ?>assets/image/logowk.png" width="30" height="30" class="d-inline-block align-top">
					<?= $topnav['nama_website']; ?>
				</a>
			<?php endforeach ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?= base_url(); ?>" class="nav-link">Beranda</a></li>
					<li class="nav-item active"><a href="<?= base_url('about-us'); ?>" class="nav-link">Tentang Kami</a></li>
					<li class="nav-item"><a href="<?= base_url('contact-us'); ?>" class="nav-link">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>