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
                <h3 class="card-title">Account Manager</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                      <!-- Profile Image -->
                      <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                          <?php foreach ($akun->result_array() as $x):

                          if ($x['id_role'] == 1) {
                            $role = 'Administrator';
                          } ?>
                            
                          
                          <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>assets/profil/<?php echo $x['profile_pict']; ?>" alt="User profile picture">
                          </div>

                          <h3 class="profile-username text-center"><?php echo $x['first_name']; ?> <?php echo $x['last_name']; ?></h3>

                          <p class="text-muted text-center"><?php echo $role; ?></p>

                          <?php endforeach ?>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <div class="col-md-8">
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Ganti Profil</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('auth/editProfil'); ?>" method="post" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="fname">Nama Depan:</label>
                              <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="lname">Nama Belakang:</label>
                              <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="password">Password:</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <input type="submit" name="submit" value="Update Profil" class="btn btn-primary">
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
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

  