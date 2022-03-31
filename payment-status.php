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
                    <h1 class="ct-page__title">Payments</h1>
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="client-licensing-management.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="client-case-records.php">Case Records</a></li>
                                <li class="breadcrumb-item active" aria-current="page">P001</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="ct-cards-wrapper">

                        <!-- Card -- Success -->
                        <div class="ct-card ct-card--lg px-4">
                            <div class="ct-card__display">
                                <div class="modal__illus">
                                    <lottie-player src="assets/json/lottie/check.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></lottie-player>
                                </div>
                            </div>
                            <h4 class="text--lg font--tertiary text-center">Payment Successful</h4>
                            <p class="text-center my-4">Your payment has been processed successfully.</p>
                            <div class="row">
                                <div class="col-5">
                                    <p>From:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">Primary Savings P2,520</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>To:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">Visa Credit Card P2,520</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5">
                                    <p>Amount:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">P 7,984.00</p>
                                </div>
                            </div>

                            <a class="hyperlink hyperlink--primary text-center d-block my-4" href="#">View Receipt</a>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn--success btn--full-width" href="#">DONE</a>
                            </div>
                        </div>

                        <!-- Card -- Pending -->
                        <div class="ct-card ct-card--lg px-4">
                            <div class="ct-card__display">
                                <div class="modal__illus">
                                    <lottie-player src="assets/json/lottie/confirmation.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></lottie-player>
                                </div>
                            </div>
                            <h4 class="text--lg font--tertiary text-center">Pending</h4>
                            <p class="text-center my-4">Payment takes two business days to process.</p>
                            <div class="row">
                                <div class="col-5">
                                    <p>From:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">Primary Savings P2,520</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>To:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">Visa Credit Card P2,520</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5">
                                    <p>Amount:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">P 7,984.00</p>
                                </div>
                            </div>

                            <a class="hyperlink hyperlink--primary text-center d-block my-4" href="#">View Receipt</a>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn--warning btn--full-width" href="#">Cancel</a>
                            </div>
                        </div>

                        <!-- Card -- Failed -->
                        <div class="ct-card ct-card--lg px-4">
                            <div class="ct-card__display">
                                <div class="modal__illus">
                                    <lottie-player src="assets/json/lottie/failed.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></lottie-player>
                                </div>
                            </div>
                            <h4 class="text--lg font--tertiary text-center">Failed</h4>
                            <p class="text-center my-4">Unfortunately payment was rejected.</p>
                            <div class="row">
                                <div class="col-5">
                                    <p>From:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">Primary Savings P2,520</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>To:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">Visa Credit Card P2,520</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5">
                                    <p>Amount:</p>
                                </div>
                                <div class="col-7">
                                    <p class="font--tertiary">P 7,984.00</p>
                                </div>
                            </div>

                            <a class="hyperlink hyperlink--primary text-center d-block my-4" href="#">View Receipt</a>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn--danger btn--full-width" href="#">Try Again</a>
                            </div>
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