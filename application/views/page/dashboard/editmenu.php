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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit data menu
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= base_url('backdev/editMenu'); ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($dmenu->result_array() as $q) : ?>
                                <div class=" row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-sm" name="id" id="id" value="<?php echo $q['id']; ?>">
                                            <input type="hidden" class="form-control form-control-sm" name="fotolama" id="fotolama" value="<?php echo $q['gbr_menu']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input-hari">Nama Menu:</label>
                                            <input type="text" class="form-control form-control-sm" name="nama_menu" id="nama_menu" value="<?= $q['nama_menu']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input-hari">Harga:</label>
                                            <input type="number" class="form-control form-control-sm" name="harga_menu" id="harga_menu" value="<?= $q['harga_menu']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi_menu" id="deskripsi_menu"><?= $q['deskripsi_menu']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Gambar Lama</label>
                                            <img id="fotolama" src="<?= base_url(); ?>assets/image/menu/<?= $q['gbr_menu'] ?>" alt="<?= $q['nama_menu']; ?>" width="100px" height="100px" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Gambar Baru</label>
                                            <img id="fotobaru" name="fotobaru" src="<?= base_url(); ?>assets/image/default.png" width="100px" height="100px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" id="gbr_menu_baru" name="gbr_menu_baru" onchange="readURL(this);" class="custom-file-input">
                                                <label class="custom-file-label" for="gbr_menu">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        * Pengetikan deskripsi usahakan sesuai dengan bagaimana deskripsi ingin ditampilkan.
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>