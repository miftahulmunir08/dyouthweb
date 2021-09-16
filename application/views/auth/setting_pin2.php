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


    <!-- <?= var_dump($this->session->userdata("kode")) ?> -->

    <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-11 col-md-8 col-lg-6">
                <div class="text-center mb-4">
                    <img src="<?= base_url() ?>/assets/img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">

                        <?php
                        if ($this->session->flashdata('flash')) :
                        ?>

                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?= $this->session->flashdata('flash'); ?><strong> </strong>
                            </div>

                        <?php endif; ?>


                        <h6 class="font-weight-bold">Konfirmasi Pin</h6>
                        <p class="text__black">Konfirmasi pin anda. Pastikan pin anda sama dengan sebelumnya.</p>
                        <form id="form" action="<?= base_url('Auth/setting_pin2'); ?>" autocomplete="off" method="post">
                            <div class="d-flex mb-4 mt-3">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="ist" onkeyup="clickEvent(this,'sec')" name="kode[]">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="sec" onkeyup="clickEvent(this,'third')" name="kode[]">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="third" onkeyup="clickEvent(this,'fourth')" name="kode[]">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="fourth" onkeyup="clickEvent(this,'five')" name="kode[]">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="five" onkeyup="clickEvent(this,'six')" name="kode[]">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify_pin" id="six" onkeyup="clickEvent(this,'seven')" name="kode[]">
                            </div>
                            <?= form_error('kode[]', '<small class="text-danger text-danger">',  '</small>') ?>

                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"><i class="loading-icon fa fa-spinner fa-spin hide"></i>
                                <span class="btn-txt">Lanjutkan</span></button>
                        </form>
                    </div>
                </div>