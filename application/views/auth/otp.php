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
                    <img src="<?= base_url('assets/') ?>img/dyouth.png" alt="">
                </div>
                <div class="card card__form">
                    <div class="card-body">

                        <?php
                        // var_dump($this->session->userdata('date'));
                        // die;


                        if ($this->session->flashdata('flash')) :
                        ?>

                            <div class="alert alert-<?= $this->session->flashdata('color'); ?> alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?= $this->session->flashdata('flash'); ?><strong> </strong>
                            </div>

                        <?php endif; ?>

                        <h6 class="font-weight-bold">Verifikasi Akun</h6>
                        <p class="text__black">Kode sudah terkirim ke Whatsapp. Silakan masukan
                            kode untuk verifikasi akunmu</p>
                        <form action="" id="form" autocomplete="off" method="post">

                            <!-- let inputVal = document.getElementsByClassName("inputClass")[0].value;
                            // Displaying the value
                            alert(inputVal); -->



                            <div class="d-flex mb-5 mt-3">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify" name="satu[]" id="ist" onkeyup="clickEvent(this,'sec')">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify" name="satu[]" id="sec" onkeyup="clickEvent(this,'third')">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify" name="satu[]" id="third" onkeyup="clickEvent(this,'fourth')">
                                <input type="tel" maxlength="1" pattern="[0-9]" class="form__verify" name="satu[]" id="fourth" onkeyup="clickEvent(this,'fifth')">
                            </div>
                            <?= form_error('satu[]', '<small class="text-danger text-danger">',  '</small>') ?>

                            <p>Didn’t get the code? <a href="<?= base_url('Auth/resend') ?>" class="forgot__link font-weight-bold">Resend it
                                    (<span id="demo"></span>)</a></p>

                            <button type="submit" id="sendlogin" class="button btn__login d-block btn-block"><i class="loading-icon fa fa-spinner fa-spin hide"></i>
                                <span class="btn-txt">Verify</span></button>


                        </form>



                    </div>
                </div>