<?php
include("header.php");
?>

<main class="bg--landing">
    <!-- 'c' prefix for Client -->
    <section class="ct-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ct-landing__header">
                        <img class="brand-logo" src="assets/img/logo/ntc-logo.png" alt="NTC | National Telecommunications Commission">
                    </div>

                    <div class="ct-landing__body">
                        <div class="ct-cards-wrapper">
                            <div class="ct-card ct-card--rg ct-card--centered hover--up justify-content-around">
                                <img class="icon" src="assets/img/landing/ic-user-register.svg" alt="">
                                <h2 class="text-center text--rg color--primary font--tertiary">New Applicant?</h2>
                                <p class="text-center">Click the button below to proceed with the registration.</p>
                                <a class="btn btn--outline-primary btn--round" href="registration.php">Get Started</a>
                            </div>
                            <div class="ct-card ct-card--rg ct-card--centered hover--up justify-content-around">
                                <img class="icon" src="assets/img/landing/ic-user-login.svg" alt="">
                                <h2 class="text-center text--rg color--primary font--tertiary">Already have an account?</h2>
                                <p class="text-center">Click the button below to sign in..</p>
                                <a class="btn btn--outline-primary btn--round" href="login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--</div>-->
</main>


<?php include("floating-back-to-home.php"); ?>

<?php
include("footer.php");
?>