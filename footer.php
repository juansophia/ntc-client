<?php include("sidebar.php"); ?>
<?php include("modals.php"); ?>
<?php include("floating-back-to-top.php"); ?>

<!--  Details Sidebar/Drawer -->
<?php include("drawers.php"); ?>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>


<!-- Compiled external plugins ex: swiper.js etc -->
<script src="assets/js/vendor/select2.min.js"></script>
<script src="assets/js/vendor/jquery.mask.min.js"></script>
<script src="assets/js/vendor/dropify.js"></script>
<script src="assets/js/vendor/lottie-player.js"></script>
<script src="assets/js/vendor/bootstrap-drawer.js"></script>

<!-- for hour:minute dropdown input on file complaints page -->
<script src="assets/js/vendor/moment.min.js"></script>
<script src="assets/js/vendor/combodate.js"></script>


<!--  -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/app.js"></script>

<!-- input mask used in Phone Number -->
<script>
    $(document).ready(function() {
        $('.frm__input--phone').mask('000-000-0000');

    });
</script>

<!-- select2 -->
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('.select2-selection--single').addClass('frm__input');
    });
</script>

<!-- drag & drop plugin for file upload -->
<script>
    $(".dropify").dropify();
</script>



<!-- ENTRANCE & EXIT of login/reset password blocks -->
<script>
    const section_login = $('#login-content');
    const section_forgotpass = $('#forgot-pass-content');
    const btn_forgotpass = $('#btn-forgot-pass');
    const btn_back_forgotpass = $('#forgot-pass-content .btn-back');

    section_forgotpass.hide();

    btn_forgotpass.click(function() {
        section_login.hide();
        section_forgotpass.fadeIn();
    });

    btn_back_forgotpass.click(function() {
        section_forgotpass.hide();
        section_login.fadeIn();
    });
</script>

<!-- Updates the placeholder with the filename of the chosen file -->
<script>
    const actual_file = document.querySelector('#sample-duly-signatory');
    const chosen_file_text = document.querySelector('.frm__file-text');
    actual_file.addEventListener('change', function() {
        chosen_file_text.textContent = this.files[0].name;
        chosen_file_text.style.color = "black";
    })
</script>


<!-- Combodate plugin for hour:minute dropdown input on file complaints page -->
<script>
    $(function() {
        $('.combodate').combodate({
            firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
            minuteStep: 1
        });
    });
</script>

<!-- Floating 'back to top' button when the page is long (see order-of-payment.php) -->
<script>
    $('#back-to-top-btn').hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1200) {
            $('#back-to-top-btn').fadeIn();
        } else {
            $('#back-to-top-btn').fadeOut();
        }
    });
    $('#back-to-top-btn').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
</script>

<!-- toggle account info and company info under 'Profile' -->
<script>
    // hidden by default
    $('.ct-profile__company-container').hide();

    $('#prof-account-tab').click(function() {
        $(this).addClass("active");
        $('#prof-company-tab').removeClass("active");

        $('.ct-profile__company-container').hide();
        $('.ct-profile__account-container').show();
    })

    $('#prof-company-tab').click(function() {
        $(this).addClass("active");
        $('#prof-account-tab').removeClass("active");

        $('.ct-profile__account-container').hide();
        $('.ct-profile__company-container').show();
    })
</script>

</body>

</html>