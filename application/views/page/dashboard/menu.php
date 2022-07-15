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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Stand Wisata Kuliner Kerkof</h3>
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
                          <td style="text-align: center !important;"><img style="max-width: 150px; max-height: 100px;" src="<?= base_url(); ?>assets/image/menu/<?php echo $q['gbr_menu']; ?>" alt=""> </td>
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