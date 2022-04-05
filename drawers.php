<!-------------------

START: Case Details Drawer

------------------->

<div class="drawer drawer-right slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-case-details">
    <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-header">
            <div class="d-flex justify-content-between my-3">
                <button class="ct-drawer__close-btn hover--left" data-dismiss="drawer"><i class="fe fe-arrow-left"></i></button>
                <a class="hyperlink hyperlink--info" href="case-records-details.php">View Full Details</a>
            </div>
            <div class="ct-drawer__title">
                <h3 class="color--primary">Details</h3>
            </div>
        </div>
        <div class="drawer-body">
            <div class="bg--neutral br--sm py-4 px-3 d-flex align-items-center">
                <div class="d-flex flex-column ml-2">
                    <span class="font--primary color--primary-light">Reference Number: 0000008</span>
                    <span class="text--xxl color--secondary font--primary">Case No: 2019-223</span>
                </div>
            </div>

            <!-- Case Record Details -->
            <div class="ct-drawer__details">
                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Unique Identifier Number (UIN):</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">-</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Company Name:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Smart Communications INC.</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Type of Application:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Issuance of Provisional Authority</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Status of Application:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data tag tag--warning pl-0">For Assessment</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Timestamp:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">December 06 2021 04:30 PM</span>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="ct-btn-group mt-2">
                                <a class="btn btn--outline-primary btn--sm" href="#"><i class="fe fe-plus mr-2"></i>Create SOA</a>
                            </div>
                            <div class="ct-btn-group mt-2">
                                <a class="btn btn--outline-primary btn--sm" data-toggle="modal" data-target="#modal-invite-parties" href="#">Assign Affected Parties</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attached Documents -->
            <div class="bg--neutral br--xs px-4 py-2">
                <h3 class="text--md mb-0">Attached Documents</h3>
            </div>

            <div class="ct-attachments__body">
                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-pdf.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">Uploading.. 2 second left</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <a class="btn btn--icon-warning" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)"><i class="fe fe-info"></i></a>
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-pdf.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">Uploading.. 2 second left</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <a class="btn btn--icon-warning" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)"><i class=" fe fe-info"></i></a>
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-img.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">16 Sep, 2019 1.4 MB</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" href="#"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-img.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">16 Sep, 2019 1.4 MB</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" href="#"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="drawer-footer">
            <div class="ct-drawer__cta bg--primary mx-0" data-toggle="modal" data-target="#exampleModal">
                <i class="fe fe-upload mr-2"></i>
                <span class="font--tertiary">Upload Document</span>
            </div>
        </div>
    </div>
</div>


<!-------------------

END: Case Details Drawer

------------------->

<!-------------------

START: License Details Drawer

------------------->

<div class="drawer drawer-right slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-license-details">
    <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-header">
            <div class="d-flex justify-content-between my-3">
                <button class="ct-drawer__close-btn hover--left" data-dismiss="drawer"><i class="fe fe-arrow-left"></i></button>
                <a class="hyperlink hyperlink--info" href="case-records-details.php">View Full Details</a>
            </div>
            <div class="ct-drawer__title">
                <h3 class="color--primary">License Details</h3>
            </div>
        </div>
        <div class="drawer-body">
            <div class="bg--neutral br--sm p-3 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column ml-2">
                    <span class="font--primary">Reference Number</span>
                    <span class="text--xxl color--secondary font--tertiary">NFD0006</span>
                </div>
                <div class="ct-records__QR">
                    <img class="" src="assets/img/sample-placeholders/QR-sample.png" alt="">
                </div>
            </div>

            <!-- Case Record Details -->
            <div class="ct-drawer__details">
                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Permit Number:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">-</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Unique Identification Number (UIN):</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">-</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Company Name:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Now Telecom Company, INC.</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Service:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Issuance of Permit to Purchase/Possess</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Type of Application:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Purchase/Possess</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Status of Application:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data tag tag--danger pl-0">READY FOR PAYMENT</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Timestamp:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">December 06 2021 04:30 PM</span>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="ct-btn-group mt-2">
                                <a class="btn btn--outline-primary btn--sm" href="#"><i class="fe fe-printer mr-2"></i>Print S.O.A.</a>
                                <a class="btn btn--outline-primary btn--sm" href="#"><i class="fe fe-printer mr-2"></i>Print O.P.</a>
                            </div>
                            <div class="ct-btn-group mt-2">
                                <a class="btn btn--success btn--sm" href="payments.php">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attached Documents -->
            <div class="bg--neutral br--xs px-4 py-2">
                <h3 class="text--md mb-0">Attached Documents</h3>
            </div>

            <div class="ct-attachments__body">
                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-pdf.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">Uploading.. 2 second left</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <a class="btn btn--icon-warning" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)"><i class="fe fe-info"></i></a>
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-pdf.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">Uploading.. 2 second left</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <a class="btn btn--icon-warning" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)"><i class=" fe fe-info"></i></a>
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-img.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">16 Sep, 2019 1.4 MB</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" href="#"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-img.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">16 Sep, 2019 1.4 MB</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" href="#"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="drawer-footer">
            <div class="ct-drawer__cta bg--gray mx-0" data-toggle="modal" data-target="#exampleModal">
                <i class="fe fe-x mr-2"></i>
                <span class="font--tertiary">Cancel</span>
            </div>
        </div>
    </div>
