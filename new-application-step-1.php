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
                                <li class="breadcrumb-item"><a href="licensing-management.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="case-records.php">NFD</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration, Certficate, Permit and Licenses</li>
                            </ol>
                        </nav>
                    </div>

                    <!-- steps -->
                    <ul class="ct-stepper d-flex justify-content-center">
                        <li class="stepper-item active"> Registration, Certificate, Permit and Licenses </li>
                        <li class="stepper-item">Station/Equipment / System/Others</li>
                        <li class="stepper-item">Lorem ipsum dolor sit.</li>
                    </ul>

                    <!-- cards container -->
                    <div class="ct-application-cards">
                        <div class="ct-cards-grid frm__radio-group">

                            <!-- card  -->
                            <input class="input--hidden" type="radio" id="sample-type-1" name="new-application-type">
                            <label class="ct-card ct-card--colored" for="sample-type-1">
                                <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Authority (CA) / Provisional Authority (PA) </h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>
                            </label>


                            <!-- card with overlay for choices [WITH CLASS: ct-card--withOverlay] -->
                            <input class="input--hidden" type="radio" id="sample-type-3" name="new-application-type">
                            <label class="ct-card ct-card--colored ct-card--withOverlay" for="sample-type-3">
                                <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Public Convenience (CPC) / Provisional Authority (PA) </h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>

                                <!-- new or extention? -->
                                <div class="ct-overlay-options">
                                    <a class="btn btn--light br--xs" href="new-application-step-badges.php">New</a>
                                    <a class="btn btn--light br--xs" href="new-application-step-badges.php">Extension</a>
                                </div>
                            </label>

                            <!-- card  -->
                            <input class="input--hidden" type="radio" id="sample-type-4" name="new-application-type">
                            <label class="ct-card ct-card--colored" for="sample-type-4">
                                <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Public Convenience (CPCN) / Provisional Authority (PA) </h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>
                            </label>

                            <!-- card with overlay for choices [WITH CLASS: ct-card--withOverlay] -->
                            <input class="input--hidden" type="radio" id="sample-type-5" name="new-application-type">
                            <label class="ct-card ct-card--colored ct-card--withOverlay" for="sample-type-5">
                                <h2 class="text--rg font--tertiary color--tertiary"> Others </h2>
                                <span class="hyperlink hyperlink--primary" href="#">Click here <i class="fe fe-arrow-right ml-2"></i></span>

                                <!-- Deed of Sale and Transfer or Transfer of Location? -->
                                <div class="ct-overlay-options">
                                    <a class="btn btn--light br--xs" href="new-application-step-badges.php">Deed of Sale and Transfer</a>
                                    <a class="btn btn--light br--xs" href="new-application-step-badges.php">Transfer of Locationn</a>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- cta -->
                    <div class="d-flex justify-content-end mt-3">
                        <a class="btn btn--primary px-3" href="new-application-step-badges.php">Next <i class="fa fa-chevron-right ml-2"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>