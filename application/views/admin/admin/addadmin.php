<?php


?>


<div class="col-lg-12">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Registrasi Admin Dyouth</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="kode" name="username" placeholder="Username" value="<?= set_value("username") ?>">
                        <?= form_error('username', '<small class="text-danger">',  '</small>') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="namaagen" name="password" placeholder="Password" value="<?= set_value('password') ?>">
                        <?= form_error('password', '<small class="text-danger">',  '</small>') ?>
                    </div>

                </div>

                <a href="<?= base_url('admin/admin/') ?>" class="btn btn-danger float-right">Kembali</a>
                <button type="submit" class="btn btn-primary float-right mr-1">Register</button>

            </form>
        </div>
    </div>
</div>
</div>