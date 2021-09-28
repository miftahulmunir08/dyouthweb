<style>
    .image_area {
        position: relative;
    }

    img {
        display: block;
        max-width: 100%;

    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
        border-radius: 50%;
    }

    .modal-lg {
        max-width: 1000px !important;
    }

    .overlayy {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.5);
        overflow: hidden;
        height: 0;
        transition: .5s ease;
        width: 100%;
    }

    .image_area:hover .overlayy {
        height: 50%;
        cursor: pointer;
    }

    .text {
        color: #333;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>


<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->

        <div id="content">
            <div class="header bg__blue_gradient pb-1">
                <nav class="navbar navbar-dark navbar__z">
                    <button type="button" id="sidebarCollapse" class="navbar__menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar__title text-center" href="#">
                        <span><?= $title ?></span>
                    </div>
                    <div>
                        <a href="#" class="navbar__bell text-white" id="bell">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.02 2.90991C8.71003 2.90991 6.02003 5.59991 6.02003 8.90991V11.7999C6.02003 12.4099 5.76003 13.3399 5.45003 13.8599L4.30003 15.7699C3.59003 16.9499 4.08003 18.2599 5.38003 18.6999C9.69003 20.1399 14.34 20.1399 18.65 18.6999C19.86 18.2999 20.39 16.8699 19.73 15.7699L18.58 13.8599C18.28 13.3399 18.02 12.4099 18.02 11.7999V8.90991C18.02 5.60991 15.32 2.90991 12.02 2.90991Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                                <path d="M13.87 3.19994C13.56 3.10994 13.24 3.03994 12.91 2.99994C11.95 2.87994 11.03 2.94994 10.17 3.19994C10.46 2.45994 11.18 1.93994 12.02 1.93994C12.86 1.93994 13.58 2.45994 13.87 3.19994Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.02 19.0601C15.02 20.7101 13.67 22.0601 12.02 22.0601C11.2 22.0601 10.44 21.7201 9.90002 21.1801C9.36002 20.6401 9.02002 19.8801 9.02002 19.0601" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                            </svg>
                        </a>
                    </div>
                </nav>
                <div class="row justify-content-center align-items-center m-0 header__profile_edit">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="card custome__card_profile">
                            <div class="card-body">


                                <?php
                                // var_dump($this->session->userdata('date'));
                                // die;


                                if ($this->session->flashdata('flash')) :
                                ?>

                                    <div class="alert alert-<?= $this->session->flashdata('color'); ?> alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?= $this->session->flashdata('flash'); ?><strong> </strong>
                                    </div>

                                <?php endif; ?>





                                <div class="col-sm-12 ml-4">
                                    <!-- <div class="cropme ml-5" style="width: 200px; height: 200px;border-radius: 50%;"></div> -->
                                    <form action="<?= base_url('pengaturan/ubahpin') ?>" method="post" autocomplete="off" id="" enctype="multipart/form-data">

                                        <label for="upload_image">
                                            <?php if ($data_user["photo_profile"] != NULL) { ?>
                                                <img src="<?= base_url('assets/img/profile/' . $data_user['photo_profile']) ?>" id="uploaded_image" class="img-responsive rounded-circle" width="150" />
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/img/profile/') ?>profile.png" id="uploaded_image" class="img-responsive rounded-circle" width="150" />
                                            <?php } ?>

                                            <div class="overr">

                                            </div>


                                        </label>

                                </div>

                                <!-- <img src="<?= base_url() ?>assets/img/profile/profile.png" class="rounded-circle cropme"> -->
                                <div class="cropme text-center" style="width: 200px; height: 200px;border-radius: 50%;"></div>
                                <div class="photo__profile_edit rounded-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11 edit__profile_identitas">
                        <div class="card custome__card__content mt-5">
                            <div class="card-body pb-4">
                                <img id="result">
                                <h5 class="">Ubah Pin</h5>

                                <div class=" form-group">
                                    <span>Pin</span>
                                    <div class="form-label-group input-group">
                                        <input type="password" id="password" class="form-control" placeholder="Password" name="password" style="padding:20px;" rows="10" required value="<?= $users['user_pin'] ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i id="eye" class="far fa-eye-slash" style="font-size:12pt;margin-top:5px"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger">',  '</small>') ?>
                                </div>

                                <div class=" form-group">
                                    <span>Konfirmasi Password</span>
                                    <div class="form-label-group input-group">
                                        <input type="password" id="password2" class="form-control" placeholder="Password" name="password2" style="padding:20px;" rows="10" required value="<?= $users['user_pin'] ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i id="eye2" class="far fa-eye-slash" style="font-size:12pt;margin-top:5px"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <?= form_error('password2', '<small class="text-danger">',  '</small>') ?>
                                </div>




                                <button type="submit" class="btn__blue_gradient_small d-block btn-block">Simpan
                                    perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


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

            $('#eye2').click(function() {
                $('#password2').attr('type', $('#password2').is(':password') ? 'text' : 'password');
                if ($('#password2').attr('type') === 'password') {
                    $('#eye2').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    $('#eye2').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {

        });
    </script>




</body>