</div>


<!-------------------

END: License Details Drawer

------------------->

<!-------------------

START: Billing Details Drawer;

------------------->

<div class="drawer drawer-right slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-billing-details">
    <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-header">
            <div class="d-flex justify-content-between my-3">
                <button class="ct-drawer__close-btn hover--left"><i class="fe fe-arrow-left"></i></button>
                <a class="hyperlink hyperlink--info" href="case-records-details.php">View Full Details</a>
            </div>
            <div class="ct-drawer__title">
                <h3 class="color--primary">Billing Details</h3>
            </div>
        </div>
        <div class="drawer-body">
            <div class="bg--neutral br--sm p-3 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column ml-2">
                    <span class="font--primary">Reference Number</span>
                    <span class="text--xxl color--secondary font--tertiary">2019-223</span>
                </div>
                <div class="ct-records__QR">
                    <img class="" src="assets/img/sample-placeholders/QR-sample.png" alt="">
                </div>
            </div>

            <!-- Case Record Details -->
            <div class="ct-drawer__details">
                <div class="row align-items-center my-3">
                    <div class="col-5">
                        <span class="ct-records__label">Application Type:</span>
                    </div>
                    <div class="col-7">
                        <span class="ct-records__data">Business</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-5">
                        <span class="ct-records__label">Date Billed:</span>
                    </div>
                    <div class="col-7">
                        <span class="ct-records__data">January 15,2022</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-5">
                        <span class="ct-records__label">Amount Due:</span>
                    </div>
                    <div class="col-7">
                        <span class="ct-records__data">₱5000.00</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-5">
                        <span class="ct-records__label">Status of Application:</span>
                    </div>
                    <div class="col-7">
                        <span class="ct-records__data tag tag--danger pl-0">For Payment</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-footer">
            <!-- Drawer bottom CTA -->
            <div class="ct-drawer__cta bg--success mx-0" data-toggle="modal" data-target="#exampleModal">
                <img class="mr-2" src="assets/img/icons/ic-coins.svg" alt="">
                <span class="font--tertiary">Pay Now</span>
            </div>
        </div>
    </div>
</div>


<!-------------------

END: Billing Details Drawer

------------------->
<!-------------------

START: Complaint Details Drawer

------------------->
<div class="drawer drawer-right slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-complaint-details">
    <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-header">
            <div class="d-flex justify-content-between my-3">
                <button class="ct-drawer__close-btn hover--left"><i class="fe fe-arrow-left"></i></button>
                <a class="hyperlink hyperlink--info" href="complaint-details.php">View Full Details</a>
            </div>
            <div class="ct-drawer__title">
                <h3 class="color--primary">Complaint Details</h3>
            </div>
        </div>
        <div class="drawer-body">
            <div class="bg--neutral br--sm p-3 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column ml-2">
                    <span class="font--primary">Reference Number</span>
                    <span class="text--xxl color--secondary font--tertiary">2019-223</span>
                </div>
            </div>

            <!-- Case Record Details -->
            <div class="ct-drawer__details">
                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Nature of Complaint:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Poor Service (Technical Service / Customer Service</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Date Filed:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">Dec 12, 2022 - 8:31 AM</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Time of incident/transaction:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data">8:31 AM</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-5">
                        <span class="ct-records__label">Status of Application:</span>
                    </div>
                    <div class="col-md-7">
                        <span class="ct-records__data tag tag--success pl-0">Completed</span>
                    </div>
                </div>

                <div class="row align-items-center my-3">
                    <div class="col-md-12">
                        <p class="font--tertiary">Statement</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>

            <!-- Attached Documents -->
            <div class="bg--neutral br--xs px-4 py-2">
                <h3 class="text--md mb-0">Submitted Documents</h3>
            </div>

            <div class="ct-attachments__body">
                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-pdf.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">Uploading.. 2 second left</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-pdf.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">Uploading.. 2 second left</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)"><i class=" fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-img.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">16 Sep, 2019 1.4 MB</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" href="#"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>

                <div class="ct-attachments__item">
                    <div class="d-flex">
                        <img class="icon" src="assets/img/icons/ic-img.svg" alt="">
                        <div class="d-flex flex-column">
                            <span class="filename truncate">LicensingRequiremet.pdf</span>
                            <span class="fileinfo truncate">16 Sep, 2019 1.4 MB</span>
                        </div>
                    </div>
                    <div class="ct-attachments__actions">
                        <!-- <a class="btn btn--icon-warning" href="#"><i class="fe fe-info"></i></a> -->
                        <a class="btn btn--icon-danger" href="#"><i class="fe fe-trash-2"></i></a>
                        <a class="btn btn--icon-neutral" href="#"><i class="fe fe-download-cloud"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-footer">
            <!-- Drawer bottom CTA -->
            <div class="ct-drawer__cta bg--primary mx-0" data-toggle="modal" data-target="#exampleModal">
                <i class="fe fe-printer mr-2"></i>
                <span class="font--tertiary">Print Details</span>
            </div>
        </div>
    </div>
</div>

<!-------------------

END: Complaint Details Drawer

------------------->