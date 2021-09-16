<footer class="sticky-footer bg-white">
    <div class="container">
        <div class="col-sm-12 mt-3">
            <div class="row">

                <div class="col-sm-3 float-left">
                    <div class="form-group">
                        <div class="form-groupt">
                            <label for="date">Pilih Tanggal</label>
                            <input type="text" id="tanggal" class="form-control" name="date" placeholder="Pilih Tanggal" value="<?= set_value('date') ?>" />
                            <?= form_error('date', '<small class="text-danger">',  '</small>') ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 float-left">
                    <div class="form-group">
                        <div class="form-groupt">
                            <label for="date">Masukkan Hotel</label>
                            <input type="text" class="form-control" id="hoteltxt" name="hotel" placeholder="Input Hotel" value="<?= set_value('hotel') ?>" />
                            <?= form_error('hotel', '<small class="text-danger">',  '</small>') ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 float-left">
                    <div class="form-group">
                        <div class="form-groupt">
                            <label for="date">Pilih Guide</label>
                            <input type="text" class="form-control" id="guidetxt" name="guide" placeholder="Input Guide" value="<?= set_value('guide') ?>" />
                            <?= form_error('guide', '<small class="text-danger">',  '</small>') ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 float-left">
                    <div class="form-group">
                        <div class="form-groupt">
                            <label for="date">Input Tour Leader </label>
                            <input type="text" class="form-control" id="tourleadertxt" name="tourleader" placeholder="Input Tour Leader" value="<?= set_value('tourleader') ?>" />
                            <?= form_error('tourleader', '<small class="text-danger">',  '</small>') ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 float-left">
                    <div class="form-group">
                        <div class="form-groupt">
                            <label for="date">Input Kode Khusus </label>
                            <input type="text" class="form-control" id="kodetxt" name="kode_khusus" placeholder="Input Kode Khusus" value="<?= set_value('kode_khusus') ?>" />
                            <?= form_error('kode_khusus', '<small class="text-danger">',  '</small>') ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 float-left">
                <h6><?= $harga["total"] ?> Orang Booking</h6>
                <h4 style="font-weight: bold;"><?= "Rp " . number_format($harga["harga"], 0, '.', '.') ?></h4>
                <!-- <td><?= $harga["rincian"]; ?></td> -->
                <!-- <h6><?= $harga["untung"] ?></h6> -->
            </div>


            <a href="<?= base_url() ?>agen/addagenperseorangan" data-toggle="modal" data-target="#logoutModal" class="btn btn-primary btn-lg mb-3 float-right">Booking</a>
            <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">as</a> -->
        </div>

    </div>
</footer>


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Booking</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= "booked"; ?>" method="post">
                    Apakah akan melakukan booking untuk <?= $harga["total"] ?> orang dengan total nominal Rp. <?= number_format($harga["harga"], 2, ',', ',');                                                                                                                ?>
            </div>


            <input type="text" name="kode" class="form-control" value="<?= $booking[0]["kode_agen"]; ?>">
            <input type="text" name="booking" class="form-control" value="<?= $kodebooking ?>">
            <input type="text" id="untung" name="untung" class="form-control" value=<?= $harga["untung"]; ?>>
            <input type="text" id="tanggal2" name="date" class="form-control">
            <input type="text" name="harga" class="form-control" value=<?= $harga["harga_caspla"]; ?>>
            <input type="text" name="total" class="form-control" value=<?= $harga["total"]; ?>>
            <input type="text" name="kodekhusus" id="kodee" class="form-control" value="">
            <input type="text" class="form-control" id="hotel" name="hotel" value="">
            <input type="text" class="form-control" id="guide" name="guide" value="">
            <input type="text" class="form-control" id="tourleader" name="tourleader" value="">


            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Iya</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- End of Footer -->


<script>
    $("#paket").on("change", function() {
        //Getting Value
        var selValue = $("#paket").val();
        //Setting Value
        $("#paket2").val(selValue);
        // alert('halo');
    });

    $(function() {
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
    });


    var nameValue = "";
    $("input[id=tanggal]").change(function() {
        nameValue = $(this).val();
        $("#tanggal2").val(nameValue);
    });

    $('#hoteltxt').change(function() {
        $('#hotel').val($(this).val());
    });

    $('#kodetxt').change(function() {
        $('#kodee').val($(this).val());
    });

    $('#tourleadertxt').change(function() {
        $('#tourleader').val($(this).val());
    });

    $('#guidetxt').change(function() {
        $('#guide').val($(this).val());
    });


    // $("#guide_caspla").on("change", function() {
    //     //Getting Value
    //     var selValue = $("#guide_caspla").val();
    //     //Setting Value
    //     $("#guide").val(selValue);
    //     // alert('halo');
    // });
</script>