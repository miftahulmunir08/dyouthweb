<!-- Bootstrap core JavaScript-->
<!-- <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script> -->
<!-- <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<script src="<?= base_url('assets2/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets2/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets2/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets2/'); ?>js/demo/chart-area-demo.js"></script> -->


<script src="<?= base_url('assets2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script> -->
<script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets2/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets2/'); ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets2/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets2/'); ?>js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets2/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets2/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets2/'); ?>js/demo/datatables-demo.js"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />


<script>
  $(document).ready(function() {
    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
      format: 'dd/mm/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    };
    date_input.datepicker(options);
  })
</script>



</body>

</html>