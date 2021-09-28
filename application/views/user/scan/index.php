<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#state").on("input", function() {
            var id = $(this).val();
        });
    });
</script>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->

        <!-- Bottom Navbar -->


        <!-- Page Content  -->
        <div id="content" class="bg-light">
            <div class="header bg__blue_gradient pb-3 full__hight">

                <nav class="navbar navbar-dark navbar__z">
                    <button type="button" id="sidebarCollapse" class="navbar__menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar__title text-center" href="#">
                        <span>Barcode</span>
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
                <div class="row barcode">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-4 offset-lg-4">
                        <div class="card mt-3">
                            <div class="card-body">
                                <!-- <video id="video" autoplay class="d-flex align-items-center"></video> -->
                                <video id="preview" clas="d-flex align-items-center" style="width: 100%"></video>
                                <input type="text" name="text" id="state" readonyy="" placeholder="scan qrcode" class="form-control" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>

    <div class="card notifications__card" id="box_notif">
        <div class="card-body">
            <h6>Notifikasi</h6>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
            <div class="notif__list">
                <img src="assets/img/profile/profile.png" class="rounded float-left">
                <div>
                    <span class="title__name">
                        Youth Festival 2021
                        <b class="float-right time__notif">5 jam yang lalu</b>
                    </span>
                    <span class="title__notif">Selamat anda sudah mendaftar sebagai
                        peserta Youth Festival 2021</span>
                </div>
            </div>
        </div>
    </div>


    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }

        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan', function(c) {
            document.getElementById('state').value = c;
            $("state").text(c);
            $.ajax({
                url: "<?= site_url('Dompet/bayar'); ?>",
                method: "POST",
                data: {
                    id: c
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    // if (!!data && data != null) {
                    //     // alert(data.name);
                    //     location.href = BASE_URL('Dompet/detail/?id='.data.name);

                    // } else {
                    //     alert('No data');
                    // }
                    if (data != null) {
                        alert(data);
                        // window.location = "//" + BASE_URL('Dompet/detail/?id='.data.name) + "/";

                    }
                },
                error: function() {
                    alert("gagal");
                    alert(data);
                },
            });
            return false;

        });
    </script>

</body>