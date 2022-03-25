<?php
include("header.php");
?>

<?php
include("client-header.php");
?>

<main class="cd-main-content cd-main-content--client">
    <div class=" ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="ct-page__title">Case Records Details</h1>

                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="ct-breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="case-records.php">Case Records</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Case Records Details</li>
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
                                            <div class="ct-records__QR">
                                                <img class="" src="assets/img/sample-placeholders/QR-sample.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Unique Identifier Number:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="frm__input" value="2578452">
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Company Name:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="frm__input" value="Warehouse Company">
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Type of Application:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="frm__select-group">
                                            <select class="frm__input select2" name="sample">
                                                <option value="A">Option 1</option>
                                                <option value="B">Option 2</option>
                                                <option value="B">Option 2</option>
                                                <option value="D">Option 1</option>
                                                <option value="E">Option 2</option>
                                                <option value="F">Option 2</option>
                                            </select>
                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <br><!-- space for form groupinng -->

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Applicant Name:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="frm__input" value="GMA NETWORK INC vs. SKYCABLE CORP.">
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Complete Address:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="frm__input" value="Globe Tower, 32nd Street corner 7th Avenue, Bonifacio Global City, Taguig.">
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label"> Nature of Application:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="frm__select-group">
                                            <select class="frm__input select2" name="sample">
                                                <option value="A">Option 1</option>
                                                <option value="B">Option 2</option>
                                                <option value="B">Option 2</option>
                                                <option value="D">Option 1</option>
                                                <option value="E">Option 2</option>
                                                <option value="F">Option 2</option>
                                            </select>
                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>

                                <br> <!-- space for form groupinng -->
                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Violation(s):</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="frm__select-group">
                                            <select class="frm__input select2" name="sample">
                                                <option value="A">Option 1</option>
                                                <option value="B">Option 2</option>
                                                <option value="B">Option 2</option>
                                                <option value="D">Option 1</option>
                                                <option value="E">Option 2</option>
                                                <option value="F">Option 2</option>
                                            </select>
                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Date File:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="frm__input" type="date">
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Payment Details</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="frm__select-group">
                                            <select class="frm__input select2" name="sample">
                                                <option value="A">Option 1</option>
                                                <option value="B">Option 2</option>
                                                <option value="B">Option 2</option>
                                                <option value="D">Option 1</option>
                                                <option value="E">Option 2</option>
                                                <option value="F">Option 2</option>
                                            </select>
                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Hearing Venue:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="frm__input" value="Virtual Hearing: Platform - MS TEAMS">
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Hearing Date and Time:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="frm__input" type="date">
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Order/Decision</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="frm__select-group">
                                            <select class="frm__input select2" name="sample">
                                                <option value="A">Option 1</option>
                                                <option value="B">Option 2</option>
                                                <option value="B">Option 2</option>
                                                <option value="D">Option 1</option>
                                                <option value="E">Option 2</option>
                                                <option value="F">Option 2</option>
                                            </select>
                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-5">
                                        <span class="ct-records__label">Status:</span>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="frm__select-group">
                                            <select class="frm__input select2" name="sample">
                                                <option value="A">Option 1</option>
                                                <option value="B">Option 2</option>
                                                <option value="B">Option 2</option>
                                                <option value="D">Option 1</option>
                                                <option value="E">Option 2</option>
                                                <option value="F">Option 2</option>
                                            </select>
                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <div class="ct-btn-group ct-btn-group--edit mt-2">
                                                <a class="btn btn--outline-primary btn--sm px-3" href="#">Cancel</a>
                                                <a class="btn btn--primary btn--sm px-3" data-toggle="modal" data-target="#modal-edit-records-summary" href="javascript:void(0)">Save</a>
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