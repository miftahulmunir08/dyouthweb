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

<body class="bg-light">
    <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-11 col-md-8 col-lg-6">
                <div class="text-center mb-4">
                    <img src="<?= base_url() ?>assets/img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">
                        <h6 class="font-weight-bold">Buat Pin</h6>
                        <p class="text__black">Buat pin untuk mengamankan
                            dompet</p>
                        <form id="form" action="<?= base_url('Auth/setting_pin') ?>" method="post" autocomplete="off">
                            <div class="d-flex mb-4 mt-3">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="ist" name="kode[]" onkeyup="clickEvent(this,'sec')" auto-complete="one-time-code">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="sec" name="kode[]" onkeyup="clickEvent(this,'third')" auto-complete="one-time-code">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="third" name="kode[]" onkeyup="clickEvent(this,'fourth')" auto-complete="one-time-code">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="fourth" name="kode[]" onkeyup="clickEvent(this,'five')" auto-complete="one-time-code">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="five" name="kode[]" onkeyup="clickEvent(this,'six')" auto-complete="one-time-code">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="six" name="kode[]" onkeyup="clickEvent(this,'seven')" auto-complete="one-time-code">
                            </div>

                            <?= form_error('kode[]', '<small class="text-danger text-danger">',  '</small>') ?>

                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"><i class="loading-icon fa fa-spinner fa-spin hide"></i>
                                <span class="btn-txt">Lanjutkan</span></button>
                        </form>
                    </div>
                </div>