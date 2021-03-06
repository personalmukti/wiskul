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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="text-align: center !important;">No.</th>
                    <th style="text-align: center !important;">Nama Stand</th>
                    <th style="text-align: center !important;">Pemilik</th>
                    <th style="text-align: center !important;">Slogan</th>
                    <th style="text-align: center !important;"><i class="nav-icon fas fa-cog"></i></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($dstand->result_array() as $q):
                      if ($q['status']==0) {
                        $status = 'Tidak Aktif';
                      }elseif ($q['status']==1) {
                        $status = 'Aktif';
                      }
                      ?>
                    <tr>
                      <td style="text-align: center !important;"><?php echo $no; ?></td>
                      <td><?php echo $q['nama_slot']; ?></td>
                      <td style="text-align: center !important;"><?php echo $q['pemilik']; ?></td>
                      <td><?php echo $q['slogan']; ?></td>
                      <td style="text-align: center !important;">
                        <a 
                          href="<?= base_url(); ?>backdev/qrstandpreview/<?php echo $q['id']; ?>" 
                          title="Cetak Barcode" 
                          class="btn btn-info btn-sm"><i class="fas fa-print"></i></a>
                      </td>
                    </tr>
                    <?php $no++; endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th style="text-align: center !important;">No.</th>
                    <th style="text-align: center !important;">Nama Stand</th>
                    <th style="text-align: center !important;">Pemilik</th>
                    <th style="text-align: center !important;">Slogan</th>
                    <th style="text-align: center !important;"><i class="nav-icon fas fa-cog"></i></th>
                  </tr>
                  </tfoot>
                </table>
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

  <div class="modal fade" id="edit-data">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Data Stand</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php $this->view('single_success'); ?>
                  <?php $this->view('single_error'); ?>
                  <form action="<?= base_url('backdev/applyStand'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="hidden" class="form-control form-control-sm" name="id" id="id" placeholder="ID">
                        </div>
                      </div>
                    </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="input-hari">Nama Stand:</label>
                              <input type="text" class="form-control form-control-sm" name="nama_slot" id="nama_slot" placeholder="Nama Stand">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="input-hari">Nama Pemilik:</label>
                              <input type="text" class="form-control form-control-sm" name="pemilik" id="pemilik" placeholder="Nama Pemilik">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Slogan:</label>
                              <textarea class="form-control" name="slogan" id="slogan" rows="3" placeholder="Masukan Slogan"></textarea>
                            </div>
                          </div>
                        </div>
                        <hr>
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