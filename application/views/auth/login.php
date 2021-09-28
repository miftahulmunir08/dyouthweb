<style>
    #image-preview {
        z-index: 1;
        position: absolute;
        height: 100px;
        margin-top: 30px;
        width: 50%;
        border: 0;
        text-decoration: none;
        outline: none
    }

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


    html {
        box-sizing: border-box;
        font-family: 'PT Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    body {
        background-color: #f3f3f3;
    }

    form {
        width: 100%;
        max-width: 700px;
        margin: 60px auto;
    }

    form input {
        font-size: 30px;
        padding: 0 20px;
        border: 2px solid #ccc;
        width: 100%;
        color: #666;
        line-height: 3;
        border-radius: 7px;
        font-family: 'PT Sans', sans-serif;
        font-weight: bold;
    }

    form input:focus {
        outline: 0;
    }

    form input.error {
        border-color: #ff0000;
    }

    form label.error {
        background-color: #ff0000;
        color: #fff;
        padding: 6px;
        font-size: 11px;
    }

    label {
        color: #999;
        display: block;
        margin-bottom: 10px;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 0.05em
    }

    form small {
        color: #888;
        font-size: 1em;
        margin-top: 10px;
        display: block;

    }
</style>

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