<?php
include("header.php");
?>

<main class="bg--landing">
    <section class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ct-landing__header">
                        <img class="brand-logo" src="assets/img/logo/ntc-logo.png" alt="NTC | National Telecommunications Commission">
                    </div>

                    <div class="ct-login__body">
                        <div class="ct-cards-wrapper">
                            <div class="ct-login__card ct-card ct-card--md">
                                <div id="login-content">
                                    <h1 class="text--lg font--tertiary mb-4">Login</h1>
                                    <form action="">
                                        <div class="form-group form-group--rounded">
                                            <!-- *** Note: the value of <label for=""> must be the same with <input id=""> tyy *** -->
                                            <input class="frm__input" type="text" id="sample-username" data-validation="strength" data-validation-strength="2" required>
                                            <label class="frm__label" for="sample-username">Username or Email Address</label>
                                        </div>
                                        <div class="form-group form-group--rounded frm--danger mb-2">
                                            <!-- *** Note: the value of <label for=""> must be the same with <input id=""> tyy *** -->
                                            <input class="frm__input" type="password" id="sample-password" data-validation="strength" data-validation-strength="2" value="sample" required>
                                            <label class="frm__label" for="sample-password">Password</label>

                                            <!-- sample error message -->
                                            <small class="frm__guidetext frm__guidetext--danger">Password is invalid.</small>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a class="hyperlink hyperlink--primary" id="btn-forgot-pass" href="#">Forgot your password?</a>
                                        </div>
                                        <a class="btn btn--primary btn--full-width my-4" href="service-units.php"> Sign In </a>
                                    </form>
                                    <p class="text-center mt-2 mb-0">Don't have an account? <a class="hyperlink hyperlink--secondary" href="registration.php">Sign Up</a></p>
                                </div>

                                <div id="forgot-pass-content">
                                    <a class="btn btn--md btn-back p-0 hover--left" href="#"><i class="fe fe-arrow-left"></i></a>
                                    <h1 class="text--lg font--tertiary my-4">Forgot Password?</h1>
                                    <p class="mb-4">Enter your email address you're using for your account below and we will send you a password reset link.</p>
                                    <form action="">
                                        <div class="form-group form-group--rounded">
                                            <!-- *** Note: the value of <label for=""> must be the same with <input id=""> tyy *** -->
                                            <input class="frm__input" type="email" id="sample-email" data-validation=" strength" data-validation-strength="2" required>
                                            <label class="frm__label" for="sample-email">Enter your email here</label>
                                        </div>
                                        <a class="btn btn--primary btn--full-width" href="reset-pass-link.php"> Send Reset Link </a>
                                    </form>
                                </div>
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