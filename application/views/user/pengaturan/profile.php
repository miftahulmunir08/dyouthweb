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
                <div class="row justify-content-center align-items-center m-0 mb-5 header__profile_edit">
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
                                    <form action="<?= base_url('pengaturan/profile') ?>" method="post" autocomplete="off" id="" enctype="multipart/form-data">

                                        <label for="upload_image">
                                            <?php if ($data_user["photo_profile"] != NULL) { ?>
                                                <img src="<?= base_url('Assets/img/profile/' . $data_user['photo_profile']) ?>" id="uploaded_image" class="img-responsive rounded-circle" width="150" />
                                            <?php } else { ?>
                                                <img src="<?= base_url('Assets/img/profile/') ?>profile.png" id="uploaded_image" class="img-responsive rounded-circle" width="150" />
                                            <?php } ?>

                                            <div class="overr">

                                            </div>
                                            <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                                        </label>

                                </div>

                                <!-- <img src="<?= base_url() ?>assets/img/profile/profile.png" class="rounded-circle cropme"> -->
                                <div class="cropme text-center" style="width: 200px; height: 200px;border-radius: 50%;"></div>
                                <div class="photo__profile_edit rounded-circle">
                                    <label for="edit__photo_profile">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </label>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" content bg-light mb-5">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11 edit__profile_identitas">
                        <div class="card custome__card__content mb-5 mt-5">
                            <div class="card-body pb-4">
                                <img id="result">
                                <h5 class="mb-4">Identitas</h5>


                                <div class="form-group">
                                    <span class="text__form_gray">Name</span>
                                    <input type="text" class="form__login" name="nama" value="<?= $data_user["name"]; ?>">
                                    <?= form_error('nama', '<small class="text-danger">',  '</small>') ?>
                                </div>

                                <div class=" form-group">
                                    <span>Tanggal Lahir</span>
                                    <input id="serial" class="form__login inf" name="born" type="text" placeholder="dd/mm/yyyy" maxlength="10" value="<?php
                                                                                                                                                        $tgl = $data_user["born"];
                                                                                                                                                        $tgl = explode("-", $tgl);
                                                                                                                                                        $tgl = implode("/", $tgl);
                                                                                                                                                        echo $tgl;
                                                                                                                                                        ?>" />
                                    <?= form_error('born', '<small class="text-danger">',  '</small>') ?>
                                </div>

                                <div class=" form-group">
                                    <span class="text__form_gray">Jenis Kelamin</span>
                                    <select class="custom-select form__select" name="sex" id="inputGroupSelect01" required>
                                        <option value="">Select</option>
                                        <?php foreach ($sex as $kelamin) : ?>
                                            <?php if ($data_user["gender"] == $kelamin) { ?>
                                                <option value="<?= $kelamin ?>" selected><?= $kelamin ?></option>
                                            <?php } else {  ?>
                                                <option value="<?= $kelamin ?>"><?= $kelamin ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <span class="text__form_gray">Category</span>
                                    <select class="custom-select form__select" name="category" id="inputGroupSelect01" required>
                                        <option value="">Select</option>

                                        <?php foreach ($category as $cat) : ?>
                                            <?php if ($data_user["category"] == $cat) { ?>
                                                <option value="<?= $cat ?>" selected><?= $cat ?></option>
                                            <?php } else {  ?>
                                                <option value="<?= $cat ?>"><?= $cat ?></option>
                                            <?php } ?>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn__blue_gradient_small d-block btn-block">Simpan
                                    perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-11">
                        <div class="card custome__card__content mb-5">
                            <div class="card-body pb-4">
                                <h5 class="mb-4">Akun</h5>
                                <form action="<?= base_url('pengaturan/profile2') ?>" method="post" autocomplete="off" id="form">

                                    <div class="form-group">
                                        <span class="text__form_gray">Email</span>
                                        <input type="text" class="form__login" name="email" value="<?= $data_user["email"] ?>">
                                        <?= form_error('email', '<small class="text-danger">',  '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <span class="text__form_gray">Password</span>
                                        <input type="password" class="form__login" name="password" value="<?= $data_user["password"] ?>">
                                        <?= form_error('password', '<small class="text-danger">',  '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn__blue_gradient_small d-block btn-block">Simpan
                                        perubahan</button>
                                </form>
                                <div class="col-sm-12">
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Crop Image Before Upload</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="img-container">
                                                        <div class="col-xs-10">
                                                            <img src="" id="sample_image" />
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="preview"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="crop" class="btn btn-primary">Crop</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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

            var $modal = $('#modal');

            var image = document.getElementById('sample_image');

            var cropper;

            $('#upload_image').change(function(event) {
                var files = event.target.files;

                var done = function(url) {
                    image.src = url;
                    $modal.modal('show');
                };

                if (files && files.length > 0) {
                    reader = new FileReader();
                    reader.onload = function(event) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            $modal.on('shown.bs.modal', function() {
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview: '.preview'
                });
            }).on('hidden.bs.modal', function() {
                cropper.destroy();
                cropper = null;
            });

            $('#crop').click(function() {
                canvas = cropper.getCroppedCanvas({
                    width: 400,
                    height: 400,


                });

                canvas.toBlob(function(blob) {
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        var base64data = reader.result;
                        $.ajax({
                            url: '<?= base_url('Pengaturan/updatephoto') ?>',
                            method: 'POST',
                            data: {
                                image: base64data
                            },
                            success: function(data) {
                                $modal.modal('hide');
                                $('#uploaded_image').attr('src', data);

                            }
                        });
                    };
                });
            });

        });
    </script>


</body>