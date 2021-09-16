<body class="bg__img">
    <div class="wrapper">
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
                        <span>Verifikasi</span>
                    </div>
                    <div>

                    </div>
                </nav>

            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11">
                        <div class="card card__form mt-5 mb-5">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="logo__check">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check text__blue" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold text-center">Kupon telah dikirim
                                </h5>
                                <p class="text-center mb-5 mt-3 size__font_md">Terima kasih. Data Undian anda akan di validasi. Pengumuman pemenang undian akan diinformasikan lebih lanjut</p>

                                <a href="<?= base_url('Kupon') ?>" class="btn__login_small d-block btn-block text-center">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


</body>