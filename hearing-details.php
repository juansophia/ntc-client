<?php
include("header.php");
?>

<?php
include("client-header-unauth.php");
?>

<main class="cd-main-content cd-main-content--client">
    <div class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="ct-page__title">Details</h1>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="bg--glass p-4">

                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="ct-records__header">
                                            <div class="ct-records__num">
                                                <span class="font--primary">Case Number</span>
                                                <span class="text--xl color--secondary font--tertiary">2019-223</span>
                                            </div>
                                            <div class="ct-records__QR">
                                                <img class="" src="assets/img/sample-placeholders/QR-sample.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Nature of Application:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Certificate of Public Convenience (CPC) and/or Provisional Authority (PA) - NEW</span>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Status of Application:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data tag tag--info px-0">for initial hearing</span>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Date Created:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">December 08, 2021 04:30 PM</span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <article class="ct-article indent--md">
                                            <h3 class="text--md font--tertiary text-center color--dark mt-3">1ST NOTICE OF HEARING </h3>
                                            <div class="indent--lg">
                                                Applicant, <strong class="font--tertiary">MANILA BROADCASTING COMPANY</strong>, is a 100% Filipino domestic corporation duly organized and existing under and by virtue of Philippine Laws, registered with the Securities and Exchange Commission (S.E.C.), and a grantee of a congressional Franchise under R.A. No. 7158, requests for the issuance of a <strong class="font--tertiary">Certificate of Public Convenience (CPC)</strong>to install, operate and maintain <strong class="font--tertiary">AM Radio Broadcast Station in IMUS, CAVITE</strong>.
                                            </div>
                                            <div class="indent--lg">
                                                Applicant, further requests for the issuance of a <strong class="font--tertiary">Provisional Authority (PA)</strong> pending final determination of the application.
                                            </div>
                                            <div class="indent--lg">
                                                In view thereof, this will be heard by this Commission on <strong class="font--tertiary">January 21, 2021 (Friday) at ten o’clock in the morning (10:00 A.M.)</strong> at the Legal Branch, 3rd Floor, NTC Building, National Telecommunications Commission, BIR Road, East Triangle, Diliman, Quezon City, wherein applicant shall present its compliance with the Commission’s jurisdictional requirements, as well as its evidences, if warranted.
                                            </div>
                                            <div class="indent--lg">
                                                However, should the hearing date be declared a holiday or non-working day due to force majeure, the said hearing shall be held on the NEXT regular working day.
                                            </div>
                                            <div class="indent--lg">
                                                At least fifteen (15) days prior to the date of hearing, applicant shall publish this Notice of Hearing in a newspaper of general circulation in the Philippines. This Notice, as well as the copy of the application shall also be served by registered mail or through personal delivery to all listed affected parties.
                                            </div>
                                            <div class="indent--lg">
                                                Any party opposed to the granting of the application is hereby directed to appear at the scheduled hearing and must file its verified opposition, on or before the date of hearing, furnishing the applicant with a copy of the same. Failure on the part of any affected party to file its opposition on time and to appear at the scheduled hearing shall be construed as a waiver of its right to be heard and the Commission shall proceed to hear and decide the application on its merit.
                                            </div>
                                            <div class="indent--lg">
                                                <strong class="font--tertiary">WITNESS,</strong> the <strong class="font--tertiary">HON. GAMALIEL A. CORDOBA,</strong> Commissioner, National Telecommunications Commission, this <strong class="font--tertiary">21st</strong> day of <strong class="font--tertiary">January 2021.</strong>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <div class="ct-btn-group mt-2">
                                                <a class="btn btn--primary btn--sm" href="#">Send Motion to Oppose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <?php
                            include("attachments.php");
                            ?>
                            <br>
                            <?php
                            include("attachments-empty.php");
                            ?>
                            <br>
                            <?php
                            include("attachments-empty.php");
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>