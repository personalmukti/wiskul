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
        <!-- 2nd row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengaturan Umum</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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
                            <label for="tagline1">Tagline 1</label>
                            <input type="text" class="form-control" id="tagline1" name="tagline1" placeholder="Tagline 1">
                          </div>
                           <div class="form-group">
                            <label for="tagline2">Tagline 2</label>
                            <input type="text" class="form-control" id="tagline2" name="tagline2" placeholder="Tagline 2">
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
                        <?php foreach ($pengaturan->result() as $q): ?>
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
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- 2nd row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>