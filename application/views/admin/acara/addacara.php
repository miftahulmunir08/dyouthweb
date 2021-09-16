<?php


?>


<div class="col-lg-12">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Acara Dyouth</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="<?= base_url('4dmin/DaftarAcara/addacara') ?>" method="post" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="acara">Nama Acara</label>
                        <input type="text" class="form-control" id="acara" name="acara" placeholder="acara" value="<?= set_value("acara") ?>">
                        <?= form_error('acara', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?= set_value('deskripsi') ?>">
                        <?= form_error('deskripsi', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pendaftaran">Pendaftaran</label>
                        <input type="text" class="form-control" id="pendaftaran" name="pendaftaran" placeholder="Pendaftaran" value="<?= set_value('Pendaftaran') ?>">
                        <?= form_error('pendaftaran', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="technicalmeeting">Technical&nbsp;meeting</label>
                        <input type="technicalmeeting" class="form-control" id="technicalmeeting" name="technicalmeeting" placeholder="technicalmeeting" value="<?= set_value('technicalmeeting') ?>">
                        <?= form_error('technicalmeeting', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pelaksanaan">Pelaksaaan&nbsp;Lomba</label>
                        <input type="pelaksanaan" class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder="pelaksanaan" value="<?= set_value('pelaksanaan') ?>">
                        <?= form_error('pelaksanaan', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="link1">link Selengkapnya</label>
                        <input type="text" class="form-control" id="link1" name="link1" placeholder="" value="<?= set_value('link1') ?>">
                        <?= form_error('link1', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="link2">link Pendaftaran</label>
                        <input type="text" class="form-control" id="link2" name="link2" placeholder="" value="<?= set_value('link2') ?>">
                        <?= form_error('link2', '<small class="text-danger">',  '</small>') ?>
                    </div>

                </div>

                <a href="<?= base_url('4dmin/DaftarAcara/') ?>" class="btn btn-danger float-right">Kembali</a>
                <button type="submit" class="btn btn-primary float-right mr-1">Tambah Acara</button>

            </form>
        </div>
    </div>
</div>
</div>