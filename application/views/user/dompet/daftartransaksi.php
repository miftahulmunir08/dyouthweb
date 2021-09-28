<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= BASE_URL('Dompet') ?>" class="navbar__menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.92993L3.5 11.9999L9.57 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5 12H3.67001" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                    <div class="col-12">
                        <div class="setting__item mt-4">

                            <div class="setting__list">
                                <?php foreach ($riwayat as $list) { ?>


                                    <div class="card__list pt-2 pb-2">
                                        <a href="<?= BASE_URL('Dompet/DetailTransaksi/' . $list["id_transaksi"]) ?>" class="d-flex justify-content-between">
                                            <div class="flex-grow-1 bd-highlight">
                                                <span class="icon__transaksi float-left">
                                                    <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.1677 17.2402V18.5936C12.1677 19.7403 11.101 20.6669 9.78768 20.6669C8.47435 20.6669 7.401 19.7403 7.401 18.5936V17.2402C7.401 18.3869 8.46768 19.2002 9.78768 19.2002C11.101 19.2002 12.1677 18.3802 12.1677 17.2402Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.1666 15.4065C12.1666 15.7398 12.0733 16.0465 11.9133 16.3132C11.52 16.9598 10.7133 17.3665 9.77995 17.3665C8.84661 17.3665 8.03994 16.9532 7.64661 16.3132C7.48661 16.0465 7.39331 15.7398 7.39331 15.4065C7.39331 14.8332 7.65996 14.3198 8.08663 13.9465C8.51996 13.5665 9.11327 13.3398 9.77327 13.3398C10.4333 13.3398 11.0266 13.5732 11.46 13.9465C11.9 14.3132 12.1666 14.8332 12.1666 15.4065Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.1677 15.4068V17.2402C12.1677 18.3868 11.101 19.2002 9.78768 19.2002C8.47435 19.2002 7.401 18.3802 7.401 17.2402V15.4068C7.401 14.2602 8.46768 13.3335 9.78768 13.3335C10.4477 13.3335 11.041 13.5668 11.4744 13.9401C11.901 14.3135 12.1677 14.8335 12.1677 15.4068Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M19.6667 13.3133V14.6866C19.6667 15.0533 19.3734 15.3533 19.0001 15.3666H17.6934C16.9734 15.3666 16.3134 14.84 16.2534 14.12C16.2134 13.7 16.3734 13.3066 16.6534 13.0333C16.9 12.78 17.24 12.6333 17.6134 12.6333H19.0001C19.3734 12.6466 19.6667 12.9466 19.6667 13.3133Z" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6.33337 13.0002V11.6668C6.33337 9.8535 7.42671 8.58683 9.12671 8.37349C9.30004 8.34683 9.48004 8.3335 9.66671 8.3335H15.6667C15.84 8.3335 16.0067 8.34015 16.1667 8.36682C17.8867 8.56682 19 9.84016 19 11.6668V12.6335H17.6134C17.24 12.6335 16.9 12.7802 16.6534 13.0335C16.3734 13.3068 16.2134 13.7002 16.2534 14.1202C16.3134 14.8402 16.9734 15.3668 17.6934 15.3668H19V16.3335C19 18.3335 17.6667 19.6668 15.6667 19.6668H14" stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" />
                                                        <rect x="0.937256" y="0.5" width="24.5691" height="27" rx="5.5" stroke="#E5E5E5" />
                                                    </svg>
                                                </span>
                                                <div class="float-left lis__transaksi ml-1">
                                                    <h6 class=""><?= $list["kategori"] ?></h6>
                                                    <p>
                                                        <img src="assets/img/kepeng-01.png" alt="" height="25">
                                                        <?php if ($list["kategori"] == "Top Up") { ?>
                                                            <span class="text-success">
                                                                <?= "+" . $list["jumlah"] . " KPG" ?>
                                                            <?php } else { ?>
                                                                <span class="text-danger">
                                                                    <?= "-" . $list["jumlah"] . " KPG" ?>
                                                                <?php } ?>
                                                                </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <span class="pt-3 pb-3 d-inline-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="overlay"></div>