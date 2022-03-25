<?php
include("header.php");
?>

<main class="">
    <section class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-landing__header">
                        <img class="brand-logo" src="assets/img/logo/ntc-logo.png" alt="NTC | National Telecommunications Commission">
                    </div>

                    <div class="ct-login__body">
                        <div class="ct-cards-wrapper">
                            <div class="ct-login__card ct-card ct-card--md">
                                <h1 class="text--lg font--tertiary mb-4">Reset Password</h1>
                                <p class="mb-4">Set the new password for your account so you can login and access all the features</p>
                                <form action="">
                                    <div class="form-group form-group--rounded">
                                        <!-- *** Note: the value of <label for=""> must be the same with <input id=""> tyy *** -->
                                        <input class="frm__input" type="password" id="sample-password" data-validation="strength" data-validation-strength="2" required>
                                        <label class="frm__label" for="sample-password">Password</label>
                                    </div>
                                    <div class="form-group form-group--rounded">
                                        <!-- *** Note: the value of <label for=""> must be the same with <input id=""> tyy *** -->
                                        <input class="frm__input" type="password" id="sample-conf-password" data-validation="strength" data-validation-strength="2" required>
                                        <label class="frm__label" for="sample-conf-password">Confirm Password</label>
                                    </div>
                                    <a class="btn btn--primary btn--full-width" href="reset-pass-success.php"> Reset Password </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
include("footer.php");
?>