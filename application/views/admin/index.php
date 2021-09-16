<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center mt-2">
                                    <img class="rounded-circle" src="<?= base_url() ?>assets/img/dyouth.png" width="150">
                                    <?= $this->session->flashdata('message') ?>
                                </div>
                                <form class="user mt-3" method="post" action="<?= BASE_URL('4dmin/Auth/login') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" placeholder="Enter Username" name="username">
                                        <?= form_error('username', '<small class="text-danger pl-3">',  '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">',  '</small>') ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <!-- <a href="<?= base_url() ?>admin" class="btn btn-warning btn-user btn-block">Login</a> -->
                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>