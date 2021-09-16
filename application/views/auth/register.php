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
    <!-- 
    <div class="container-fluid bg-light pt-5">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-11 col-md-8 col-lg-6">
                <div class="text-center mb-4">
                    <img src="assets/img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Register</h4>
                        <p>Sudah memiliki akun? <a href="<?= base_url('Auth/login') ?>">Masuk</a></p>
                        <form action="" method="post" action="<?= base_url('Auth/register') ?>" autocomplete="off" enctype="multipart/form-data"> -->



    <div class="container-fluid bg-light pt-5">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-11 col-md-8 col-lg-6">
                <div class="text-center mb-4">
                    <img src="<?= base_url('assets/') ?>img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">
                        <?php
                        if ($this->session->flashdata('flash')) :
                        ?>

                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?= $this->session->flashdata('flash'); ?><strong> </strong>
                            </div>

                        <?php endif; ?>
                        <h4 class="font-weight-bold">Register</h4>
                        <p>Sudah memiliki akun? <a href="<?= base_url('Auth/login') ?>">Masuk</a></p>
                        <form action="" id="form" method="post" action="<?= base_url('Auth/register') ?>" id="myForm" autocomplete="off" enctype="multipart/form-data">
                            <?php
                            if ($this->session->flashdata('error')) :
                            ?>

                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?= $this->session->flashdata('error'); ?> Errror to Verification Just A minute<strong> </strong>
                                    </div>
                                </div>

                            <?php endif; ?>

                            <div class="form-group">
                                <span>Nama<span style="font-size: 7pt;font-weight: 900;color: blue;"> (* sesuai identitas)</span></span>
                                <input type="text" class="form__login" name="name" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class=" form-group">
                                <span>Telepon</span>
                                <input type="text" class="form__login" name="phone" value="<?= set_value('phone') ?>">
                                <?= form_error('phone', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class=" form-group">
                                <span>Password</span>
                                <div class="form-label-group input-group">
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" style="padding:20px;" rows="10" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i id="eye" class="far fa-eye-slash" style="font-size:12pt;margin-top:5px"></i>
                                        </span>
                                    </div>
                                </div>
                                <?= form_error('password', '<small class="text-danger">',  '</small>') ?>
                            </div>




                            <div class="form-group">
                                <span>Email</span>
                                <input type="text" class="form__login" name="email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class=" form-group">
                                <span>Tanggal Lahir</span>

                                <!-- <input type="date" class="form__login" name="date" value="<?= set_value('date') ?>"> -->
                                <input id="serial" class="form__login inf" name="date" type="text" placeholder="dd/mm/yyyy" maxlength="10" />
                                <?= form_error('date', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class=" form-group">
                                <span>Gender</span>
                                <select class="custom-select form__select" id="inputGroupSelect01" name="sex">
                                    <option value="">Pilih</option>
                                    <?php foreach ($sex as $sex) : ?>
                                        <option value="<?= $sex ?>"><?= $sex ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('sex', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class="form-group">
                                <span>Category</span>
                                <select class="custom-select form__select" id="inputGroupSelect01" name="type">
                                    <option value="">Pilih</option>
                                    <?php foreach ($category as $category) : ?>
                                        <option value="<?= $category ?>"><?= $category ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('type', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class=" form-group">
                                <span>ID Number (KTP/Student ID)</span>
                                <input type="text" class="form__login" name="id" value="<?= set_value('id') ?>">
                                <?= form_error('id', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class="form-group">
                                <span>ID Card Photo (KTP/Student Card)</span>
                                <div class="dropzone" valid-mime-types="[image/png, image/jpeg]" max-file-size="10">
                                    <i class="fas fa-plus" style="position: absolute;margin-top: 70px;"></i>
                                    <input type="file" name="img" style="opacity: 0;
                                    text-align: center;
                                    width: 100%;
                                    z-index: 2;" id="image-source" class="bg-success" onchange="previewImage();" />
                                    <img id="image-preview" class="" style="" />
                                </div>
                                <?= form_error('img', '<small class="text-danger">',  '</small>') ?>
                                <br />
                            </div>

                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"> <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                                <span class="btn-txt">Register</span></button>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#eye').click(function() {
                            $('#password').attr('type', $('#password').is(':password') ? 'text' : 'password');
                            if ($('#password').attr('type') === 'password') {
                                $('#eye').removeClass('fa-eye').addClass('fa-eye-slash');
                            } else {
                                $('#eye').removeClass('fa-eye-slash').addClass('fa-eye');
                            }
                        });
                    });
                </script>