<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->


        <!-- Page Content  -->
        <div id="content" class="pb-5 bg-light">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <button type="button" id="sidebarCollapse" class="navbar__menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar__title text-center" href="#">
                        <span>Beranda</span>
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

                                <?php if ($data_user["photo_profile"] != NULL) { ?>
                                    <img src="<?= base_url('Assets/img/profile/' . $data_user['photo_profile']) ?>" id="uploaded_image" class="img-responsive rounded-circle" width="150" />
                                <?php } else { ?>
                                    <img src="<?= base_url('Assets/img/profile/') ?>profile.png" id="uploaded_image" class="img-responsive rounded-circle" width="150" />
                                <?php } ?>

                                <h5><?= $data_user["name"] ?></h5>
                                <span><?= $data_user["email"] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content bg-light mb-5 pb-5">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11 beranda__saldo">
                        <div class="card custome__card__content mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 kepeng__price">
                                        <img src="<?= base_url() ?>/assets/img/kepeng-02.png" alt="" class="float-left">
                                        <div class="pt-1">
                                            <h5>0 <span class="text__gold">KPG</span>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-6 vanue__info">
                                        <h4 class="float-left total__vanue">1000</h4>
                                        <div>
                                            <p class="text__vanue">Total kuota Venue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Youth Fest Entrance</h6>
                        <a href="<?= base_url('coming_soon') ?>" class="float-right">Lihat detail</a>
                    </div>

                    <div class="col-11 event__festival">
                        <p class="font__vsm">Pesan tiket untuk dapatkan akses ke Youth Festival 2021</p>
                    </div>

                    <div class="col-11 banner__event">
                        <div class="card custome__card__content shadow-sm">
                            <img class="card__img_top" src="<?= base_url() ?>/assets/img/bg-beranda-01.png" alt="banner">
                            <div class="card-body d-flex justify-content-between">
                                <div class="title__banner">
                                    <span class="event__title">Youth Fest Daily Entrance</span>
                                    <span class="font__vsm">Akses masuk harian Youth Fest 2021</span>
                                </div>
                                <a href="<?= base_url('Akses/entrance') ?>" class="btn__blue_gradient_banner">Pesan Tiket</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 lane__content mt-5 mb-5"></div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Menangkan Hadiah!</h6>
                        <a href="<?= base_url('coming_soon') ?>" class="float-right">Lihat detail</a>
                    </div>

                    <div class="col-11 event__festival">
                        <p class="font__vsm">Ikuti undian Doorprize Youth Festival 2021</p>
                    </div>

                    <div class="col-11 banner__event">
                        <div class="row">
                            <div class="col-12">
                                <div class="ticket shadow-sm">
                                    <div class="ticket-content-wrapper d-flex justify-content-between p-2">
                                        <div class="img__undian_tiket float-left">
                                            <img src="<?= base_url() ?>/assets/img/Subtract2.png" alt="banner">
                                        </div>
                                        <div class="card-body">
                                            <div class="title__banner">
                                                <span class="event__title mb-2">#DOORPRIZEDYOUTH</span>
                                                <span class="font__vsm">Tukar nota belanjamu di Distro, Coffee Shop,
                                                    Barbershop di Kota Denpasar.</span>
                                            </div>
                                            <div class="d-block mt-2">
                                                <a href="<?= base_url('kupon') ?>" class="btn__blue_gradient_banner d-block">Ikuti Undian</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 lane__content mt-5 mb-5"></div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Pendaftaran Lomba Youth Festifal 2021</h6>
                    </div>
                    <!-- <?php var_dump($data_lomba);
                            ?> -->
                    <div class="col-11 banner__event">
                        <div class="card custome__card__content shadow-sm">
                            <?php foreach ($data_lomba as $lomba) { ?>


                                <div class="card-body mb-3 list__undian">
                                    <span class="icon__transaksi float-left">
                                        <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.5938 17.3125V18.625" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.4688 20.75H16.7188V20.125C16.7188 19.4375 16.1563 18.875 15.4688 18.875H11.7187C11.0312 18.875 10.4688 19.4375 10.4688 20.125V20.75V20.75Z" stroke="#BDBDBD" stroke-miterlimit="10" />
                                            <path d="M9.84375 20.75H17.3438" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.5 17C11.0813 17 9.125 15.0437 9.125 12.625V10.75C9.125 9.36875 10.2437 8.25 11.625 8.25H15.375C16.7563 8.25 17.875 9.36875 17.875 10.75V12.625C17.875 15.0437 15.9187 17 13.5 17Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.41875 14.2813C8.95 14.1313 8.5375 13.8563 8.2125 13.5313C7.65 12.9063 7.275 12.1563 7.275 11.2813C7.275 10.4063 7.9625 9.71875 8.8375 9.71875H9.24375C9.11875 10.0063 9.05625 10.325 9.05625 10.6563V12.5313C9.05625 13.1563 9.1875 13.7438 9.41875 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5813 14.2813C18.05 14.1313 18.4625 13.8563 18.7875 13.5313C19.35 12.9063 19.725 12.1563 19.725 11.2813C19.725 10.4063 19.0375 9.71875 18.1625 9.71875H17.7563C17.8813 10.0063 17.9438 10.325 17.9438 10.6563V12.5313C17.9438 13.1563 17.8125 13.7438 17.5813 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <rect x="0.937302" y="0.5" width="24.5691" height="27" rx="5.5" stroke="#E5E5E5" />
                                        </svg>
                                    </span>
                                    <div class="title__undian float-left">
                                        <h6><?= $lomba["acara"] ?></h6>
                                        <a href="<?= base_url('lomba/detailomba/' . $lomba["id_lomba"]) ?>">Lihat detail</a>
                                    </div>
                                </div>

                                <div class="lane__content_small"></div>

                            <?php } ?>

                            <div class="card-body check__all_undian">
                                <a href="<?= base_url('lomba') ?>">Lihat lomba lainnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 lane__content mt-5 mb-5"></div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Denah Youth Festifal 2021</h6>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


    <!-- <body class="bg__img">
    <div class="wrapper">
        <div id="content" class="pb-5 bg-light">
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
                                <img src="<?= base_url('assets') ?>/img/profile/profile.png" class="rounded-circle">
                                <h5><?= $data_user["name"] ?></h5>
                                <span><?= $data_user["email"] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content bg-light mb-5 pb-5">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11 beranda__saldo">
                        <div class="card custome__card__content mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 kepeng__price">
                                        <img src="<?= base_url('assets') ?>/img/kepeng-02.png" alt="" class="float-left">
                                        <div class="pt-1">
                                            <h5>0 <span class="text__gold">KPG</span>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-6 vanue__info">
                                        <h4 class="float-left total__vanue">1000</h4>
                                        <div>
                                            <p class="text__vanue">Total kuota Venue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Youth Fest Entrance</h6>
                        <a href="" class="float-right">Lihat semua</a>
                    </div>


                    <div class="__wrap owl-carousel">

                        <div class="col-11 banner__event ml-4">
                            <div class="card custome__card__content">
                                <img class="card__img_top" src="<?= base_url('assets') ?>/img/bg-beranda-01.png" alt="banner">
                                <div class="card-body">
                                    <a href="">
                                        <span class="event__title">Youth Fest Daily Entrance</span>
                                        <span>Youth Fest Daily Entrance Day 1 (20 Oktober 2021)</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-11 banner__event ml-4">
                            <div class="card custome__card__content">
                                <img class="card__img_top" src="<?= base_url('assets') ?>/img/bg-beranda-01.png" alt="banner">
                                <div class="card-body">
                                    <a href="">
                                        <span class="event__title">Youth Fest Daily Entrance</span>
                                        <span>Youth Fest Daily Entrance Day 1 (20 Oktober 2021)</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 lane__content mt-5 mb-5"></div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Menangkan Undian!</h6>
                        <a href="list-lomba.html" class="float-right">Lihat semua</a>
                    </div>

                    <div class="col-12 banner__event __wrap2 owl-carousel">

                        <div class="col-12">
                            <div class="card custome__card__content">
                                <img class="card__img_top" src="assets/img/bg-beranda-01.png" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <span class="event__title">#YOUTHFESTBERHADIAH</span>
                                        <span>Tukar nota, jadi hadiah!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card custome__card__content">
                                <img class="card__img_top" src="assets/img/bg-beranda-01.png" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <span class="event__title">#YOUTHFESTBERHADIAH</span>
                                        <span>Tukar nota, jadi hadiah!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card custome__card__content">
                                <img class="card__img_top" src="assets/img/bg-beranda-01.png" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <span class="event__title">#YOUTHFESTBERHADIAH</span>
                                        <span>Tukar nota, jadi hadiah!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 lane__content mt-5 mb-5"></div>

                <div class="col-11 event__festival">
                    <h6 class="float-left">Pendaftaran Lomba Youth Festifal 2021</h6>
                </div>

                <div class="col-11 banner__event">
                    <div class="card custome__card__content">
                        <div class="card-body mb-3 list__undian">
                            <span class="icon__transaksi float-left">
                                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5938 17.3125V18.625" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.4688 20.75H16.7188V20.125C16.7188 19.4375 16.1563 18.875 15.4688 18.875H11.7187C11.0312 18.875 10.4688 19.4375 10.4688 20.125V20.75V20.75Z" stroke="#BDBDBD" stroke-miterlimit="10" />
                                    <path d="M9.84375 20.75H17.3438" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 17C11.0813 17 9.125 15.0437 9.125 12.625V10.75C9.125 9.36875 10.2437 8.25 11.625 8.25H15.375C16.7563 8.25 17.875 9.36875 17.875 10.75V12.625C17.875 15.0437 15.9187 17 13.5 17Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.41875 14.2813C8.95 14.1313 8.5375 13.8563 8.2125 13.5313C7.65 12.9063 7.275 12.1563 7.275 11.2813C7.275 10.4063 7.9625 9.71875 8.8375 9.71875H9.24375C9.11875 10.0063 9.05625 10.325 9.05625 10.6563V12.5313C9.05625 13.1563 9.1875 13.7438 9.41875 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.5813 14.2813C18.05 14.1313 18.4625 13.8563 18.7875 13.5313C19.35 12.9063 19.725 12.1563 19.725 11.2813C19.725 10.4063 19.0375 9.71875 18.1625 9.71875H17.7563C17.8813 10.0063 17.9438 10.325 17.9438 10.6563V12.5313C17.9438 13.1563 17.8125 13.7438 17.5813 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <rect x="0.937302" y="0.5" width="24.5691" height="27" rx="5.5" stroke="#E5E5E5" />
                                </svg>
                            </span>
                            <div class="title__undian float-left">
                                <h6>D’Youth Pantomime Competition</h6>
                                <a href="info-lomba.html">Lihat detail</a>
                            </div>
                        </div>
                        <div class="lane__content_small"></div>
                        <div class="card-body mb-3 list__undian">
                            <span class="icon__transaksi float-left">
                                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5938 17.3125V18.625" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.4688 20.75H16.7188V20.125C16.7188 19.4375 16.1563 18.875 15.4688 18.875H11.7187C11.0312 18.875 10.4688 19.4375 10.4688 20.125V20.75V20.75Z" stroke="#BDBDBD" stroke-miterlimit="10" />
                                    <path d="M9.84375 20.75H17.3438" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 17C11.0813 17 9.125 15.0437 9.125 12.625V10.75C9.125 9.36875 10.2437 8.25 11.625 8.25H15.375C16.7563 8.25 17.875 9.36875 17.875 10.75V12.625C17.875 15.0437 15.9187 17 13.5 17Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.41875 14.2813C8.95 14.1313 8.5375 13.8563 8.2125 13.5313C7.65 12.9063 7.275 12.1563 7.275 11.2813C7.275 10.4063 7.9625 9.71875 8.8375 9.71875H9.24375C9.11875 10.0063 9.05625 10.325 9.05625 10.6563V12.5313C9.05625 13.1563 9.1875 13.7438 9.41875 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.5813 14.2813C18.05 14.1313 18.4625 13.8563 18.7875 13.5313C19.35 12.9063 19.725 12.1563 19.725 11.2813C19.725 10.4063 19.0375 9.71875 18.1625 9.71875H17.7563C17.8813 10.0063 17.9438 10.325 17.9438 10.6563V12.5313C17.9438 13.1563 17.8125 13.7438 17.5813 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <rect x="0.937302" y="0.5" width="24.5691" height="27" rx="5.5" stroke="#E5E5E5" />
                                </svg>
                            </span>
                            <div class="title__undian float-left">
                                <h6>D’Youth Pantomime Competition</h6>
                                <a href="info-lomba.html">
                                    <span>Lihat detail </span>
                                </a>
                            </div>
                        </div>
                        <div class="lane__content_small"></div>
                        <div class="card-body mb-3 list__undian">
                            <span class="icon__transaksi float-left">
                                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5938 17.3125V18.625" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.4688 20.75H16.7188V20.125C16.7188 19.4375 16.1563 18.875 15.4688 18.875H11.7187C11.0312 18.875 10.4688 19.4375 10.4688 20.125V20.75V20.75Z" stroke="#BDBDBD" stroke-miterlimit="10" />
                                    <path d="M9.84375 20.75H17.3438" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 17C11.0813 17 9.125 15.0437 9.125 12.625V10.75C9.125 9.36875 10.2437 8.25 11.625 8.25H15.375C16.7563 8.25 17.875 9.36875 17.875 10.75V12.625C17.875 15.0437 15.9187 17 13.5 17Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.41875 14.2813C8.95 14.1313 8.5375 13.8563 8.2125 13.5313C7.65 12.9063 7.275 12.1563 7.275 11.2813C7.275 10.4063 7.9625 9.71875 8.8375 9.71875H9.24375C9.11875 10.0063 9.05625 10.325 9.05625 10.6563V12.5313C9.05625 13.1563 9.1875 13.7438 9.41875 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.5813 14.2813C18.05 14.1313 18.4625 13.8563 18.7875 13.5313C19.35 12.9063 19.725 12.1563 19.725 11.2813C19.725 10.4063 19.0375 9.71875 18.1625 9.71875H17.7563C17.8813 10.0063 17.9438 10.325 17.9438 10.6563V12.5313C17.9438 13.1563 17.8125 13.7438 17.5813 14.2813Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                    <rect x="0.937302" y="0.5" width="24.5691" height="27" rx="5.5" stroke="#E5E5E5" />
                                </svg>
                            </span>
                            <div class="title__undian float-left">
                                <h6>D’Youth Pantomime Competition</h6>
                                <a href="info-lomba.html">
                                    <span>Lihat detail </span>
                                </a>
                            </div>
                        </div>
                        <div class="lane__content_small"></div>
                        <div class="card-body check__all_undian">
                            <a href="list-lomba.html">Lihat lomba lainnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 lane__content mt-5 mb-5"></div>

                <div class="col-11 event__festival">
                    <h6 class="float-left">Denah Youth Festifal 2021</h6>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="overlay"></div>



    <script>
        $(document).ready(function() {
            $('.__wrap').owlCarousel({
                pagination: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    700: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            })

            $('.__wrap2').owlCarousel({
                pagination: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    700: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    }
                }
            })

        })
    </script> -->