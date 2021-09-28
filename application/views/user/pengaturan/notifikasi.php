<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= base_url('homepage') ?>" class="navbar__menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.92993L3.5 11.9999L9.57 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5 12H3.67001" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
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

            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-12">
                        <div class="setting__item mt-4">

                            <div class="setting__list">

                                <?php foreach ($data_notifikasi as $notifikasi) : ?>


                                    <div class="card__list">
                                        <a href="<?= BASE_URL('pengaturan/detailnotifikasi/' . $notifikasi["id_notifikasi"]); ?>" class="d-block">
                                            <span class="setting__list_name"><?= $notifikasi["judul"] ?></span>
                                            <span class="float-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="overlay"></div>

    <div class="card notifications__card" id="box_notif">
        <div class="card-body">
            <h6>Notifikasi</h6>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
        </div>
    </div>



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
</body>