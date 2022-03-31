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
                                <li class="breadcrumb-item"><a href="licensing-management.php">Home</a></li>
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
                            <li class="stepper-item done"> Bills Summary </li>
                            <li class="stepper-item done">Payment Summary</li>
                        </ul>

                        <h2 class="text--md">Payment Summary</h2>

                        <!-- Details -->
                        <div class="ct-table-wrapper px-0">
                            <div class="bg--noise"></div>
                            <div class="ct-table">
                                <table class="table">
                                    <thead class="">
                                        <tr class="bg--neutral br--xs">
                                            <th class="p-3">Description</th>
                                            <th class="p-3">Date</th>
                                            <th class="p-3">Amount (PHP)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td class="align-top border-0 p-3"><span>Certificate of Public Convenience (CPC) and/or Provisional Authority (PA) - NEW</span></td>
                                            <td class="align-top border-0 p-3"><span class="text--nowrap">March 08, 2021 </span></td>
                                            <td class="align-top border-0 p-3 text-center"><span class="text--nowrap">₱2,538.16</span></td>
                                        </tr>
                                        <!-- Total Amount -->
                                        <tr class="">
                                            <td class="align-top border-0 pt-3">
                                                <h3 class="text--rg font--tertiary">Total amount to pay</h3>
                                            </td>
                                            <td class="align-top border-0 pt-3"></td>
                                            <td class="align-top border-0 pt-3 text-center"><span class="total__price">₱5000.00</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Other details -->
                        <h3 class="text--md font--tertiary mt-2">Convenience Fee</h3>
                        <p>This fee will go directly to our payment partner facilitating this transaction.</p>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <!-- Payment method -->
                                <div class="ct-payment__method">
                                    <img src="assets/img/payment/paymaya.svg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- cta -->
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn--outline-primary mr-2 px-4" href="payments.php">Back</a>
                                    <a class="btn btn--primary" data-toggle="modal" data-target="#modal-payment-receipt" href="javascript:void(0)">Pay Now</a>
                                </div>
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