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
            <h6 class="m-0 font-weight-bold text-primary">Data Keranjang</h6>
        </div>
        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>produk&nbsp;</th>
                            <th>harga</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        // var_dump($lomba);
                        $no = 1;
                        foreach ($data_keranjang as $keranjang) : ?>


                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $keranjang["nama"] ?></td>
                                <td><?php echo $keranjang["harga"];
                                    $produk[] = $keranjang["harga"] ?></td>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        endforeach; ?>
                        <tr>
                            <td colspan="2">Jumlah</td>
                            <td><?= array_sum($produk) . " KPG";
                                $total = array_sum($produk); ?></td>
                        </tr>
                    </tbody>
                </table>
                <form action="<?= base_url('penjual/dashboard/checkout'); ?>" method="post">
                    <input type="text" value=<?= $total; ?> name="total">
                    <input type="text" value=<?= $kode; ?> name="kode">
                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?');" class="float-right btn btn-primary">Checkout</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->