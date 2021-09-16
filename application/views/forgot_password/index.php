<style>
    .button {
        background-color: #008cba;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button:disabled {
        opacity: 0.5;
    }

    .hide {
        display: none;
    }
</style>

<body class="bg-light">


    <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-11 col-md-8 col-lg-6">
                <div class="text-center mb-4">
                    <img src="<?= base_url('assets/') ?>img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">
                        <?php
                        if ($this->session->flashdata('flash')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="alert alert-<?= $this->session->flashdata('color'); ?> alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong></strong><?= $this->session->flashdata('flash'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <h6 class="font-weight-bold">Lupa Password</h6>
                        <p>Sudah memiliki akun? <a href="<?= base_url('Auth/login') ?>">Masuk </a></p>
                        <form action="" id="form" autocomplete="off" method="post">
                            <div class="form-group">
                                <span>Email</span>
                                <input type="text" class="form__login" name="email">
                                <?= form_error('email', '<small class="text-danger text-danger">',  '</small>') ?>
                            </div>
                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"> <i class="loading-icon fa fa-spinner fa-spin hide"></i> <span class="btn-txt">Buat Password Baru</span></button>
                            <!-- <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"> <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                                <span class="btn-txt">Register</span></button> -->
                        </form>
                    </div>
                </div>
            