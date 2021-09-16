<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content" class="bg-light">
            <div class="header bg__blue_gradient pb-1" style="height: 700px;">


                <nav class="navbar navbar-dark navbar__z">
                    <a type="button" href="<?= base_url() ?>homepage" class="navbar__menu text-white font-weight-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                </nav>

                <nav class="navbar navbar-dark navbar__z">
                    <div class="navbar__title mx-auto" href="#">

                    </div>
                    <div>
                    </div>
                </nav>
                <div class="row justify-content-center align-items-center m-0 header__profile_edit mt-5">
                    <div class="col-11 col-md-8 col-lg-6 col-xl-4 mt-5">
                        <div class="text-center mt-5">
                            &nbsp;
                        </div>
                        <div class="akses__event text-center mt-5 mb-4">
                            <span class="">Under Maintenance</span>
                            <h4 class="mt-3">
                                Coming Soon
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!-- Bootstrap 4 - JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Bootstrap 4 - CSS -->

    <!-- JS Sidebar -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

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
    <!-- End JS Sidebar -->

    <!-- Notif -->
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
</body>