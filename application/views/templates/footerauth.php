<p class="copyright__login">Youth Festival © 2021</p>
<p class="copyright__login">Powered By <a href="https://kepeng.io/" target="_blank"><span> <img src="<?= base_url('assets') ?>/img/kepeng-02.png" alt="" class="" width=25></span> KEPENG.IO</a></p>
</div>
</div>
</div>

<?php


$cenvertedTime = $this->session->userdata('date');
?>




<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
</script>


<script>
    $(document).ready(function() {
        $(".button").on("click", function() {
            $(".result").text("");
            $(".loading-icon").removeClass("hide");
            $(".button").attr("disabled", true);
            $(".btn-txt").text("Dalam Proses, Silahkan Ditunggu...");
            $("#form").submit();
        });
    });
</script>


<script>
    (function($, undefined) {

        "use strict";

        // When ready.
        $(function() {

            var $form = $("#form");
            var $input = $form.find("input.inf");
            $input.on("keyup", function(event) {


                // When user select text in the document, also abort.
                var selection = window.getSelection().toString();
                if (selection !== '') {
                    return;
                }

                // When the arrow keys are pressed, abort.
                if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
                    return;
                }

                var $this = $(this);
                var input = $this.val();
                input = input.replace(/[\W\s\._\-]+/g, '');

                var split = 4;
                var chunk = [];

                for (var i = 0, len = input.length; i < len; i += split) {
                    split = (i >= 0 && i <= 2) ? 2 : 4;
                    chunk.push(input.substr(i, split));
                }

                $this.val(function() {
                    return chunk.join("-").toUpperCase();
                });

            });


        });
    })(jQuery);
</script>


<script type="text/javascript">
    // alert("<?= $cenvertedTime ?>");

    function clickEvent(first, last) {

        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }
</script>



<script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?= $cenvertedTime  ?>").getTime();


    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = minutes + ":" + seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "0:00";
        }
    }, 1000);
</script>



<script type="text/javascript">
    function clickEvent(first, last) {

        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }
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