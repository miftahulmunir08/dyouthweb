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


    <?php
    if ($this->session->flashdata('flash')) :
    ?>

        <div class="col-12">
            <div class="alert alert-<?= $this->session->flashdata('color'); ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= $this->session->flashdata('flash'); ?><strong> </strong>
            </div>
        </div>

    <?php endif; ?>

    <?php
    if ($_GET['id']) { ?>

        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Top Up Kepeng</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <form action="<?= base_url('changer/Dashboard/withdraw') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="id_user" value="<?= $_GET['id']; ?>">
                                <?= form_error('id_user', '<small class="text-danger">',  '</small>') ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="acara">Jumlah Kepeng</label>
                                <input type="text" class="form-control" name="nominal" placeholder="nominal" value="<?= set_value("acara") ?>">
                                <?= form_error('nominal', '<small class="text-danger">',  '</small>') ?>
                            </div>
                        </div>

                        <a href="<?= base_url('Changer/Dashboard/topup') ?>" class="btn btn-danger float-right">Kembali</a>
                        <button type="submit" class="btn btn-primary float-right mr-1">Withdraw Kepeng</button>

                    </form>
                </div>
            </div>
        </div>
        </div>

    <?php } else { ?> <form action="" method="post" enctype="multipart/form-data">
            <div class="container">

                <div class="col-md-12 text-center">
                    <video id="preview" width=""></video>
                </div>
                <div class="col-md-12 text-center">

                    <label>SCAN QR CODE</label>
                    <input type="text" name="text" id="state" readonyy="" placeholder="scan qrcode" class="form-control" autofocus>
                </div>
            </div>
            </div>
        </form>



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
                    url: "<?= site_url('Dompet/Scan1'); ?>",
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
                        if (data.name != null) {
                            alert(data.name);
                            // window.location = "//" + BASE_URL('Changer/Dashboard/topup/?id='.data.name) + "/";
                            location.href = "https://localhost/nouvacore/event2/Changer/Dashboard/withdraw?id=" + data.id;
                        }
                    },
                    error: function() {
                        alert("gagal");
                    },
                });
                return false;

            });
        </script>
    <?php } ?>