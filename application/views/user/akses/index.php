<style>
    #owl-demo .item {
        background: #3fbf79;
        padding: 30px 0px;
        margin: 10px;
        color: #FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;
    }

    .customNavigation {
        text-align: center;
    }

    .customNavigation a {
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
</style>

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
                        <span>Akses</span>
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
                    <div class="col-11 col-md-8 col-lg-6 col-xl-4">
                        <div class="akses__event">
                            <h4>
                                <?= $tanggal ?>
                            </h4>
                            <span>Tiket yang kamu miliki :</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11 banner__event_top mb-5">

                        <?php if ($data_tiket == NULL) { ?>

                            <div class="card custome__card__content">
                                <div class="card-body no__tiket_banner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                                    </svg>
                                    <p>You don't have a ticket yet. Book now!</p>
                                </div>
                            </div>
                    </div>
                <?php } else { ?>



                    <div class="__wrap owl-carousel mb-3">


                        <?php foreach ($data_tiket as $tiket) : ?>

                            <div class="card custome__card__content mr-3">
                                <div class="card-body m-0 p-0">
                                    <img class="float-left event__img_left mr-3" src="assets/img/bg-beranda-01.png" style="width:35%" alt="">
                                    <div class="info__event_banner">
                                        <h6>Youth Fest 2021 -Tiket Harian</h6>
                                        <p>Tiket Harian Youth Fest 2021
                                            <?= $tiket["tanggal"] ?></p>
                                        <a href="<?= base_url('Akses/Lihat_ticket/?id=' . $tiket["id_ticket"]) ?>">Pindai tiketmu sekarang!</a>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                        <!-- <div class="card custome__card__content mr-3">
                            <div class="card-body m-0 p-0">
                                <img class="float-left event__img_left mr-3" src="assets/img/bg-beranda-01.png" style="width:35%" alt="">
                                <div class="info__event_banner">
                                    <h6>Youth Fest 2021 -Tiket Harian</h6>
                                    <p>Tiket Harian Youth Fest 2021
                                        <?= $tiket["tanggal"] ?></p>
                                    <a href="entrance-tiket-checkout-4.html">Pindai tiketmu sekarang!</a>
                                </div>
                            </div>
                        </div> -->



                    </div>






                    <!-- <div class="col-12 banner__event __wrap2 owl-carousel"> -->

                    <!-- <div class="col-11 __wra owl-carousel mb-2">


                        <div class="col-11">
                            <div class="card custome__card__content">
                                <div class="card-body m-0 p-0">
                                    <img class="float-left event__img_left" src="assets/img/bg-beranda-01.png" style="" alt="">
                                    <div class="info__event_banner">
                                        <h6>Youth Fest 2021 -Tiket Harian</h6>
                                        <p>Tiket Harian Youth Fest 2021
                                            <?= $tiket["tanggal"] ?></p>
                                        <a href="entrance-tiket-checkout-4.html">Pindai tiketmu sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-11">
                            <div class="card custome__card__content">
                                <div class="card-body m-0 p-0">
                                    <img class="float-left event__img_left" src="assets/img/bg-beranda-01.png" style="" alt="">
                                    <div class="info__event_banner">
                                        <h6>Youth Fest 2021 -Tiket Harian</h6>
                                        <p>Tiket Harian Youth Fest 2021
                                            <?= $tiket["tanggal"] ?></p>
                                        <a href="entrance-tiket-checkout-4.html">Pindai tiketmu sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> -->


                <?php } ?>


                <div class="col-11 event__festival">
                    <h6 class="float-left">Pesan tiketmu sekarang!</h6>
                    <a href="" class="float-right">Lihat semua</a>
                </div>

                <div class="col-11 banner__event mb-5">
                    <div class="card custome__card__content">
                        <img class="card__img_top" src="assets/img/bg-beranda-01.png" alt="...">
                        <div class="card-body">
                            <a href="">
                                <span class="event__title">Youth Fest 2021 - Tiket Harian</span>
                                <span>Tiket Harian Youth Fest 2021</span>
                            </a>
                        </div>
                    </div>
                    <a href="<?= base_url('akses/entrance') ?>" type="button" class="btn__blue_gradient_small d-block btn-block mb-5">Pesan tiket</a>
                    <div class="mb-1">&nbsp;</div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>



    <!-- Bootstrap 4 - JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Bootstrap 4 - CSS -->

    <!-- JS Sidebar -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- End JS Sidebar -->

    <!-- Notif -->
    <script>
        $(document).ready(function() {
            $("#box_notif").mCustomScrollbar({
                theme: "minimal"
            });

            $('.overlay').click(function(e) {
                $('#box_notif').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#bell').click(function(e) {
                $('#box_notif').addClass('active');
                $('.overlay').addClass('active');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.__wrap').owlCarousel({
                loop: false,
                autoplay: true,
                autoplaySpeed: 500,
                dots: true,
                dotsContainer: '#dots',
                nav: true,
                dotsEach: true,
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

            $('.__wra').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplaySpeed: 500,
                dots: true,
                dotsContainer: '#dots',
                nav: true,
                dotsEach: true,
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


        });
    </script>

</body>