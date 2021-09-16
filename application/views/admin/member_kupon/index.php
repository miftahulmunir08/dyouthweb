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
            <h6 class="m-0 font-weight-bold text-primary">Data Member Kupon DYouth</h6>
        </div>
        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>user&nbsp;</th>
                            <th>kupon</th>
                            <th>tenant</th>
                            <th>nama tenant</th>
                            <th>nominal</th>
                            <th>foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        // var_dump($admin);
                        $no = 1;
                        foreach ($member as $mbr) : ?>


                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $mbr["id_user"] ?></td>
                                <td><?= $mbr["id_kupon"] ?></td>
                                <td><?= $mbr["tenant"] ?></td>
                                <td><?= $mbr["nama_tenant"] ?></td>
                                <td><?= $mbr["nominal"] ?></td>
                                <td><img src="<?= base_url('assets/img/member_kupon/') . $mbr["foto"] ?>" width="100" height="100"></td>
                                <td>
                                    <!-- <a class="btn btn-warning btn-sm mt-1" href="<?= base_url() ?>admin/detailagenperseorangan/<?= $agen['id_perorangan']; ?>"> <i class="fas fa-search"></i> Detail</a> -->
                                    <a class="btn btn-info btn-sm mt-1" href="<?= base_url() ?>4dmin/DaftarKupon/updateKupon/<?= $mbr['id_kupon']; ?>"> <i class="fas fa-pen"></i> Edit</a>
                                    <a class="btn btn-danger btn-sm mt-1" href="<?= base_url() ?>4dmin/DaftarKupon/deleteKupon/<?= $mbr['id_kupon']; ?>" onclick="return confirm('Are You Sure?');"> <i class="fas fa-trash"></i> Hapus</a>
                                    <!-- <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-pen"></i></a>
                <a class="btn btn-danger btn-circle mt-1" href="<?= base_url() ?>saved/deletesaved/<?= $save['id_saved']; ?>" onclick="return confirm('Are You Sure?');"> <i class="fas fa-trash"></i></a> -->
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