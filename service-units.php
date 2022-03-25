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
                    <h1 class="ct-page__title">Service Units</h1>

                    <!-- su -- service unit -->
                    <section class="ct-su-container mt-3">
                        <div class="ct-cards-grid frm__radio-group">

                            <!-- card with overlay for choices [WITH CLASS: ct-card--withOverlay] -->
                            <input class="input--hidden" type="radio" id="service-nfd" name="service-unit">
                            <label for="service-nfd" class="ct-su__card hover--border-primary ct-card--withOverlay">
                                <img class="icon" src="assets/img/service-unit/NFD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Network and Facilities
                                    Division (NFD) </h2>

                                <!-- application type options -->
                                <div class="ct-overlay-options">
                                    <a class="btn btn--light br--xs" href="licensing-management.php">List of Applications</a>
                                    <a class="btn btn--light br--xs" href="new-application-step-1.php">New Applications</a>
                                </div>
                            </label>

                            <input class="input--hidden" type="radio" id="service-sid" name="service-unit">
                            <label for="service-sid" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/SID.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Services and
                                    Interconnection Division (SID) </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-srsd" name="service-unit">
                            <label for="service-srsd" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/SRSD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Special Radio Services
                                    Division (SRSD) </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-sscd" name="service-unit">
                            <label for="service-sscd" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/SSCD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Safety Radio Services
                                    and STCW Compliance
                                    Division (SSCD) </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-bsd" name="service-unit">
                            <label for="service-bsd" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/BSD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Broadcast Services
                                    Division (BSD) </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-esd" name="service-unit">
                            <label for="service-esd" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/ESD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center">Equipment Standards
                                    Division (ESD) </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-cs" name="service-unit">
                            <label for="service-cs" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/CS.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Commission Secretariat
                                    (ComSec) </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-cwpd" name="service-unit">
                            <label for="service-cwpd" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/CWPD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Consumer Welfare and
                                    Protection Division </h2>
                            </label>

                            <input class="input--hidden" type="radio" id="service-eod" name="service-unit">
                            <label for="service-eod" class="ct-su__card hover--border-primary">
                                <img class="icon" src="assets/img/service-unit/EOD.png" alt="">
                                <h2 class="text--rg font--tertiary color--tertiary text-center"> Enforcement and
                                    Operations Division
                                    (EOD)</h2>
                            </label>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <a class="btn btn--primary" href="new-application-step-1.php">Next <i class="fa fa-chevron-right ml-2"></i></a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>