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
                    <h1 class="ct-page__title">Order of Payment</h1>
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="case-records.php">Case Records</a></li>
                                <li class="breadcrumb-item active" aria-current="page">P001</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="ct-payment bg--glass">
                        <!-- steps -->
                        <ul class="ct-stepper d-flex justify-content-center">
                            <li class="stepper-item active"> Bills Summary </li>
                            <li class="stepper-item">Confirm Payment</li>
                        </ul>

                        <!-- refnum -->
                        <div class="ct-records__header">
                            <div class="ct-records__num">
                                <span class="font--primary">Case Number</span>
                                <span class="text--xl color--secondary font--tertiary">2019-223</span>
                            </div>
                            <div class="ct-records__QR">
                                <img class="" src="assets/img/sample-placeholders/QR-sample.png" alt="">
                            </div>
                        </div>

                        <!-- Details Row -->
                        <div class="row my-3">
                            <div class="col-md-3">
                                <span class="ct-records__label">Payor:</span>
                            </div>
                            <div class="col-md-7">
                                <span class="ct-records__data">Manila Broadcasting Company</span>
                            </div>
                        </div>


                        <!-- Details Row -->
                        <div class="row my-3">
                            <div class="col-md-3">
                                <span class="ct-records__label">Address:</span>
                            </div>
                            <div class="col-md-7">
                                <span class="ct-records__data">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                            </div>
                        </div>

                        <!-- Details Row -->
                        <div class="row my-3">
                            <div class="col-md-3">
                                <span class="ct-records__label">Payment For:</span>
                            </div>
                            <div class="col-md-7">
                                <span class="ct-records__data">Certificate of Public Convenience (CPC) and/or Provisional Authority (PA) - NEW</span>
                            </div>
                        </div>

                        <!-- Details Row -->
                        <div class="row my-3">
                            <div class="col-md-3">
                                <span class="ct-records__label">Date:</span>
                            </div>
                            <div class="col-md-7">
                                <span class="ct-records__data">February 22, 2021</span>
                            </div>
                        </div>

                        <div class="bg--neutral br--xs p-3">
                            <h3 class="text--rg mb-0">Fees</h3>
                        </div>

                        <!-- Fees -->
                        <div class="row">
                            <div class="col-md-10">
                                <div class="ct-table-wrapper px-0">
                                    <div class="ct-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="color--primary font--tertiary">Name</th>
                                                    <th class="text-right color--primary font--tertiary">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border-0"><span class="text--nowrap">FF</span></td>
                                                    <td class="border-0 text-right font--tertiary"><span class="text--nowrap">200.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0"><span class="text--nowrap">PA</span></td>
                                                    <td class="border-0 text-right font--tertiary"><span class="text--nowrap">75.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0"><span class="text--nowrap">DST</span></td>
                                                    <td class="border-0 text-right font--tertiary"><span class="text--nowrap">30.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0"><span class="text--nowrap">UPLRF</span></td>
                                                    <td class="border-0 text-right font--tertiary"><span class="text--nowrap">2.00</span></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- TOTAL -->
                        <div class="bg--neutral br--xs p-2">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="ct-table">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="border-0"><span class="text--nowrap font--tertiary">TOTAL</span></td>
                                                    <td class="border-0 text-right font--tertiary"><span class="text--nowrap text--md">₱307.00</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Payment method -->
                        <form action="">
                            <h3 class="text--rg font--tertiary mt-4">Payment Method </h3>
                            <div class="frm__radio-group mt-3">
                                <input type="radio" id="pay-on-site" class="input--hidden" name="radio-payment-mode">
                                <label for="pay-on-site" class="radio-group__label" data-toggle="modal" data-target="#modal-pay-onsite"><img src="assets/img/payment/pay-on-site.svg" alt="Pay-on-site">Pay-on-site</label>

                                <!-- <input type="radio" id="bank-transfer" class="input--hidden" name="radio-payment-mode">
                                <label for="bank-transfer" class="radio-group__label"><img src="assets/img/payment/landbank.svg" alt="Bank Transfer">Bank Transfer</label> -->

                                <input type="radio" id="paymaya" class="input--hidden" name="radio-payment-mode">
                                <label for="paymaya" class="radio-group__label"><img src="assets/img/payment/paymaya.svg" alt="Paymaya">Paymaya</label>
                            </div>

                            <!-- cta -->
                            <div class="d-flex justify-content-between flex-wrap mt-4">
                                <div class="ct-btn-group mt-2">
                                    <a class="btn btn--outline-primary" href="#"><i class="fe fe-printer mr-2"></i>Print</a>
                                    <a class="btn btn--outline-primary" href="#"><i class="fe fe-download mr-2"></i>Download</a>
                                </div>
                                <div class="ct-btn-group mt-2">
                                    <a class="btn btn--primary" href="payments-summary.php">Proceed</a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>