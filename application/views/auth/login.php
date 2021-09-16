<body class="bg-light">

    <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-11 col-md-8 col-lg-6">
                <div class="text-center mb-4">
                    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-grid.min.css">
                    <img src="<?= base_url('assets/') ?>img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">
                        <?= $this->session->flashdata('message') ?>
                        <h4 class="font-weight-bold">Masuk</h4>
                        <p>Belum mendaftar? <a href="<?= base_url('Auth/register') ?>">Daftar</a></p>
                        <form action="" id="form" method="post" action="<?= base_url('Auth/login'); ?>" autocomplete="off">
                            <div class="form-group">
                                <span>Email</span>
                                <input type="text" class="form__login" id="email" name="email">
                                <?= form_error('email', '<small class="text-danger">',  '</small>') ?>
                            </div>
                            <div class="form-group">
                                <span>Password</span>
                                <input type="password" class="form__login" id="password" name="password">
                                <?= form_error('password', '<small class="text-danger">',  '</small>') ?>
                            </div>
                            <p>
                                <a href="<?= base_url('forgot_password/'); ?>" class="forgot__link">Lupa password ?</a>
                            </p>
                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"> <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                                <span class="btn-txt">Masuk</span></button>

                        </form>
                    </div>
                </div>