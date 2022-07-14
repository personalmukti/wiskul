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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $cstand; ?></h3>

              <p>Stand</p>
            </div>
            <div class="icon">
              <i class="fas fa-fw fa-home"></i>
            </div>
            <a href="<?= base_url('stand-manager'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $cmenu; ?></h3>

              <p>Menu</p>
            </div>
            <div class="icon">
              <i class="fas fa-fw fa-th"></i>
            </div>
            <a href="<?= base_url('menu-manager'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $cakun; ?></h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="fas fa-fw fa-users"></i>
            </div>
            <a href="<?= base_url('account-manager'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- 2nd row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Panduan Penggunaan Dashboard Admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
              <div id="accordion">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4 class="card-title w-100">
                      <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                        Manajemen Stand
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                      <p align="justify">
                        Pada menu ini, admin dapat melakukan manajemen stand di Wisata Kuliner Kerkof. Dalam hal ini admin dapat melakukan perubahan informasi slot stand yang berada di area Wisata Kuliner Kerkof. Menu ini digunakan untuk merubah kepemilikan slot stand, apabila kepemilikan slot stand berubah seperti berganti nama stand, berganti slogan, maupun berganti pemilik, serta tanggal masuk pemilik baru di slot stand yang tersedia.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card card-danger">
                  <div class="card-header">
                    <h4 class="card-title w-100">
                      <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                        Manajemen Menu
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      <p align="justify">
                        Menu ini menyediakan fungsi untuk mengelola daftar menu masing-masing stand. Pada menu ini terdapat fungsi untuk menambah, mengedit, maupun menghapus data menu masing-masing stand. Untuk menambah menu baru cukup klik tombol tambah dan mengisi form entry yang muncul. Admin harus memilih stand mana yang akan ditambah menu baru, kemudian menyimpan data setelah seluruh field terisi. Untuk mengedit atau menghapus data menu, silahkan memilih menu mana yang akan dihapus, maka status menu pada halaman stand juga akan berubah atau terhapus secara otomatis.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h4 class="card-title w-100">
                      <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                        Profil
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      <p align="justify">
                        Menu ini menyediakan fungsi untuk mengelola dinformasi pengguna yaitu admin. Menu ini bisa digunakan untuk mengganti foto profil admin maupun mengganti password masuk admin. Disarankan untuk mengganti password default bawaan dengan password admin yang baru, serta mengganti password secara berkala untuk lebih mengamankan info login. Sebaiknya tidak menyimpan informasi login pada web browser untuk menghindari pencurian data.
                      </p>
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

<!-- Modal -->
<div id="changelogmodal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Changelogs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>Update versi berhasil!</b>
          <br>
          Aplikasi saat ini berada pada <b><i>Versi 1.0.1 Patch A</i></b>.
          <br>
          Berikut ini adalah beberapa perubahan yang ditambahkan pada aplikasi Webmaster Wiskul:
        <ol>
          <i>
            <b>
              <li>Penambahan fitur Reset Semua Stand pada halaman Manajemen Stand.<span class="badge badge-primary">Baru</span></li>
              <li>Pada proses Edit Stand ditambahkan fitur upload foto stand untuk masing-masing stand.<span class="badge badge-success">Update</span></li>
              <li>Update fitur menu manager dengan merubah form input dan edit data menjadi lebih interaktif.<span class="badge badge-success">Update</span></li>
              <li>Pada proses edit menu perubahan gambar lama dihapus dan diganti gambar baru sehingga tidak menjadi sampah pada penyimpanan.<span class="badge badge-primary">Baru</span></li>
              <li>Pada halaman publik sekarang setiap item menu bisa dilihat detail itemnya.<span class="badge badge-primary">Baru</span></li>
              <li>Penambahan logo pada Navbar publik dan dashboard.<span class="badge badge-primary">Baru</span></li>
              <li>Optimalisasi bugs aplikasi sudah diselesaikan.<span class="badge badge-success">Update</span></li>
            </b>
          </i>
        </ol>
        <p>Terdapat beberapa proses updating yang ditambahkan, selain itu terdapat beberapa fitur baru yang diterapkan pada website Wisata Kuliner Kerkof untuk meningkatkan performa dan penghematan penyimpanan. Selain itu beberapa bugs yang terdapat dalam aplikasi sudah diperbaiki dengan Patch A.
          <br><br>
          Berikut ini konten yang deterapkan pada Patch A:
        </p>
        <ul>
          <li>Keamanan Password.</li>
          <li>Penyelesaian Error Updating Data.</li>
          <li>Penyelesaian Update Error Memory Exhausted Menu Manager.</li>
          <li>Penyelesaian Error load gambar Frontend.</li>
          <li>Peningkatan efektifitas Protokol Penyimpanan.</li>
          <li>Penambahan Mekanisme Keamanan Terenkapsulasi.</li>
        </ul>
        <p>Untuk informasi lebih lengkap silahkan mendownload file berikut ini : <a href="<?= base_url('assets/changelog/CHANGELOG.txt'); ?>">Changelog</a></p>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>