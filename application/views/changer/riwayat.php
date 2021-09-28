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
            <h6 class="m-0 font-weight-bold text-primary">Data Saldo Kepeng</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id user&nbsp;</th>
                            <th>jumlah</th>
                            <th>kategori</th>
                            <th>tanggal</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        // var_dump($admin);
                        $no = 1;
                        foreach ($riwayat as $rwt) : ?>


                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $rwt["id_user"] ?></td>
                                <td><?= $rwt["jumlah"] ?></td>
                                <td><?= $rwt["kategori"] ?></td>
                                <td><?= $rwt["tanggal"] ?></td>
                                <td><?= $rwt["status"] ?></td>
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