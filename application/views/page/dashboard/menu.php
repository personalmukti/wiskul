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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Stand Wisata Kuliner Garut</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-10">

                </div>
                <div class="col-md-2">
                  <p align="center">
                    <a href="<?= base_url('add-menu'); ?>" class="btn btn-info btn-sm">Tambah Menu</a>
                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-data">
                      Tambah Menu
                    </button> -->
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-12">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="text-align: center !important; width: 5% !important;">No.</th>
                        <th style="text-align: center !important; width: 10% !important;">Stand</th>
                        <th style="text-align: center !important; width: 10% !important;">Menu</th>
                        <th style="text-align: center !important; width: 15% !important;">Gambar</th>
                        <th style="text-align: center !important; width: 10% !important;">Harga</th>
                        <th style="text-align: center !important; width: 40% !important;">Deskripsi</th>
                        <th style="text-align: center !important; width: 10% !important;"><i class="nav-icon fas fa-cog"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($dmenu->result_array() as $q) :
                      ?>

                        <tr>
                          <td style="text-align: center !important;"><?php echo $no; ?></td>
                          <td><?php echo $q['nama_slot']; ?></td>
                          <td><?php echo $q['nama_menu']; ?></td>
                          <td style="text-align: center !important;"><img style="max-width: 150px; max-height: 100px;" src="<?= base_url(); ?>assets/image/<?php echo $q['gbr_menu']; ?>" alt=""> </td>
                          <td>Rp. <?php echo $q['harga_menu']; ?>,00</td>
                          <td style="text-align: justify !important;"><?php echo $q['deskripsi_menu']; ?></td>
                          <td style="text-align: center !important;">
                            <a href="<?= base_url(); ?>backdev/updatemenu/<?php echo $q['id']; ?>" title="Hapus Menu" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url(); ?>backdev/deleteMenu/<?php echo $q['id']; ?>" title="Hapus Menu" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i>
                          </td>
                        </tr>

                      <?php $no++;
                      endforeach ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th style="text-align: center !important;">No.</th>
                        <th style="text-align: center !important;">Stand</th>
                        <th style="text-align: center !important;">Menu</th>
                        <th style="text-align: center !important;">Gambar</th>
                        <th style="text-align: center !important;">Harga</th>
                        <th style="text-align: center !important;">Deskripsi</th>
                        <th style="text-align: center !important;"><i class="nav-icon fas fa-cog"></i></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
      <!-- 2nd row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>



<!-- /.MODAL EDIT MENU -->
<div class="modal fade" id="edit-menu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $this->view('single_success'); ?>
        <?php $this->view('single_error'); ?>
        <form action="<?= base_url('backdev/editMenu'); ?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="hidden" class="form-control form-control-sm" name="id" id="id" placeholder="ID">
                <input type="hidden" class="form-control form-control-sm" name="gbr_menu" id="gbr_menu" placeholder="gbr">
                <label for="input-hari">Nama Menu:</label>
                <input type="text" class="form-control form-control-sm" name="nama_menu" id="nama_menu" placeholder="Nama Menu">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="input-hari">Harga:</label>
                <input type="number" class="form-control form-control-sm" name="harga_menu" id="harga_menu" placeholder="Harga Menu">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <!-- textarea -->
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi_menu" id="deskripsi_menu" rows="3" placeholder="Masukan deskripsi menu"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Untuk gambar wajib mengganti dengan gambar baru, atau upload ulang gambar lama.
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="gbr_menu_baru" name="gbr_menu_baru">
                  <label class="custom-file-label" for="gbr_menu_baru">Pilih file</label>
                </div>
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
<!-- /.MODAL EDIT MENU -->