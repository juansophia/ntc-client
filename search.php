<?php
include("header.php");
?>

<main class="bg--building">
    <section class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                    <div class="ct-search">
                        <div class="form">
                            <div class="form-group">
                                <label class="frm__label">Please Enter a Case Number </label>
                                <div class="frm__select-group mt-3">
                                    <select class="frm__input select2--search" name="sample">
                                        <option value=""></option>
                                        <option value="A">2019-223</option>
                                        <option value="B">2019-985</option>
                                        <option value="B">2019-575</option>
                                        <option value="D">2019-234</option>
                                        <option value="E">2019-783</option>
                                        <option value="F">2019-985</option>
                                    </select>
                                    <i class="select__icon fe fe-search" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <a class="btn btn--primary" href="hearing-notices.php">Proceed <i class="fe fe-chevron-right ml-2"></i></a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>


<!-- Compiled external plugins ex: swiper.js etc -->
<script src="assets/js/vendor/select2.min.js"></script>
<script src="assets/js/vendor/jquery.mask.min.js"></script>


<!-- select2 -->
<script>
    $(document).ready(function() {
        $('.select2--search').select2({
            placeholder: "Search",
            allowClear: true,
        });
        $('.select2-selection--single').addClass('frm__input');
    });
</script>


</body>

</html>