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
                                    <lottie-player src="assets/json/lottie/email-verif-success-icon.json" background="transparent" speed="1" style="width: 150px; height: 150px;" autoplay></lottie-player>
                                </div>
                                <h1 class="text--lg font--tertiary text-center">Verification Success!</h1>
                                <p class="text-center">We have successfully verified your email address. Please wait for your account’s approval.</p>
                                <a class="btn btn--success btn--full-width" href="login.php"> OK </a>
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