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
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Wisata Kuliner Kerkof</a></li>
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
                  <a class="nav-link active" id="tab-umum" data-toggle="pill" href="#tab-page-umum" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Umum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-tagline" data-toggle="pill" href="#tab-page-tagline" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Tagline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-musik" data-toggle="pill" href="#tab-page-musik" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Live Musik</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="tab-page-umum" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
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

                <div class="tab-pane fade" id="tab-page-tagline" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
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
                            <th width="10%" style="text-align: center !important;"><i class="nav-icon fas fa-cog"></i></th>
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
                                <a href="<?= base_url(); ?>Backdev/rmBanner/<?= $q['id']; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
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
                <div class="tab-pane fade" id="tab-page-musik" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                  <div class="row">
                    <div class="col-md-12">
                    <form action="<?= base_url('backdev/setJadwal'); ?>" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="input-hari">Pilih hari :</label>
                            <select class="form-control form-control-sm" id="hari" name="hari" aria-label="Default select example">
                              <option selected>== Tidak dipilih ==</option>
                              <option value="Senin">Senin</option>
                              <option value="Selasa">Selasa</option>
                              <option value="Rabu">Rabu</option>
                              <option value="Kamis">Kamis</option>
                              <option value="Jumat">Jumat</option>
                              <option value="Sabtu">Sabtu</option>
                              <option value="Minggu">Minggu</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="input-hari">Pilih Artis:</label>
                            <select class="form-control form-control-sm" id="artis" name="artis" aria-label="Default select example">
                              <option selected="selected" value="">== Tidak dipilih ==</option>
                              <?php foreach ($artis->result_array() as $k) : ?>
                                <option value="<?= $k['nama_artis']; ?>"><?= $k['nama_artis']; ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <div class="col-md-12">
                      <div class="row text-center">
                        <div class=" col-12 col-md-12">
                          <button type="submit" class="btn btn-primary">Terapkan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  <hr>
                  
                    </div>
                    <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Tambah Artis</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                  <form action="<?= base_url('backdev/saveArtis'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="input-hari">Nama Artis:</label>
                                        <input type="text" class="form-control form-control-sm" name="nama_artis" id="nama_artis" placeholder="Nama Artis">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
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