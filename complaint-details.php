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

                    <h1 class="ct-page__title">Complaints Details</h1>

                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="ct-breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="licensing-management.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="client-complaints.php">Client Complaints</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Complaint Details</li>
                        </ol>
                    </nav>

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
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Nature of Complaint:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Poor Service (Technical Service / Customer Service</span>
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Date Filed:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Warehouse Company</span>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Time of incident/transaction:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Business</span>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Status of Application:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data tag tag--success px-0">COMPLETED</span>
                                    </div>
                                </div>

                                <div class="row align-items-center my-4">
                                    <div class="col-lg-12">
                                        <h3 class="text--rg font--tertiary">Statement</h3>
                                        <p class="ct-records__label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ct-btn-group mt-2">
                                            <a class="btn btn--outline-primary btn--sm" href="#"><i class="fe fe-printer mr-2"></i>Print</a>
                                            <a class="btn btn--outline-primary btn--sm" href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <?php
                            include("attachments.php");
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