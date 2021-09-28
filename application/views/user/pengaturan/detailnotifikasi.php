<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->

        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <button type="button" id="sidebarCollapse" class="navbar__menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar__title text-center" href="#">
                        <span><?= $subtitle ?></span>
                    </div>
                    <div>
                        <?php if ($this->session->userdata('id')) { ?>
                            <a href="#" class="navbar__bell text-white" id="bell">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.02 2.90991C8.71003 2.90991 6.02003 5.59991 6.02003 8.90991V11.7999C6.02003 12.4099 5.76003 13.3399 5.45003 13.8599L4.30003 15.7699C3.59003 16.9499 4.08003 18.2599 5.38003 18.6999C9.69003 20.1399 14.34 20.1399 18.65 18.6999C19.86 18.2999 20.39 16.8699 19.73 15.7699L18.58 13.8599C18.28 13.3399 18.02 12.4099 18.02 11.7999V8.90991C18.02 5.60991 15.32 2.90991 12.02 2.90991Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M13.87 3.19994C13.56 3.10994 13.24 3.03994 12.91 2.99994C11.95 2.87994 11.03 2.94994 10.17 3.19994C10.46 2.45994 11.18 1.93994 12.02 1.93994C12.86 1.93994 13.58 2.45994 13.87 3.19994Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.02 19.0601C15.02 20.7101 13.67 22.0601 12.02 22.0601C11.2 22.0601 10.44 21.7201 9.90002 21.1801C9.36002 20.6401 9.02002 19.8801 9.02002 19.0601" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                </svg>
                            </a>

                        <?php } else { ?>

                            &nbsp;&nbsp;&nbsp;
                        <?php } ?>
                    </div>
                </nav>
                <div class="row justify-content-center align-items-center m-0 mt-3 mb-5">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="card custome__card">
                            <div class="card-body">
                                <img src="<?= base_url() ?>assets/img/bg-undianfix.png" style="width: 90%;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11">
                        <div class="card custome__card__content mt-5 mb-5">
                            <div class="card-body pt-4 pb-4 faq__content">
                                <h6 class="text-center mb-4"> Youth Festival 2021</h6>
                                <p class="text-justify">

                                </p>
                                <p class="text-center">
                                    Selamat anda sudah mendaftar sebagai
                                    peserta Youth Festival 2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="overlay"></div>
