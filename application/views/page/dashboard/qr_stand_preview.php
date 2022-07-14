    <section class="content">
      <hr>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-10">
                    <h4>Barcode Stand</h4>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="button-print btn btn-primary btn-sm" onclick="window.print();return false;" />Cetak QR Code</button>
                    <script>
                        document.write('<a class="backlink btn btn-info btn-sm" href="' + document.referrer + '">Kembali</a>');
                    </script>
                  </div>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body print"  style="background-image: url(<?= base_url(); ?>assets/image/background-qr.jpg); background-repeat: no-repeat; background-size: cover;">
                <?php foreach ($dstand->result_array() as $qr): ?>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <hr>
                    <h3><?php echo $qr['nama_slot']?></h3>
                    Owner: <h5><?php echo $qr['pemilik']?></h5>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="<?= base_url(); ?>assets/qr/<?php echo $qr['qrcode']?>" alt="QR Code <?php echo $qr['nama_slot']?>" width="400px" heigh="400px">

                  </div>
                  <div class="col-md-3">
                    
                  </div>
                </div>
                <?php endforeach ?>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    <hr>
                    Provided by : Wisata Kuliner Kerkof.
                    <hr>
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
    </pre>