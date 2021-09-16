<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content" class="bg-light">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= base_url('Akses') ?>" class="navbar__menu text-white font-weight-bold">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.92993L3.5 11.9999L9.57 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5 12H3.66998" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </nav>
                <div class="row justify-content-center align-items-center m-0 barcode">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="card custome__card_barcode">
                            <div class="card-body p-0 mt-4">
                                <h5 class="font-weight-bold">Youth Fest Daily Entrance</h5>
                                <?php if ($ticket == NULL) { ?>
                                    <p><?php
                                        $var = explode(".", $this->session->userdata('barcode_tiket'));
                                        echo "ET-" . $var[0]  ?></p>
                                <?php } else { ?>
                                    <p><?php
                                        $var = explode(".", $ticket['barcode']);
                                        echo "ET-" . $var[0]  ?></p>
                                    </p>
                                <?php } ?>


                                <?php if ($ticket == NULL) { ?>
                                    <img src="<?= base_url() ?>qr/ticket/<?= "ET-" . $this->session->userdata('barcode_tiket'); ?>" class="rounded mt-4">
                                <?php } else { ?>
                                    <img src="<?= base_url() ?>qr/ticket/<?= "ET-" . $ticket['barcode']; ?>" class="rounded mt-4">
                                <?php } ?>
                                <!-- <p>YF-202110150001DMADE</p> -->


                                <a href="<?= base_url('Akses') ?>" class="btn__gray_small d-block btn-block text-center">Kembali ke
                                    halaman Akses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


</body>