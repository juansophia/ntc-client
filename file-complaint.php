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
                    <h1 class="ct-page__title">File Complaint</h1>
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="ct-breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="licensing-management.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="client-complaints.php">Client Complaints</a></li>
                            <li class="breadcrumb-item active" aria-current="page">File Complaint</li>
                        </ol>
                    </nav>
                </div>


                <div class="col-md-12">
                    <div class="bg--glass p-4">
                        <form action="">
                            <div class="bg--neutral br--xs p-3">
                                <h2 class="text--md font--tertiary mb-0">Nature of Complaint</h2>
                            </div>

                            <!-- checkboxes -->
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            Billing Complaint
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check2">
                                        <label class="form-check-label" for="check2">
                                            Spam
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check3">
                                        <label class="form-check-label" for="check3">
                                            Scam
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check4">
                                        <label class="form-check-label" for="check4">
                                            Fair Use
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check5">
                                        <label class="form-check-label" for="check5">
                                            Poor Service (Technical Service / Customer Service
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check5">
                                        <label class="form-check-label" for="check5">
                                            Denial Subscription Plan
                                        </label>
                                    </div>

                                    <div class="frm__check-group d-flex flex-wrap">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="check6">
                                            <label class="form-check-label" for="check6">
                                                <span class="color--neutral-0 text--nowrap">Others, please specify:</span>
                                            </label>
                                        </div>
                                        <input class="frm__input frm__input--line" type="text">
                                    </div>
                                </div>

                                <!-- end of checkboxes -->
                            </div>

                            <!-- date & time -->
                            <div class="row mt-3">
                                <div class="col-md-12 col-lg-7">
                                    <div class="form-group d-flex flex-wrap align-items-center">
                                        <label class="frm__label mr-3">Date of incident/transaction:</label>
                                        <input class="frm__input w-auto" type="date">
                                    </div>

                                    <div class="form-group d-flex flex-wrap align-items-center">
                                        <label class="frm__label mr-3">Time of incident/transaction:</label>
                                        <input class="frm__input combodate" type="text" id="time" data-format="HH:mm" data-template="HH : mm" name="datetime">
                                    </div>
                                </div>
                            </div>

                            <!-- complaint details -->
                            <div class="bg--neutral br--xs p-3 mt-3">
                                <h2 class="text--md font--tertiary mb-0">State Briefly the Details Of Complaint</h2>
                            </div>
                            <div class="form-group d-flex flex-wrap align-items-center mt-3">
                                <textarea class="frm__input" placeholder="Enter details of complaint"></textarea>
                            </div>

                            <!-- documents -->
                            <div class="bg--neutral br--xs p-3 mt-3">
                                <h2 class="text--md font--tertiary mb-0">Attached proof / Supporting Documents</h2>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-7">
                                    <div class="form-group frm--required">
                                        <input type="file" class="dropify">
                                    </div>
                                </div>

                                <!-- Upload File sample list -->
                                <div class="col-md-5">
                                    <div class="ct-file-upload__wrapper mt-1">
                                        <div class="ct-file-upload__item">
                                            <div class="ct-file-upload__details">
                                                <img class="file-icon" src="assets/img/icons/ic-file.svg" alt="">
                                                <div>
                                                    <span class="file-name truncate">Authorization01.pdf</span>
                                                    <span class="file-size">Uploading 85%</span>
                                                </div>
                                            </div>
                                            <div class="ct-file-upload__progress">
                                                <progress class="file-progressbar" value="85" max="100"> </progress>
                                                <span class="file-cancel"><i class="fe fe-x"></i></span>
                                            </div>
                                        </div>
                                        <div class="ct-file-upload__item">
                                            <div class="ct-file-upload__details">
                                                <img class="file-icon" src="assets/img/icons/ic-file.svg" alt="">
                                                <div>
                                                    <span class="file-name truncate">Authorization02.pdf</span>
                                                    <span class="file-size">Upload Complete | 3kb</span>
                                                </div>
                                            </div>
                                            <div class="ct-file-upload__progress">
                                                <progress class="file-progressbar hidden" value="100" max="100"> </progress>
                                                <span class="file-cancel"><i class="fe fe-x"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- buttons -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end flex-wrap">
                                        <a class="btn btn--outline-primary px-3 mr-2" href="#">Cancel</a>
                                        <input class="btn btn--primary px-3" type="submit" value="Submit">
                                    </div>
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