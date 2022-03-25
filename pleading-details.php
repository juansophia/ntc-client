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

                                <div class="bg--neutral br--xs p-3">
                                    <h2 class="text--rg mb-0">Applicant Details</h2>
                                </div>

                                <div class="row my-3 px-3">
                                    <div class="col-lg-5 pr-2">
                                        <span class="ct-records__label">Category:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Broadcast Entity</span>
                                    </div>
                                </div>

                                <div class="row my-3 px-3">
                                    <div class="col-lg-5 pr-2">
                                        <span class="ct-records__label">Name:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Manila Broadcasting Company</span>
                                    </div>
                                </div>

                                <div class="bg--neutral br--xs p-3">
                                    <h2 class="text--rg mb-0">Company Address</h2>
                                </div>

                                <div class="row my-3 px-3">
                                    <div class="col-lg-5 pr-2">
                                        <span class="ct-records__label">Address:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">6799 Smart Tower, Ayala Avenue, Bel-Air, Metro Manila, Makati City, 1112</span>
                                    </div>
                                </div>

                                <div class="bg--neutral br--xs p-3">
                                    <h2 class="text--rg mb-0">Counsel for Applicant</h2>
                                </div>

                                <div class="row my-3 px-3">
                                    <div class="col-lg-5 pr-2">
                                        <span class="ct-records__label">Attorney:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">Juan Dela Cruz</span>
                                    </div>
                                </div>

                                <div class="bg--neutral br--xs p-3">
                                    <h2 class="text--rg mb-0">Pleading Details</h2>
                                </div>

                                <div class="row my-3 px-3">
                                    <div class="col-lg-5 pr-2">
                                        <span class="ct-records__label">Application/Petition:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <span class="ct-records__data">CPC to install, operate and maintain 1 kilowatt FM Radio Broadcast Station in Imus, Cavite</span>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <!-- LIST OF OPPOSITORS TABLE -->

                            <div class="ct-table-wrapper bg--glass">
                                <div class="bg--noise"></div>
                                <div class="ct-table ct-table--hover">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="4" class="text--md">List of Oppositors</th>
                                            </tr>
                                            <tr>
                                                <th>#</th>
                                                <th>Company/Oppositor Name</th>
                                                <th>Date Filed</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="">1</span></td>
                                                <td><span class="text--nowrap truncate">ABS-CBN Broadcasting Corporation...</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-case-details">View Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="">2</span></td>
                                                <td><span class="text--nowrap truncate">ABS-CBN Broadcasting Corporation...</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-case-details">View Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="">3</span></td>
                                                <td><span class="text--nowrap truncate">ABS-CBN Broadcasting Corporation...</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-case-details">View Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="">4</span></td>
                                                <td><span class="text--nowrap truncate">ABS-CBN Broadcasting Corporation...</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-case-details">View Details</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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