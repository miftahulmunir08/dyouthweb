<?php


?>


<div class="col-lg-12">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Kupon Dyouth</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                <input type="hidden" value="<?= $kupon["id_kupon"] ?>" name="id_kupon">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="judul">Judul</label>
                        <textarea class="form-control" id="judul" name="judul"><?= $kupon["judul"] ?></textarea>
                        <?= form_error('judul', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="keterangan">keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan"><?= $kupon["sub_arti"] ?></textarea>
                        <?= form_error('keterangan', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tatacara">tata cara</label>
                        <textarea class="form-control" id="namaagen" name="tatacara"><?= $kupon["tata_cara"] ?></textarea>
                        <?= form_error('tatacara', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="gambar">Upload Kupon</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" rows="6">
                        <?= form_error('gambar', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="gambar">Kupon</label>
                        <br>
                        <img width="300" height="300" src="<?= base_url('assets/img/kupon') ?>/<?= $kupon["gambar"] ?>">
                    </div>

                </div>

                <a href="<?= base_url('4dmin/daftarkupon') ?>" class="btn btn-danger float-right">Kembali</a>
                <button type="submit" class="btn btn-primary float-right mr-1">Update</button>

            </form>
        </div>
    </div>
</div>
</div>