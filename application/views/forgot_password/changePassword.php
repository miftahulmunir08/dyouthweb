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
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card card__form">
                    <div class="card-body">
                        <h2 class="font-weight-bold">Create a new password</h2>
                        <p>Not a member? <a href="<?= base_url('Auth/Register') ?>">Register</a></p>
                        <form action="<?= base_url("Forgot_password/changePassword") ?>" id="form" autocomplete="off" method="post">
                            <div class="form-group">
                                <span>New password</span>
                                <input type="password" class="form__login" name="password1">
                                <?= form_error('password1', '<small class="text-danger text-danger">',  '</small>') ?>
                            </div>
                            <div class="form-group">
                                <span>Confirm new password</span>
                                <input type="password" class="form__login" name="password2">
                                <?= form_error('password2', '<small class="text-danger text-danger">',  '</small>') ?>
                            </div>
                            <p>
                                <a href="<?= base_url('forgot_password') ?>" class="forgot__link">Forgot your password?</a>
                            </p>
                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"> <i class="loading-icon fa fa-spinner fa-spin hide"></i> <span class="btn-txt">Reset
                                    password</span></button>


                        </form>
                    </div>
                </div>