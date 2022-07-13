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
                  <a class="nav-link active" id="tab-umum" data-toggle="pill" href="#tab-page-umum" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Umum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-tagline" data-toggle="pill" href="#tab-page-tagline" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Tagline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-musik" data-toggle="pill" href="#tab-page-musik" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Live Musik</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-galeri" data-toggle="pill" href="#tab-page-galeri" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Galeri</a>
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
                  Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                </div>
                <div class="tab-pane fade" id="tab-page-musik" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                  Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                </div>
                <div class="tab-pane fade" id="tab-page-galeri" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
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