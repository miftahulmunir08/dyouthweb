<?php


?>


<div class="col-lg-12">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Acara Dyouth</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="acara">Nama Acara</label>
                        <input type="text" class="form-control" id="acara" name="acara" placeholder="acara" value="<?= set_value("acara") ?>">
                        <?= form_error('acara', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Deskripsi">Deskripsi</label>
                        <input type="Deskripsi" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Deskripsi" value="<?= set_value('Deskripsi') ?>">
                        <?= form_error('Deskripsi', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="link1">link1</label>
                        <input type="link1" class="form-control" id="link1" name="link1" placeholder="link1" value="<?= set_value('link1') ?>">
                        <?= form_error('link1', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="link2">link2</label>
                        <input type="link2" class="form-control" id="link2" name="link2" placeholder="link2" value="<?= set_value('link2') ?>">
                        <?= form_error('link2', '<small class="text-danger">',  '</small>') ?>
                    </div>

                </div>

                <a href="<?= base_url('4dmin/DaftarAcara/') ?>" class="btn btn-danger float-right">Kembali</a>
                <button type="submit" class="btn btn-primary float-right mr-1">Update Acara</button>

            </form>
        </div>
    </div>
</div>
</div>