<?php
if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="container">
                <div class="alert alert-<?= $this->session->flashdata('color'); ?> alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Data Admin <strong>Berhasil </strong><?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php
if ($this->session->flashdata('gagal')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="container">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?= $this->session->flashdata('gagal'); ?> Failed to Upload<strong> </strong>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Acara DYouth</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url() ?>4dmin/DaftarAcara/addacara" class="btn btn-primary mb-3 float-right"><i class="fa fa-plus"></i> Tambah Acara</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama&nbsp;Acara&nbsp;</th>
                            <th>Deskripsi</th>
                            <th>Pendaftaran</th>
                            <th>technical&nbsp;meeting</th>
                            <th>pelaksanaan&nbsp;lomba</th>
                            <th>Link&nbsp;Lengkap</th>
                            <th>Link&nbsp;Daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        // var_dump($lomba);
                        $no = 1;
                        foreach ($lomba as $acr) : ?>


                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $acr["acara"] ?></td>
                                <td><?= substr($acr["deksripsi"], 0, 40) . "...." ?></td>
                                <td><?= $acr["pendaftaran"] ?></td>
                                <td><?= $acr["technicalmeeting"] ?></td>
                                <td><?= $acr["pelaksanaan_lomba"] ?></td>
                                <td><?= $acr["link_lengkap"] ?></td>
                                <td><?= $acr["link_daftar"] ?></td>
                                <td>

                                    <a class="badge badge-info btn-sm mt-1" href="<?= base_url() ?>4dmin/Admin/updateAdmin/<?= $adm['id_admin']; ?>"> <i class="fas fa-pen"></i></a>
                                    <a class="badge badge-info btn-sm mt-1" href="<?= base_url() ?>4dmin/Admin/updateAdmin/<?= $adm['id_admin']; ?>"> <i class="fas fa-search"></i></a>
                                    <a class="badge badge-danger btn-sm mt-1" href="<?= base_url() ?>4dmin/admin/deleteAdmin/<?= $adm['id_admin']; ?>" onclick="return confirm('Are You Sure?');"> <i class="fas fa-trash"></i></a>

                                </td>


                                </td>
                            </tr>

                        <?php
                            $no++;
                        endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->