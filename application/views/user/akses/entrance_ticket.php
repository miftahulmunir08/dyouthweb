<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="header pb-1 background__entrance_tiket">

                <nav class="navbar navbar-dark navbar__z">
                    <a href="<?= base_url('Akses') ?>" class="navbar__menu text-white font-weight-bold">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.92993L3.5 11.9999L9.57 18.0699" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.5 12H3.66998" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </nav>
                <div class="row justify-content-center align-items-center m-0 mt-3 mb-5">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4">
                        <div class="card custome__card_transparant">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-11">
                        <div class="card custome__card__content mt-5 mb-5">
                            <div class="card-body pt-4 pb-4 entrance__tiket_content m-3">
                                <h6 class="text-center mb-3">Youth Fest 2021 - Tiket Harian</h6>
                                <p class="text-center">
                                    Pilih tanggal untuk melihat ketersediaan tiket. Persediaan
                                    tiket terbatas demi tetap mematuhi protokol kesehatan
                                </p>

                                <div class="slot__tiket">
                                    <span>Ketersediaan</span>
                                    <span class="jml__tiket"><b>1000 Peserta</b></span>
                                </div>

                                <!-- <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
 -->
                                <form action="<?= base_url('akses/Entrance') ?>" method="post">
                                    <div class="date__tiket">
                                        <label for="date" class="d-block">Pilih tanggal </label>
                                        <input type="text" id="date" class="date d-block btn-block" name="tanggal" placeholder="dd/mm//yyyy">
                                        <?= form_error('tanggal', '<small class="text-danger">',  '</small>') ?>
                                    </div>

                                    <p class="text-justify mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        tricies volut Sit velit ulpat id nibh ligula et enim. Facilisis nisi, dolor vitae at
                                        lacinia gravida mauris at. Adipiscing eget augue scelerisque cursus lacus, eget.</p>

                                    <button type="submit" class="btn__blue_gradient_small d-block btn-block">Pesan
                                        tiket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
    </script>

    <script type="text/javascript">
        $(".date").datepicker({
            format: "dd-mm-yyyy",
        });
    </script>



</body>