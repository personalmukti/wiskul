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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Tambah data menu
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= base_url('backdev/saveMenu'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Pilih Stand:</label>
                                <select class="form-control select2 form-control-sm" name="stand_id" id="stand_id" style="width: 100%;">
                                    <option selected="selected" value="">Pilih Stand</option>
                                    <?php foreach ($dstand->result_array() as $x) : ?>
                                        <option value="<?php echo $x['id']; ?>"><?php echo $x['nama_slot']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="input-hari">Nama Menu:</label>
                                        <input type="text" class="form-control form-control-sm" name="nama_menu" id="nama_menu" placeholder="Nama Menu">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input-hari">Harga:</label>
                                        <input type="number" class="form-control form-control-sm" name="harga_menu" id="harga_menu" placeholder="Harga Menu">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi_menu" id="deskripsi_menu" placeholder="Masukan deskripsi menu"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gbr_menu" name="gbr_menu">
                                            <label class="custom-file-label" for="gbr_menu">Pilih file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
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