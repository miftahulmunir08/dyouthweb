<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= BASE_URL('Dompet/DaftarTransaksi') ?>" class="navbar__menu text-white font-weight-bold">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.92993L3.5 11.9999L9.57 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5 12H3.66998" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="navbar__title text-center" href="#">
                        <span>Riwayat transaksi</span>
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
                    <div class="col-11">
                        <div class="card card__form mt-5 mb-5">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="mb-3">
                                        <svg width="50" height="50" viewBox="0 0 42 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2684 28.3232V30.5466C19.2684 32.4304 17.5163 33.9528 15.359 33.9528C13.2017 33.9528 11.4387 32.4304 11.4387 30.5466V28.3232C11.4387 30.2071 13.1908 31.5432 15.359 31.5432C17.5163 31.5432 19.2684 30.1961 19.2684 28.3232Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19.2667 25.311C19.2667 25.8586 19.1134 26.3624 18.8506 26.8005C18.2045 27.8629 16.8794 28.531 15.3463 28.531C13.8132 28.531 12.4882 27.8519 11.8421 26.8005C11.5793 26.3624 11.426 25.8586 11.426 25.311C11.426 24.3691 11.864 23.5257 12.5649 22.9124C13.2767 22.2881 14.2512 21.9158 15.3354 21.9158C16.4195 21.9158 17.3941 22.2991 18.1059 22.9124C18.8287 23.5148 19.2667 24.3691 19.2667 25.311Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19.2684 25.311V28.3229C19.2684 30.2067 17.5163 31.5429 15.359 31.5429C13.2017 31.5429 11.4387 30.1957 11.4387 28.3229V25.311C11.4387 23.4272 13.1908 21.9048 15.359 21.9048C16.4431 21.9048 17.4178 22.2881 18.1296 22.9014C18.8304 23.5148 19.2684 24.3691 19.2684 25.311Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M31.5863 21.8717V24.128C31.5863 24.7304 31.1045 25.2232 30.4912 25.2451H28.3449C27.1622 25.2451 26.0781 24.3799 25.9795 23.197C25.9138 22.507 26.1766 21.8608 26.6366 21.4118C27.0417 20.9956 27.6002 20.7546 28.2135 20.7546H30.4912C31.1045 20.7765 31.5863 21.2694 31.5863 21.8717Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.68484 21.3571V19.1666C9.68484 16.1876 11.4808 14.1066 14.2732 13.7561C14.5579 13.7123 14.8536 13.6904 15.1602 13.6904H25.0158C25.3005 13.6904 25.5743 13.7014 25.8371 13.7452C28.6624 14.0737 30.4912 16.1657 30.4912 19.1666V20.7547H28.2134C27.6002 20.7547 27.0417 20.9957 26.6365 21.4118C26.1766 21.8609 25.9138 22.5071 25.9795 23.1971C26.0781 24.3799 27.1621 25.2452 28.3448 25.2452H30.4912V26.8333C30.4912 30.119 28.301 32.3095 25.0158 32.3095H22.2782" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                            <rect x="0.5" y="0.5" width="41" height="45" rx="5.5" stroke="#E5E5E5" />
                                        </svg>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold text-center">Top Up </h5>
                                <div class="info__transaksi mt-4 mb-5">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>ID</td>
                                            <td class="text-right text-secondary">123490213091309</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td class="text-right text-success">Sukses</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td class="text-right">Oct 10, 2021 10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td class="text-right">
                                                <img src="assets/img/kepeng-01.png" alt="" height="25">
                                                <span class="text-success">+50 KPG</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td class="text-right">Top Up</td>
                                        </tr>
                                    </table>
                                </div>
                                <a href="<?= BASE_URL('Dompet/DaftarTransaksi') ?>" class="btn__blue_gradient_small d-block">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>