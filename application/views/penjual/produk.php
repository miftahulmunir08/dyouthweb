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
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-body">

            <div class="row">

                <div class="col-sm-3">
                    <div class="card" style="">
                        <img class="card-img-top" src="http://3.bp.blogspot.com/_JPxbgIbEnrU/TUYPHUAoQ8I/AAAAAAAAAkQ/Fkv_2Kx-Ibg/s1600/kopi.png" alt="Card image">
                        <div class="card-body">
                            <form method="post" action="<?= base_url('penjual/dashboard/tambahkeranjang'); ?>">
                                <h4 class="card-title">Kopi</h4>
                                <p class="card-text">1 KPG</p>
                                <input type="hidden" value="1" name="id">
                                <input type="hidden" value="1" name="harga">
                                <p class="card-text">Kopi Banyuwangi cak tami</p>
                                <input type="submit" class="btn btn-primary" value="tambah" onclick="return confirm('Apakah Anda Yakin?');">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://pngimage.net/wp-content/uploads/2018/06/roti-bakar-png-.png" alt="Card image">
                        <div class="card-body">
                            <form method="post" action="<?= base_url('penjual/dashboard/tambahkeranjang'); ?>">
                                <h4 class="card-title">Roti Bakar</h4>
                                <p class="card-text">2 KPG</p>
                                <input type="hidden" value="2" name="id">
                                <input type="hidden" value="2" name="harga">
                                <p class="card-text">Roti bakar cak tami</p>
                                <input type="submit" class="btn btn-primary" value="tambah" onclick="return confirm('Apakah Anda Yakin?');">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->