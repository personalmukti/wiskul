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
                <div class="row">
                  <div class="col-sm-10">
                    <h3 class="card-title">Barcode Utama</h3>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="button-print btn btn-primary btn-sm" onclick="window.print();return false;" />Cetak QR Code</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body print" style="background-image: url(<?= base_url(); ?>assets/image/background-qr.jpg); background-repeat: no-repeat; background-size: cover;">
                <div class="row">
                  <div class="col-md-12 text-center" >
                    <h3><b>Wisata Kuliner Kerkof</b></h3>
                    <h5>Tempat Jajannya Orang Garut</h5>
                  </div>
                </div>
                <div class="row" >
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <p><i><font size="2">wisatakulinerkerkof.com</font></i></p>
                        <hr>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <h3>Panduan:</h3>
                        <hr>
                        <ul>
                          <li>Buka Kamera/Google Lens di smartphone kamu.</li>
                          <li>Arahkan kamera ke barcode di samping.</li>
                          <li>Scan Barcode dan buka url.</li>
                        </ul>
                      </div>
                      <div class="col-md-6 text-center">
                        <img src="<?= base_url(); ?>assets/qr/QR-Utama.png" alt="QR Utama" width="400px" heigh="400px">
                      </div>
                      <div class="col-md-3 text-center">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <hr>
                        <p><i><font size="2">wisatakulinerkerkof.com</font></i></p>
                      </div>
                    </div>
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

  