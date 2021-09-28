<style>
    .button {
        background-color: #008cba;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button:disabled {
        opacity: 0.5;
    }

    .hide {
        display: none;
    }
</style>

<body class="bg__img">
    <div class="wrapper">
        <!-- Sidebar  -->
        <!-- Page Content  -->
        <div id="content">
            <div class="header pb-1 background__entrance_tiket_undian">

                <nav class="navbar navbar-dark navbar__z">
                    <a type="button" href="<?= base_url() ?>/kupon" class="navbar__menu text-white font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
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
                            <div class="card-body pl-5 pr-5 pt-4 pb-4 entrance__tiket_content">
                                <h6 class="text-center mb-3">#DOORPRIZEDYOUTH
                                </h6>
                                <p class="text-center">
                                    Foto nota belanja di distro, coffee shop
                                    ,barbershop, Studio Musik dan Butik di <b>Kota Denpasar</b>
                                </p>
                                <div class="lane__content_small mt-4 mb-4"></div>
                                <p class="mb-2">Tata cara mengikuti <b>#DOORPRIZEDYOUTH</b> yaitu: </p>
                                <ol class="">
                                    <li>Melakukan transaksi di distro, coffee shop, barbershop, studio musik dan butik di Kota Denpasar. Status usaha tersebut bukan merupakan franchise brand nasional (luar bali)  maupun internasional</li>
                                    <li>Minimal transaksi sebesar Rp. 15.000 dalam 1 struk atau nota dengan rentan waktu transaksi antara tanggal 1 september 2021 hingga 30 Oktober 2021.</li>
                                    <li>Struk atau nota tersebut wajib berisi kop struk atau kop nota. Jika tidak memiliki kop diperbolehkan dengan stempel resmi usaha tersebut.</li>
                                    <li>Foto, upload dan berikan keterangan transaksi dan data diri yang benar di www.dyouthfest.com yg terhubung dengan D’Youth Mobile Application. Kemudian simpan nota / struk tersebut hingga tanggal pengundian.</li>
                                    <li>Setelah berhasil mengupload, para peserta akan mendapatkan nomor undian.</li>
                                    <li>Nomor undian, Identitas diri dan Struk / nota yang asli tersebut merupakan syarat untuk mengambil hadiah.</li>
                                    <li>pemenang dianggap tidak sah apabila didapati melakukan kecurangan dan tidak dapat menunjukan Nomor undian, Identitas diri dan Struk / nota yang asli.</li>
                                    <li>Setiap orang di perbolehkan mendaftar lebih dari 1x dengan struk / nota transaksi yang berbeda.</li>
                                    <li>Keputusan panitia tidak dapat di ganggu gugat.</li>
                                    <li>Informasi lebih lengkap bisa dicek di website 
                                        www.dyouthfest.com</li>
                                </ol>
                                <!-- <button type="button" class="btn__blue_gradient_small d-block btn-block">Ikuti
                                    Undian</button> -->
                                <a href="<?= base_url() ?>kupon/joinKupon" class="button btn__blue_gradient_small d-block btn-block"><i class="loading-icon fa fa-spinner fa-spin hide"></i><span class="btn-txt">Ikuti Undian</span></a>

                                <!-- <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"> <i class="loading-icon fa fa-spinner fa-spin hide"></i> <span class="btn-txt">Reset
                                        password</span></button> -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


    <script>
        $(document).ready(function() {
            $(".button").on("click", function() {
                $(".result").text("");
                $(".loading-icon").removeClass("hide");
                $(".button").attr("disabled", true);
                $(".btn-txt").text("Process, Please Wait...");
                $("#form").submit();
            });
        });
    </script>


</body>