<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= base_url('Kupon') ?>" class="navbar__menu text-white font-weight-bold">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.92993L3.5 11.9999L9.57 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5 12H3.66998" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="navbar__title text-center" href="#">
                        <span>Riwayat doorprize</span>
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
                                    <div class="mb-3">
                                        <svg width="42" height="46" viewBox="0 0 42 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.0616 26.1411C29.0616 27.6461 30.2983 28.8711 31.8033 28.8711C31.8033 33.2461 30.7066 34.3428 26.3316 34.3428H15.3883C11.0133 34.3428 9.91663 33.2461 9.91663 28.8711V28.3344C11.4216 28.3344 12.6583 27.0978 12.6583 25.5928C12.6583 24.0878 11.4216 22.8511 9.91663 22.8511V22.3144C9.92829 17.9394 11.0133 16.8428 15.3883 16.8428H26.32C30.695 16.8428 31.7916 17.9394 31.7916 22.3144V23.4111C30.2866 23.4111 29.0616 24.6244 29.0616 26.1411Z" stroke="#E5E5E5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M25.913 16.8431H15.308L18.7263 13.4247C21.5146 10.6364 22.9146 10.6364 25.703 13.4247L26.403 14.1247C25.668 14.8597 25.493 15.9447 25.913 16.8431Z" stroke="#E5E5E5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.5254 16.8433L18.5254 34.3433" stroke="#E5E5E5" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5 5" />
                                            <rect x="0.5" y="0.5" width="41" height="45" rx="5.5" stroke="#E5E5E5" />
                                        </svg>

                                    </div>
                                </div>


                                <h5 class="font-weight-bold text-center"><?= $detail_kupon["kode_kupon"] ?></h5>
                                <div class="info__transaksi mt-4 mb-5">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>Kode Doorprize</td>
                                            <td class="text-right text-secondary"><?= $detail_kupon["kode_kupon"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Tenant</td>
                                            <td class="text-right"><?= $detail_kupon["tenant"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td class="text-right"><?= $detail_kupon["jumlah"] ?>&nbsp;<i class="fa fa-search" data-toggle="modal" data-target="#exampleModal"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td class="text-right">
                                                <?= date("M, d Y H:iA", strtotime($detail_kupon["tanggal"]));
                                                $foto = $detail_kupon["foto"]
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td class="text-right text-secondary"><?= $detail_kupon["status"] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <a href="<?= base_url('Kupon') ?>" class="btn__blue_gradient_small d-block">Kembali</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


    <div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5>Detail Gambar Nota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="<?= base_url('assets/img/member_kupon/' . $detail_kupon["foto"]); ?>" width="300">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                </div>
            </div>
        </div>
    </div>




</body>