<?php


?>


<div class="col-lg-12">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Kupon Dyouth</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">


            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="judul">Judul</label>
                        <textarea class="form-control" id="judul" name="judul"><?= set_value('judul') ?></textarea>
                        <?= form_error('judul', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="keterangan">keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan"><?= set_value('keterangan') ?></textarea>
                        <?= form_error('keterangan', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tatacara">tata cara</label>
                        <textarea class="form-control" id="namaagen" name="tatacara"><?= set_value('tatacara') ?></textarea>
                        <?= form_error('tatacara', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="gambar">Upload Kupon</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" rows="6">
                        <?= form_error('gambar', '<small class="text-danger">',  '</small>') ?>
                    </div>

                </div>

                <a href="<?= base_url('4dmin/daftarkupon') ?>" class="btn btn-danger float-right">Kembali</a>
                <button type="submit" class="btn btn-primary float-right mr-1">Tambah</button>

            </form>
        </div>
    </div>
</div>
</div>