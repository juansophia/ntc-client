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
                    <h1 class="ct-page__title">Application Type</h1>
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="licensing-management.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Application</li>
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
                        <div class="ct-cards-grid">

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">
                                <div class="ct-card ct-card--neutral">
                                    <div>
                                        <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Authority (CA) / Provisional Authority (PA) </h2>
                                        <span class="frm__select-text"></span>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>

                                    <!--select2 dropdown-->
                                    <select class="frm__input select2" name="sample">
                                        <option value="A">Option 1</option>
                                        <option value="A">Option 2</option>
                                        <option value="A">Option 3</option>
                                        <option value="A">Option 4</option>
                                        <option value="A">Option 5</option>

                                    </select>
                                    <!--/select2 dropdown-->
                                </div>
                            </div>

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">
                                <div class="ct-card ct-card--neutral">
                                    <div>
                                        <h2 class="text--rg font--tertiary color--tertiary"> Certificate of Authority (CA) / Provisional Authority (PA) </h2>
                                        <span class="frm__select-text"></span>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>

                                    <!--select2 dropdown-->
                                    <select class="frm__input select2" name="sample">
                                        <option value="A">New</option>
                                        <option value="B">Lorem</option>
                                    </select>
                                    <!--/select2 dropdown-->
                                </div>
                            </div>

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">
                                <div class="ct-card ct-card--neutral">
                                    <div>
                                        <h2 class="text--rg font--tertiary color--tertiary">
                                            Certificate of Public
                                            Convenience and Necessity
                                            (CPCN) /Provisional
                                            Authority (PA)
                                        </h2>
                                        <span class="frm__select-text"></span>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>
                                </div>
                            </div>

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">
                                <div class="ct-card ct-card--neutral">
                                    <div>
                                        <h2 class="text--rg font--tertiary color--tertiary">
                                            Pleading
                                        </h2>
                                        <span class="frm__select-text"></span>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>

                                    <!--select2 dropdown-->
                                    <select class="frm__input select2" name="sample">
                                        <option>Application/Petition</option>
                                        <option>Joint Petition</option>
                                        <option>Formal Offer Of Evidence (Foe)</option>
                                        <option>Oppositor’s Formal Offer Of Evidence</option>
                                        <option>Motion For Extension Of Provisional Authority</option>
                                        <option>Motion To Resolve Pending Motion For Extension Of PA</option>
                                        <option>Motion For Extension Of Certificate Of Authority </option>
                                        <option>Motion For Extension/Renewal Of Certificate Of Authority </option>


                                    </select>
                                    <!--/select2 dropdown-->
                                </div>
                            </div>

                            <!-- start : card with select2 dropdown  -->
                            <div class="frm__select-card">
                                <div class="ct-card ct-card--neutral">
                                    <div>
                                        <h2 class="text--rg font--tertiary color--tertiary">
                                            Others
                                        </h2>
                                        <span class="frm__select-text"></span>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font--tertiary color--tertiary">Click here </span>
                                        <span class="btn btn--primary btn--icon-md btn--circle"><i class="fe fe-arrow-down font-weight-bold"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cta -->
                    <div class="d-flex justify-content-end mt-3">
                        <a class="btn btn--primary px-3" href="new-application-step-2.php">Next <i class="fa fa-chevron-right ml-2"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>