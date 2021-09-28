<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->

        <!-- Bottom Navbar -->


        <!-- Page Content  -->
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </a>
                    </div>
                </nav>
                <div class="row justify-content-center align-items-center m-0 header__profile_edit">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="card custome__card_saldo">
                            <div class="card-body mx-auto">
                                <img src="assets/img/kepeng-02.png" alt="" class="img__dompet float-left">
                                <h4 class="float-left">
                                    <b><?= $saldo ?></b>
                                    KPG
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content bg-light mb-5">
                <div class="row justify-content-center align-items-center m-0  mb-5">
                    <div class="col-11 beranda__saldo">
                        <div class="card custome__card__content mb-3">
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <a href="<?= base_url('Dompet/topup') ?>" class="fitur__dompet">
                                            <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.0334 11.2918C14.6834 11.6335 14.4834 12.1252 14.5334 12.6502C14.6084 13.5502 15.4334 14.2085 16.3334 14.2085H17.9167V15.2002C17.9167 16.9252 16.5084 18.3335 14.7834 18.3335H6.35837C6.6167 18.1168 6.84171 17.8502 7.01671 17.5502C7.32504 17.0502 7.50004 16.4585 7.50004 15.8335C7.50004 13.9918 6.00837 12.5002 4.16671 12.5002C3.38337 12.5002 2.65837 12.7752 2.08337 13.2335V9.59184C2.08337 7.86684 3.49171 6.4585 5.21671 6.4585H14.7834C16.5084 6.4585 17.9167 7.86684 17.9167 9.59184V10.7918H16.2334C15.7667 10.7918 15.3417 10.9752 15.0334 11.2918Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.08337 10.3416V6.5333C2.08337 5.54163 2.6917 4.65826 3.6167 4.30826L10.2334 1.80826C11.2667 1.41659 12.375 2.18329 12.375 3.29162V6.45828" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M18.799 11.642V13.3587C18.799 13.817 18.4324 14.192 17.9657 14.2086H16.3324C15.4324 14.2086 14.6074 13.5503 14.5324 12.6503C14.4824 12.1253 14.6824 11.6336 15.0324 11.292C15.3407 10.9753 15.7657 10.792 16.2324 10.792H17.9657C18.4324 10.8087 18.799 11.1836 18.799 11.642Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.83337 10H11.6667" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.50004 15.8333C7.50004 16.4583 7.32504 17.05 7.01671 17.55C6.84171 17.85 6.61671 18.1167 6.35837 18.3333C5.77504 18.8583 5.00837 19.1667 4.16671 19.1667C2.95004 19.1667 1.89171 18.5167 1.31671 17.55C1.00838 17.05 0.833374 16.4583 0.833374 15.8333C0.833374 14.7833 1.31671 13.8417 2.08337 13.2333C2.65837 12.775 3.38337 12.5 4.16671 12.5C6.00837 12.5 7.50004 13.9917 7.50004 15.8333Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.40984 15.8164H2.92651" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.16675 14.5996V17.0913" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span>Top Up</span>
                                        </a>
                                    </div>
                                    <div class="col-4 border__left_dompet">
                                        <a href="<?= base_url('Dompet/withdraw') ?>" class="fitur__dompet">
                                            <svg width="25" height="25" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3.93848H16.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.665 1.4165H14.835C16.17 1.4165 16.5 1.72817 16.5 2.97484V5.88609C16.5 7.13276 16.17 7.44442 14.835 7.44442H10.665C9.33 7.44442 9 7.13276 9 5.88609V2.97484C9 1.72817 9.33 1.4165 10.665 1.4165Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1.5 12.084H9" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.165 9.5625H7.335C8.67 9.5625 9 9.87417 9 11.1208V14.0321C9 15.2788 8.67 15.5904 7.335 15.5904H3.165C1.83 15.5904 1.5 15.2788 1.5 14.0321V11.1208C1.5 9.87417 1.83 9.5625 3.165 9.5625Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.5 10.625C16.5 13.3663 14.1525 15.5833 11.25 15.5833L12.0375 14.3438" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1.5 6.37484C1.5 3.63359 3.8475 1.4165 6.75 1.4165L5.96251 2.65609" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <span>Withdraw</span>
                                        </a>
                                    </div>
                                    <div class="col-4 border__left_dompet">
                                        <a href="<?= base_url('Dompet/buy') ?>" class="fitur__dompet">
                                            <svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.30357 11.6448L6.70107 15.0423C8.09607 16.4373 10.3611 16.4373 11.7636 15.0423L15.0561 11.7498C16.4511 10.3548 16.4511 8.08977 15.0561 6.68727L11.6511 3.29728C10.9386 2.58478 9.95607 2.20228 8.95107 2.25478L5.20107 2.43478C3.70107 2.50228 2.50857 3.69478 2.43357 5.18728L2.25357 8.93727C2.20857 9.94977 2.59107 10.9323 3.30357 11.6448Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.30103 9.16992C8.33656 9.16992 9.17603 8.33046 9.17603 7.29492C9.17603 6.25939 8.33656 5.41992 7.30103 5.41992C6.26549 5.41992 5.42603 6.25939 5.42603 7.29492C5.42603 8.33046 6.26549 9.16992 7.30103 9.16992Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M9.92603 12.9199L12.926 9.91992" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <span>Buy</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-11 mb-4">
                        <div class="notif__brown">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.61454 1.73531C8.11037 1.3174 8.91079 1.3174 9.39246 1.73531L10.5116 2.69156C10.7241 2.86865 11.1279 3.0174 11.4112 3.0174H12.6154C13.3662 3.0174 13.9825 3.63365 13.9825 4.38448V5.58865C13.9825 5.87198 14.1312 6.26865 14.3083 6.48115L15.2645 7.60031C15.6825 8.09615 15.6825 8.89656 15.2645 9.37823L14.3083 10.4974C14.1312 10.7099 13.9825 11.1066 13.9825 11.3899V12.5941C13.9825 13.3449 13.3662 13.9611 12.6154 13.9611H11.4112C11.1279 13.9611 10.7312 14.1099 10.5187 14.287L9.39954 15.2432C8.90371 15.6611 8.10329 15.6611 7.62162 15.2432L6.50246 14.287C6.28996 14.1099 5.88621 13.9611 5.60996 13.9611H4.37037C3.61954 13.9611 3.00329 13.3449 3.00329 12.5941V11.3828C3.00329 11.1066 2.86162 10.7028 2.68454 10.4974L1.72829 9.37115C1.31746 8.8824 1.31746 8.08906 1.72829 7.60031L2.68454 6.47406C2.86162 6.26156 3.00329 5.8649 3.00329 5.58865V4.39156C3.00329 3.64073 3.61954 3.02448 4.37037 3.02448H5.59579C5.87912 3.02448 6.27579 2.87573 6.48829 2.69865L7.61454 1.73531Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.5 5.75879V9.18004" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.49609 11.3335H8.50246" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Hubungkan ke Vexanium Wallet</span>
                        </div>
                    </div>

                    <div class="col-11 event__festival">
                        <h6 class="float-left">Riwayat Transaksi</h6>
                    </div>

                    <div class="col-11 banner__event">


                        <?php if (count($riwayat) == 0) { ?>
                            <div class="col-11 mb-4">
                                <div class="notif__brown">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.61454 1.73531C8.11037 1.3174 8.91079 1.3174 9.39246 1.73531L10.5116 2.69156C10.7241 2.86865 11.1279 3.0174 11.4112 3.0174H12.6154C13.3662 3.0174 13.9825 3.63365 13.9825 4.38448V5.58865C13.9825 5.87198 14.1312 6.26865 14.3083 6.48115L15.2645 7.60031C15.6825 8.09615 15.6825 8.89656 15.2645 9.37823L14.3083 10.4974C14.1312 10.7099 13.9825 11.1066 13.9825 11.3899V12.5941C13.9825 13.3449 13.3662 13.9611 12.6154 13.9611H11.4112C11.1279 13.9611 10.7312 14.1099 10.5187 14.287L9.39954 15.2432C8.90371 15.6611 8.10329 15.6611 7.62162 15.2432L6.50246 14.287C6.28996 14.1099 5.88621 13.9611 5.60996 13.9611H4.37037C3.61954 13.9611 3.00329 13.3449 3.00329 12.5941V11.3828C3.00329 11.1066 2.86162 10.7028 2.68454 10.4974L1.72829 9.37115C1.31746 8.8824 1.31746 8.08906 1.72829 7.60031L2.68454 6.47406C2.86162 6.26156 3.00329 5.8649 3.00329 5.58865V4.39156C3.00329 3.64073 3.61954 3.02448 4.37037 3.02448H5.59579C5.87912 3.02448 6.27579 2.87573 6.48829 2.69865L7.61454 1.73531Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.5 5.75879V9.18004" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.49609 11.3335H8.50246" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>Tidak Ada Transaksi</span>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (count($riwayat) > 3) { ?>

                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="card custome__card__content">
                                    <div class="card-body mt-1 mb-1 list__undian">
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
                                        <div class="title__undian float-left">
                                            <h6><?= $riwayat[$i]["kategori"] ?></h6>
                                        </div>
                                        <br>
                                        <p class="">
                                            <img src="assets/img/kepeng-01.png" alt="" height="25" class="ml-3">
                                            <?php if ($riwayat[$i]["kategori"] == "Top Up") { ?>
                                                <span class="text-success time__notif">
                                                    <?= "+" . $riwayat[$i]["jumlah"] . " KPG" ?>
                                                <?php } else { ?>
                                                    <span class="text-danger time__notif">
                                                        <?= "-" . $riwayat[$i]["jumlah"] . " KPG" ?>
                                                    <?php } ?>
                                                    </span>

                                                    <span>
                                                        <b class="time__notif float-right">5 jam yang lalu</b>
                                                    </span>
                                        </p>

                                    </div>
                                    <div class="lane__content_small"></div>
                                    <div class="card-body check__all_undian">
                                        <a href="<?= base_url('Dompet/DaftarTransaksi') ?>">Lihat transaksi lainnya</a>
                                    </div>

                                <?php endfor; ?>
                            <?php } else { ?>
                                <?php for ($i = 0; $i < count($riwayat); $i++) : ?>
                                    <div class="card custome__card__content">
                                        <div class="card-body mt-1 mb-1 list__undian">
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
                                            <div class="title__undian float-left">
                                                <h6><?= $riwayat[$i]["kategori"] ?></h6>
                                            </div>
                                            <br>
                                            <p class="">
                                                <img src="assets/img/kepeng-01.png" alt="" height="25" class="ml-3">
                                                <?php if ($riwayat[$i]["kategori"] == "Top Up") { ?>
                                                    <span class="text-success time__notif">
                                                        <?= "+" . $riwayat[$i]["jumlah"] . " KPG" ?>
                                                    <?php } else { ?>
                                                        <span class="text-danger time__notif">
                                                            <?= "-" . $riwayat[$i]["jumlah"] . " KPG" ?>
                                                        <?php } ?>
                                                        </span>

                                                        <span>
                                                            <b class="time__notif float-right">5 jam yang lalu</b>
                                                        </span>
                                            </p>

                                        </div>
                                        <div class="lane__content_small"></div>
                                        <div class="card-body check__all_undian">
                                            <a href="<?= base_url('Dompet/DaftarTransaksi') ?>">Lihat transaksi lainnya</a>
                                        </div>

                                    <?php endfor; ?>
                                <?php } ?>



                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>