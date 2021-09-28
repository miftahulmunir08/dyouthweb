<!-- <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script> -->
<!-- jQuery CDN - Slim version (=without AJAX) -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script type="text/javascript">
    // alert("<?= $cenvertedTime ?>");

    function clickEvent(first, last) {

        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#box_notif").mCustomScrollbar({
            theme: "minimal"
        });

        $('.overlay').click(function(e) {
            $('#box_notif').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#bell').click(function(e) {
            $('#box_notif').addClass('active');
            $('.overlay').addClass('active');
        });
    });
</script>

<script>
    // document.addEventListener('contextmenu', event => event.preventDefault());
</script>

<script>
    $(document).keydown(function(e) {

        if (e.which === 123) {

            return false;
        }
        if (e.which == 17 && e.which == 67) {

            return false;
        }

        if (e.which == 17 && e.which == 85) {

            return false;
        }

        if (e.which == 17 && e.which == 86) {

            return false;
        }
        if (e.which == 115) {

            return false;
        }
    });
</script>





</body>

</html>