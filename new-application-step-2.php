<?php
include("header.php");
?>

<?php
include("client-header.php");
?>

<main class="cd-main-content cd-main-content--client">
    <div class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="ct-page__title">New Application</h1>
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="case-records.php">NFD</a></li>
                                <li class="breadcrumb-item"><a href="case-records.php">Registration, Certficate, Permit and Licenses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Station/Equipment/System/Others</li>
                            </ol>
                        </nav>
                    </div>

                    <!-- steps -->
                    <ul class="ct-stepper d-flex justify-content-center">
                        <li class="stepper-item done"> Registration, Certificate, Permit and Licenses </li>
                        <li class="stepper-item done">Station/Equipment / System/Others</li>
                        <li class="stepper-item">Lorem ipsum dolor sit.</li>
                    </ul>

                    <!-- cards container -->
                    <div class="ct-application-cards">
                        <div class="ct-cards-grid frm__radio-group">

                            <!-- card with overlay for choices [WITH CLASS: ct-card--withOverlay] -->
                            <input class="input--hidden" type="radio" id="sample01" name="new-application-type">
                            <label class="ct-card ct-card--colored ct-card--withOverlay" for="sample01">
                                <h2 class="text--rg font--tertiary color--tertiary"> BTS</h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>

                                <!-- new or extention? -->
                                <div class="ct-overlay-options">
                                    <a class="btn btn--light br--xs" href="#">New</a>
                                    <a class="btn btn--light br--xs" href="#">Extension</a>
                                </div>
                            </label>

                            <!-- card  -->
                            <input class="input--hidden" type="radio" id="sample02" name="new-application-type">
                            <label class="ct-card ct-card--colored" for="sample02">
                                <h2 class="text--rg font--tertiary color--tertiary"> Fixed (FX) – (MW/WDN)</h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>
                            </label>

                            <!-- card -->
                            <input class="input--hidden" type="radio" id="sample03" name="new-application-type">
                            <label class="ct-card ct-card--colored" for="sample03">
                                <h2 class="text--rg font--tertiary color--tertiary"> Land Base (FB) – (BTS/WLL/BWA/WDN) </h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>
                            </label>

                        </div>
                    </div>

                    <!-- cta -->
                    <div class="d-flex justify-content-end mt-3">
                        <a class="btn btn--success px-4" href="new-application-case.php">Submit</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>