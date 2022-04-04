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
                    <!-- <ul class="ct-stepper d-flex justify-content-center">
                        <li class="stepper-item active"> Registration, Certificate, Permit and Licenses </li>
                        <li class="stepper-item">Station/Equipment / System/Others</li>
                        <li class="stepper-item">Lorem ipsum dolor sit.</li>
                    </ul> -->

                    <!-- cards container -->
                    <div class="ct-application-cards">
                        <div class="ct-cards-grid frm__radio-group">

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">
                                <select class="frm__input select2" name="sample">
                                    <option value=""></option>
                                    <option value="A">2019-223</option>
                                    <option value="B">2019-985</option>
                                    <option value="B">2019-575</option>
                                    <option value="D">2019-234</option>
                                    <option value="E">2019-783</option>
                                    <option value="F">2019-985</option>
                                </select>

                                <div class="ct-card ct-card--neutral" for="sample-type-1">
                                    <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Authority (CA) / Provisional Authority (PA) </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end : card with select2 dropdown  -->

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">

                                <div class="ct-card ct-card--neutral" for="sample-type-1">
                                    <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Authority (CA) / Provisional Authority (PA) </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end : card with select2 dropdown  -->
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