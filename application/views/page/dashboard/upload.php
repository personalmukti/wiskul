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
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Upload Gambar</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url(); ?>Backdev/uploadFoto" method="POST" enctype="multipart/form-data">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" id="foto" name="foto" class="custom-file-input">
                                            <label class="custom-file-label" for="foto">Pilih file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="input-hari">Judul Moment:</label>
                                        <input type="text" class="form-control form-control-sm" name="judul" id="judul">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            * Semua gambar usahakan berada pada dimensi yang sama karena setelah uploading ukuran dimensi gambar akan mengalami penyesuaian seimbang 1000px x 750px.
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- 2nd row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Koleksi Gambar</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($gbr->result_array() as $i) : ?>
                                    
                                    <div class="card col-sm-2 ">
                                        <div class="card-body">
                                            <div class="justify-content-center">
                                                <a href="<?= base_url(); ?>assets/image/galeri/<?= $i['img']; ?>" data-toggle="lightbox" data-title="<?= $i['judul']; ?>" data-gallery="gallery">
                                                    <img src="<?= base_url(); ?>assets/image/galeri/<?= $i['img']; ?>" class="img-fluid mb-2" alt="<?= $i['judul']; ?>">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="container justify-content-center">
                                                    <a class="btn btn-danger btn-xs" href="<?= base_url(); ?>Backdev/deleteimg/<?= $i['id']; ?>">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- 2nd row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>