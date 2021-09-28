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
</style>

<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->
        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a type="button" href="<?= base_url('kupon') ?>" class="navbar__menu text-white font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <div class="navbar__title text-center" href="#">
                        <span>Kupon</span>
                    </div>
                    <div>


                    </div>
                </nav>

            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11">
                        <div class="mt-5 text-center">

                            <?php
                            if ($this->session->flashdata('flash')) :
                            ?>

                                <div class="alert alert-<?= $this->session->flashdata('color'); ?> alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?= $this->session->flashdata('flash'); ?><strong> </strong>
                                </div>

                            <?php endif; ?>

                        </div>
                        <div class="card custome__card__content mt-5 mb-5">
                            <div class="card-body">
                                <h4 class="font-weight-bold mb-4">Data Transaksi</h3>
                                    <form action="" method="post" id="form" action="<?= base_url('Kupon/joinkupon') ?>" autocomplete="off" enctype="multipart/form-data">

                                        <input type="hidden" class="form__login" name="kodekupon" value=<?= $kodekupon; ?>>

                                        <div class="form-group">
                                            <span>Pilih jenis tenant</span>
                                            <select class="custom-select form__select" name="jenis" id="inputGroupSelect01" required>
                                                <option value="">Select</option>
                                                <option value="distro">Distro</option>
                                                <option value="barber shop">Barber Shop</option>
                                                <option value="coffe shop">Coffe Shop</option>
                                                <option value="studio music">Studio Music</option>
                                                <option value="butik">Butik</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <span>Nama Tenant</span>
                                            <input type="text" class="form__login" name="tenant">
                                            <?= form_error('tenant', '<small class="text-danger">',  '</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <span>Nominal</span>
                                            <input type="text" class="form__login" name="nominal">
                                            <?= form_error('nominal', '<small class="text-danger">',  '</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <span>Pilih Tanggal</span>
                                            <input type="text" id="date" class="date form__login btn-block" name="tgl" placeholder="dd/mm//yyyy">
                                            <?= form_error('tgl', '<small class="text-danger">',  '</small>') ?>

                                        </div>



                                        <div class="form-group">
                                            <span>Struk Transaksi</span>
                                            <div class="dropzone" valid-mime-types="[image/png, image/jpeg]" max-file-size="10">
                                                <i class="fas fa-plus" style="position: absolute;margin-top: 70px;"></i>
                                                <input type="file" name="img" style="opacity: 0;
                                    text-align: center;
                                    width: 100%;
                                    z-index: 2;" id="image-source" class="bg-success" onchange="previewImage();" />
                                                <img id="image-preview" class="" style="" />
                                            </div>

                                            <br />
                                        </div>
                                        <?= form_error('img', '<small class="text-danger">',  '</small>') ?>

                                        <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"><i class="loading-icon fa fa-spinner fa-spin hide"></i><span class="btn-txt">Submit</i></button>
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
            $(".button").on("click", function() {
                $(".result").text("");
                $(".loading-icon").removeClass("hide");
                $(".button").attr("disabled", true);
                $(".btn-txt").text("Process, Please Wait...");
                $("#form").submit();
            });
        });
    </script>


    <script>
        function previewImage() {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
    </script>

    <script type="text/javascript">
        $(".date").datepicker({
            format: "dd-mm-yyyy",
        });
    </script>
</body>