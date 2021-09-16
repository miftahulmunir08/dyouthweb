<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->

        <!-- Page Content  -->
        <div id="content" class="bg-light">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <button type="button" id="sidebarCollapse" class="navbar__menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar__title text-center" href="#">
                        <span>Doorprize</span>
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
            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11 banner__event mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="ticket__undian img__undian">
                                    <div class="ticket-content-wrapper d-flex justify-content-between p-2">
                                        <div class="card-body p-4">
                                            <div class="title__banner mb-5">
                                                <h5 class="event__title mb-4">#DOORPRIZEDYOUTH</h5>
                                                <span class="font__vsm">Tukar nota belanjamu di Distro, Coffee Shop,
                                                    Barbershop di Kota Denpasar. Menangkan hadiah menari berupa 100 baju
                                                    distro,
                                                    100 buah celana dan lainnya!</span>
                                            </div>
                                            <div class="d-block mt-2 lane__ticket">
                                                <a href="<?= base_url() ?>/Kupon/detailKupon" class="btn__blue_gradient_banner d-block">Ikuti Undian
                                                    Doorprize</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Doorprize yang kamu ikuti</h6>
                    </div>

                    <div class="col-11 banner__event mb-5">

                        <?php

                        if ($data_kupon == NULL) { ?>



                            <div class="card custome__card__content shadow-sm bg-secondary" style="margin-bottom: 100px;">
                            <?php } else {  ?>
                                <div class="card custome__card__content shadow-sm" style="margin-bottom: 100px;">
                                <?php } ?>


                                <?php

                                if ($data_kupon == NULL) { ?>

                                    <div class="card-body mt-2 mb-4 list__undian">

                                        <div class="title__undian text-center">
                                            <h6 class="text-white"><?= "No History" ?></h6>
                                        </div>

                                    </div>
                                    <div class="lane__content_small"></div>


                                <?php } else { ?>

                                    <?php foreach ($data_kupon as $kpn) { ?>

                                        <div class="card-body mt-2 mb-4 list__undian">
                                            <span class="icon__undian float-left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                                                    <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                                </svg>
                                            </span>
                                            <div class="title__undian float-left">
                                                <h6><?= $kpn["kode_kupon"] ?></h6>
                                                <p><?= $kpn["waktu"] ?></p>
                                            </div>
                                            <div class="float-right">
                                                <a href="<?= base_url('Kupon/detailKuponById/' . $kpn["id_kupon"]) ?>">Lihat detail</a>
                                            </div>
                                        </div>
                                        <div class="lane__content_small"></div>

                                <?php }
                                } ?>

                                <!-- <div class="card-body mt-2 mb-2 list__undian">
                                <span class="icon__undian float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                                        <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                    </svg>
                                </span>
                                <div class="title__undian float-left">
                                    <h6>#KUPON1</h6>
                                    <p>2 Jam yang lalu</p>
                                </div>
                                <div class="float-right">
                                    <a href="detail-dorprize.html">Lihat detail</a>
                                </div>
                            </div> -->
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>