<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Wisata Kuliner Garut</a></li>
            <li class="breadcrumb-item active"><?= $pagename; ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3">
                  <h3 class="card-title">Pengaturan</h3>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Umum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Tagline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Live Musik</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Galeri</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Ubah Pengaturan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('storesetting'); ?>" method="post" enctype="Multipart/FormData">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="nama_website">Nama Website</label>
                              <input type="text" class="form-control" id="nama_website" name="nama_website" placeholder="Nama Website">
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label for="no_telp">Telepon/Whatsapp</label>
                              <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Telepon/Whatsapp">
                            </div>
                            <div class="form-group">
                              <label for="instagram">Instagram</label>
                              <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
                            </div>
                            <div class="form-group">
                              <label for="instagram">Tentang</label>
                              <textarea class="form-control" id="about" name="about" rows="3" placeholder="Tuliskan tentang Wisata Kuliner Kerkof"></textarea>
                            </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card card-info">
                        <div class="card-header">
                          <h3 class="card-title">Pengaturan saat ini:</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <?php foreach ($pengaturan->result() as $q) : ?>
                            <div class="card-body">
                              <div class="form-group">
                                <label for="webname">Nama Website : </label>
                                <p><?php echo $q->nama_website; ?></p>
                              </div>
                              <div class="form-group">
                                <label for="webmail">Email : </label>
                                <p for="webmail"><?php echo $q->email; ?></p>
                              </div>
                              <div class="form-group">
                                <label for="webphone">Telepon/Whatsapp</label>
                                <p><?php echo $q->no_telp; ?></p>
                              </div>
                              <div class="form-group">
                                <label for="webig">Instagram</label>
                                <p><?php echo $q->instagram; ?></p>
                              </div>
                              <div class="form-group">
                                <label for="instagram">Tentang</label>
                                <p><?php echo $q->about; ?></p>
                              </div>
                            <?php endforeach ?>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">

                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                  <div class="row">
                    <div class="col-md-12 text-right">
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#inputdata">
                        Tambah Banner
                      </button>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th style="text-align: center !important;">No.</th>
												<th style="text-align: center !important;">Background</th>
												<th style="text-align: center !important;">Mastertag</th>
												<th style="text-align: center !important;">Tagline</th>
												<th style="text-align: center !important;"><i class="nav-icon fas fa-cog"></i></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($banner->result_array() as $q) :
												
											?>
												<tr>
													<td style="text-align: center !important;"><?php echo $no; ?></td>
													<td align="center"><img src="<?= base_url(); ?>assets/image/banner/<?php echo $q['img']; ?>" width="250px" height="40px"></td>
													<td align="center"><?php echo $q['mastertag']; ?></td>
													<td align="center"><?php echo $q['tagline']; ?></td>
													<td style="text-align: center !important;">
                            <a href="javascript:;" data-id="<?php echo $q['id']; ?>" data-mastertag="<?php echo $q['mastertag'] ?>" data-tagline="<?php echo $q['tagline'] ?>" data-img="<?php echo $q['img']; ?>" data-toggle="modal" data-target="#edit-banner" title="Edit Banner" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url(); ?>editBanner/<?= $q['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
													</td>
												</tr>
											<?php $no++;
											endforeach ?>
										</tbody>
										<tfoot>
											<tr>
                      <th style="text-align: center !important;">No.</th>
												<th style="text-align: center !important;">Background</th>
												<th style="text-align: center !important;">Mastertag</th>
												<th style="text-align: center !important;">Tagline</th>
												<th style="text-align: center !important;"><i class="nav-icon fas fa-cog"></i></th>
											</tr>
										</tfoot>
									</table>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                  Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                  Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<div class="modal fade" id="edit-banner">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data Banner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php $this->view('single_success'); ?>
				<?php $this->view('single_error'); ?>
				<form action="<?= base_url('backdev/applyBanner'); ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="hidden" class="form-control form-control-sm" name="id" id="id" placeholder="ID">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="input-hari">Mastertag :</label>
								<input type="text" class="form-control form-control-sm" name="mastertag" id="mastertag" placeholder="Mastertag">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="input-hari">Tagline:</label>
								<input type="text" class="form-control form-control-sm" name="tagline" id="tagline" placeholder="Tagline">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="foto">Pilih Background Baru</label>
                <input type="file" class="form-control-file" id="fotobg" name="fotobg">
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer justify-content-between">
				<div class="col-md-12">
					<div class="row text-center">
						<div class=" col-12 col-md-6">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
						</div>
						<div class=" col-12 col-md-6">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="inputdata">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Banner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php $this->view('single_success'); ?>
				<?php $this->view('single_error'); ?>
				<form action="<?= base_url('backdev/saveBanner'); ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="hidden" class="form-control form-control-sm" name="id" id="id" placeholder="ID">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="input-hari">Mastertag :</label>
								<input type="text" class="form-control form-control-sm" name="mastertag" id="mastertag" placeholder="Mastertag">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="input-hari">Tagline:</label>
								<input type="text" class="form-control form-control-sm" name="tagline" id="tagline" placeholder="Tagline">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="foto">Pilih Background Baru</label>
                <input type="file" class="form-control-file" id="fotobg" name="fotobg">
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer justify-content-between">
				<div class="col-md-12">
					<div class="row text-center">
						<div class=" col-12 col-md-12">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>