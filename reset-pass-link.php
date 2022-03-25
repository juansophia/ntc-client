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
                            <div class="ct-login__card ct-card ct-card--md ct-card--centered">
                                <div class="ct-card__illus">
                                    <lottie-player src="assets/json/lottie/email-verif-icon.json" background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></lottie-player>
                                </div>
                                <h1 class="text--lg font--tertiary text-center">Check your mail!</h1>
                                <p class="text-center">We have e-mailed your password reset link.</p>
                                <a class="btn btn--primary btn--full-width" href="reset-pass.php"> OK </a>
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