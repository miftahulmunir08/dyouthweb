<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->

        <!-- Page Content  -->
        <div id="content" class="bg-light">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= base_url('dompet') ?>" type="button" class="navbar__menu text-white font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <div>
                        <a href="#" class="navbar__bell text-white" id="bell">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </a>



                    </div>
                </nav>
                <div class="row justify-content-center align-items-center m-0 barcode mb-5">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4 mb-5">
                        <div class="card custome__card_barcode">
                            <div class="card-body p-0 mt-4">
                                <h5 class="font-weight-bold"><?= $title ?></h5>
                                <p>Silakan kunjungi changer Kepeng terdekat</p>
                                <h6 class="font-weight-bold"><?php $var = explode(".", $data_user["kode_qr"]);
                                                                echo $var[0]; ?></h6>
                                <img src="<?= base_url() ?>qr/user/<?= $data_user["kode_qr"] ?>" class="rounded mt-4">

                                <a href="<?= base_url('Dompet') ?>" class="btn__gray_small d-block btn-block text-center">Kembali ke halaman Dompet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>