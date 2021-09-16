<html>

<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#state").on("input", function() {
                var id = $(this).val();


            });
        });
    </script>

</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">

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
                        alert("You will now be redirected.");
                        window.location = "//" + BASE_URL('Dompet/detail/?id='.data.name) + "/";

                    }
                },
                error: function() {
                    alert("gagal");
                },
            });
            return false;

        });
    </script>


</body>

</html>