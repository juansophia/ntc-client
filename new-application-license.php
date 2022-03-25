<?php
include("header.php");
?>

<main class="">
    <section class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="c-landing__header">
                        <img class="brand-logo" src="assets/img/logo/ntc-logo.png" alt="NTC | National Telecommunications Commission">
                    </div>
                    <div class="ct-card ct-card--reg">
                        <form action="">
                            <div class="position-relative mb-1">
                                <a class="btn btn--md p-0 hover--left position-absolute mt-2" href="#"><i class="fe fe-arrow-left"></i></a>
                                <h2 class="text--lg text-center w-75 m-auto">How may we assist you today?</h2>
                            </div>
                            <p class="text-center text--sm mb-4">Select the type of application that you would like to request.</p>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <p class="font--tertiary color--secondary text--md mb-2">Service</p>
                                    <span class="color--tertiary">1. A. Issuance of Permit to Purchase/Possess (New/ Extension)/Construction Permit / Radio Station License (New/Modification) for Radio Stations (Microwave, VSAT, Public Trunked, WLL, BWA*, WDN) of a Public Telecommunications Entity</span>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <p class="font--tertiary color--secondary text--md mb-2">Nature of Application</p>
                                    <span class="color--tertiary">A.1 Permit to Purchase/Possess (NEW)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Type of Radio Service</label>
                                        <input type="text" class="frm__input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="frm__label">Others, specify</label>
                                        <input type="text" class="frm__input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Class of Station </label>
                                        <div class="d-flex">
                                            <div class="frm__select-group flex-grow-1 mr-3">
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
                                            <input type="text" class="frm__input w-25" placeholder="No. of unit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="frm__label">Others, specify</label>
                                        <div class="d-flex">
                                            <input type="text" class="frm__input flex-grow-1 mr-3" placeholder="Class of Station">
                                            <input type="text" class="frm__input w-25" placeholder="No. of unit">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Nature of Service</label>
                                        <input type="text" class="frm__input">
                                    </div>
                                </div>
                            </div>

                            <h2 class="frm__title">Applicant Details</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Applicant</label>
                                        <input type="text" class="frm__input" placeholder="Enter your Business Name here">
                                        <em class="frm__guidetext">* Business name appearing in the SEC/DTI Registration of Business/Mayor's Permit.</em>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">CPC/CPCN/PA/RSL No. </label>
                                        <input type="text" class="frm__input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Validity (mm/dd/yyyy) </label>
                                        <input type="date" class="frm__input">
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Unit/Rm/Bldg. No.</label>
                                        <input class="frm__input" type="text" placeholder="Enter Unit/Rm/Bldg. No.">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Street</label>
                                        <input class="frm__input" type="text" placeholder="Enter Street">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Province</label>
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

                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">City/Municipality</label>
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
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Barangay</label>
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

                                <div class="col-md-6">
                                    <div class="form-group frm--required frm--success">
                                        <label class="frm__label">Zip Code</label>
                                        <input class="frm__input" type="text" placeholder="Enter Zip Code" maxlength="4">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Contact No.</label>
                                        <div class="frm__input-group">
                                            <div class="input-group__prepend">
                                                <img class="flag-icon" src="assets/img/icons/ic-ph.png" alt="">
                                                +63
                                            </div>
                                            <input class="frm__input frm__input--phone" type="text" name="phone" data-mask="000-000-0000" placeholder="000-000-0000" autocomplete="off" maxlength="10">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group frm--required frm--danger">
                                        <label class="frm__label">Email Address</label>
                                        <input class="frm__input" type="email" placeholder="Enter Company Email Address here">
                                        <small class="frm__guidetext frm__guidetext--danger">Please enter a valid email address.</small>
                                    </div>
                                </div>
                            </div>

                            <h2 class="frm__title">Particulars of Proposed Station/Equipment</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group frm--required">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                                            <p class="frm__label mb-2">Equipment/Station Datasheet</p>
                                            <a href="#" target="_blank"><em class="color--info text--sm font--tertiary">Download and Fill up the Equipment Datasheet here</em></a>
                                        </div>
                                        <div class="frm__input-group">
                                            <label class="frm__input mb-0" for="sample-duly-signatory">
                                                <span class="frm__placeholder frm__file-text">Attach datasheet</span>
                                                <span class="btn btn--tertiary btn--sm input-group__append py-2">Choose File</span>
                                            </label>
                                            <input id="sample-duly-signatory" type="file" hidden>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- checkboxes -->
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="chkbox1">
                                        <label class="form-check-label" for="chkbox1">
                                            New Radio Station
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="chkbox2">
                                        <label class="form-check-label" for="chkbox2">
                                            Additional Radio Station
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="chkbox3">
                                        <label class="form-check-label" for="chkbox3">
                                            Change of Equipment
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="chkbox4">
                                        <label class="form-check-label" for="chkbox4">
                                            Additional Equipment
                                        </label>
                                    </div>

                                    <div class="frm__check-group d-flex flex-wrap mb-2">
                                        <div class="form-check mr-2">
                                            <input class="form-check-input" type="checkbox" value="" id="chkbox5">
                                            <label class="form-check-label" for="chkbox5">
                                                <span class="color--neutral-0 text--nowrap">Storage At:</span>
                                            </label>
                                        </div>
                                        <input class="frm__input frm__input--line flex-grow-1" type="text">
                                    </div>

                                    <div class="frm__check-group d-flex flex-wrap mb-2">
                                        <div class="form-check mr-2">
                                            <input class="form-check-input" type="checkbox" value="" id="chkbox6">
                                            <label class="form-check-label" for="chkbox6">
                                                <span class="color--neutral-0 text--nowrap">Others, please specify:</span>
                                            </label>
                                        </div>
                                        <input class="frm__input frm__input--line flex-grow-1" type="text">
                                    </div>
                                </div>

                                <!-- end of checkboxes -->
                            </div>

                            <div class="row my-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="frm__label mb-2">List of Requirements</p>
                                        <ul class="list list--bullet">
                                            <li class="text--sm">Duis aute irure doloate velit esse cillur</li>
                                            <li class="text--sm">Duis aute irure dolor iat nulla pariatur</li>
                                            <li class="text--sm">Duis aute irure dolor in reprehenderit in volu pariatur</li>
                                            <li class="text--sm">Duisnderit in voluptate velit esse cillur</li>
                                            <li class="text--sm">Duis aute irure d eu fugiat nulla pariatur</li>
                                            <li class="text--sm">Duis aute irure dot in volu pariatur</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group frm--required">
                                        <label class="frm__label mb-3">Upload Required Documents</label>
                                        <input type="file" class="dropify">
                                    </div>
                                </div>

                                <!-- Upload File sample list -->
                                <div class="col-md-5">
                                    <div class="ct-file-upload__wrapper">
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

                            <div class="row">
                                <div class="col-md-7">
                                    <small class="frm__guidetext">
                                        <b>Note:</b>
                                        <em>I hereby declare that all the above entries are true and correct.
                                            Under the Revised Penal Code, I shall be held liable for
                                            any willful false statement(s) or misrepresentation(s)
                                            made in this application form that may serve as a valid
                                            ground for the denial of this application and/or cancellation/revocation
                                            of the permit issued/granted. Further, I am freely giving full consent
                                            for the collection and processing of personal information in accordance
                                            with Republic Act No. 10713, Data Privacy Act of 2012. </em>
                                    </small>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn--neutral mr-3" data-toggle="modal" data-target="#modal-save-draft" href="#">Save as Draft</a>
                                        <a class="btn btn--primary" data-toggle="modal" data-target="#modal-application-summary" href="javascript:void(0)">Submit <i class="fe fe-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
include("footer.php");
?>