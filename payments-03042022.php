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
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="case-records.php">Case Records</a></li>
                                <li class="breadcrumb-item active" aria-current="page">P001</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1">
                    <div class="ct-payment bg--glass">
                        <!-- steps -->
                        <ul class="ct-stepper d-flex justify-content-center">
                            <li class="stepper-item active"> Bills Summary </li>
                            <li class="stepper-item">Payment Summary</li>
                        </ul>

                        <!-- refnum -->
                        <div class="ct-records__num">
                            <span class="font--primary">Case Number</span>
                            <span class="text--xl color--secondary font--tertiary">2019-223</span>
                        </div>

                        <!-- Details -->
                        <div class="ct-table-wrapper px-0">
                            <div class="bg--noise"></div>
                            <div class="ct-table">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center bg--neutral br--xs">
                                            <th>Bill Type</th>
                                            <th>End of Billing Period</th>
                                            <th>Billed Amount</th>
                                            <th>Unpaid Amount</th>
                                            <th>Bill Due Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><span class="text--nowrap">Service</span></td>
                                            <td><span class="text--nowrap">January 15, 2022 </span></td>
                                            <td><span class="text--nowrap">₱5000.00</span></td>
                                            <td><span class="text--nowrap">₱5000.00</span></td>
                                            <td><span class="text--nowrap">January 30, 2022</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="ct-divider mb-3"></div>
                        <!-- Total Amount -->
                        <div class="ct-payment__total">
                            <h3 class="total__label">Total amount to pay</h3>
                            <span class="total__price">₱5000.00</span>
                        </div>

                        <!-- Other details -->
                        <small class="w-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed. </small>


                        <!-- Payment method -->
                        <form action="">
                            <h3 class="text--rg font--tertiary mt-4">Payment Method </h3>
                            <div class="frm__radio-group mt-3">
                                <input type="radio" id="pay-on-site" class="input--hidden" name="radio-payment-mode">
                                <label for="pay-on-site" class="radio-group__label"><img src="assets/img/payment/pay-on-site.svg" alt="Pay-on-site">Pay-on-site</label>

                                <input type="radio" id="bank-transfer" class="input--hidden" name="radio-payment-mode">
                                <label for="bank-transfer" class="radio-group__label"><img src="assets/img/payment/landbank.svg" alt="Bank Transfer">Bank Transfer</label>

                                <input type="radio" id="paymaya" class="input--hidden" name="radio-payment-mode">
                                <label for="paymaya" class="radio-group__label"><img src="assets/img/payment/paymaya.svg" alt="Paymaya">Paymaya</label>
                            </div>

                            <!-- cta -->
                            <div class="d-flex justify-content-end mt-3">
                                <a class="btn btn--outline-primary mr-2" href="#">Cancel</a>
                                <a class="btn btn--primary" href="payments-summary.php">Proceed</a>
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