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
                            <!-- <div class="position-relative mb-1">
                                <a class="btn btn--md p-0 hover--left position-absolute mt-2" href="#"><i class="fe fe-arrow-left"></i></a>
                                <h2 class="text--lg text-center w-75 m-auto">How may we assist you today?</h2>
                            </div>
                            <p class="text-center text--sm mb-4">Select the type of application that you would like to request.</p> -->

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="font--tertiary color--secondary text--md mb-2">Type of Application</p>
                                    <span class="color--tertiary">Certificate of Public Convenience (CPC) and/or Provisional Authority (PA) - NEW</span>
                                </div>
                            </div>


                            <h2 class="frm__title">Applicant Details</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Name</label>
                                        <input type="text" class="frm__input" placeholder="Enter your Business Name here">
                                        <!-- <em class="frm__guidetext">* Business name appearing in the SEC/DTI Registration of Business/Mayor's Permit.</em> -->
                                    </div>
                                </div>
                            </div>

                            <h2 class="frm__title">Company Address</h2>


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

                            <h2 class="frm__title">Pleading Details</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Application/Petition </label>
                                        <input class="frm__input" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Description</label>
                                        <textarea class="frm__input"> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text--rg font--tertiary color--dark mb-4">Service Area(s)</h3>
                                </div>
                            </div>

                            <!-- service area row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="frm__label">Region</label>
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
                                <div class="col-md-4">
                                    <div class="form-group">
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
                                <div class="col-md-4">
                                    <div class="form-group">
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

                            <!-- service area row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="frm__label">Region</label>
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
                                <div class="col-md-4">
                                    <div class="form-group">
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
                                <div class="col-md-4">
                                    <div class="form-group">
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

                            <!-- service area cta -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end mt-2">
                                        <button class="hyperlink hyperlink--info"><i class="fe fe-plus-square mr-1"></i> Add Service Area</button>

                                    </div>
                                </div>
                            </div>

                            <h2 class="frm__title">Requirements</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="frm__label mb-2">Congressional Franchise</p>
                                    <div class="frm__input-group">
                                        <label class="frm__input mb-0" for="sample-duly-signatory">
                                            <span class="frm__placeholder frm__file-text">Attach datasheet</span>
                                            <span class="btn btn--tertiary btn--sm input-group__append py-2">Choose File</span>
                                        </label>
                                        <input id="sample-duly-signatory" type="file" hidden>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">

                                    <!-- list -->
                                    <ul class="list list--lower-alpha pl-1">
                                        <li class="font-italic">Duis aute irure doloate velit esse cillur</li>
                                        <li class="font-italic">Duis aute irure dolor iat nulla pariatur</li>
                                        <li class="font-italic">Duis aute irure dolor in reprehenderit in volu pariatur</li>
                                        <li class="font-italic">Duisnderit in voluptate velit esse cillur</li>
                                        <li class="font-italic">Duis aute irure d eu fugiat nulla pariatur</li>
                                        <li class="font-italic">Duis aute irure dot in volu pariatur</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="row my-4">
                                <div class="col-md-12">
                                    <small class="frm__guidetext">
                                        <b>Declaration:</b>
                                        <em>I hereby declare that all the above entries are true and correct. Under the Revised Penal Code, I shall be held liable for any willful false statement(s) or misrepresentation(s) made in this application form that may serve as a valid ground for the denial of this application and/or cancellation/revocation of the permit issued/granted. Further, I am freely giving full consent for the collection and processing of personal information in accordance with Republic
                                            Act No. 10713, Data Privacy Act of 2012. </em>
                                    </small>
                                </div>
                            </div>

                            <div class="row mt-5">
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