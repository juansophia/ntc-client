<?php
include("header.php");
?>

<main class="">
    <section class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="position-relative mt-4 mb-2">
                        <a class="btn btn--md p-0 hover--left position-absolute mt-2" href="#" onclick="history.go(-1)"><i class="fe fe-arrow-left"></i></a>
                        <h1 class="text--xl text-center mt-4">Registration</h1>
                    </div>
                    <div class="ct-card ct-card--reg">
                        <form action="">
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
                                <div class="col-md-12">

                                    <div class="form-group frm--required frm--success">
                                        <label class="frm__label">Type of Entity</label>
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="frm__label">Category</label>
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
                                    <div class="form-group">
                                        <label class="frm__label">Permit No.</label>
                                        <input class="frm__input" type="text" placeholder="Enter Permit No. here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="frm__label">Validity (mm/dd/yyyy)</label>
                                        <input class="frm__input" type="date">
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
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Street</label>
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
                                <div class="col-md-9">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">HouseUnit/Rm/Bldg. No.</label>
                                        <input class="frm__input" type="text" placeholder="Enter Complete Address">
                                    </div>
                                </div>

                                <div class="col-md-3">
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

                            <h2 class="frm__title">Account Information</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">First Name</label>
                                        <input type="text" class="frm__input" placeholder="Enter your first name here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="frm__label">Middle Name </label>
                                        <input type="text" class="frm__input" placeholder="Enter your middle name here">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Last Name</label>
                                        <input type="text" class="frm__input" placeholder="Enter your last name here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="frm__label">Name Ext. </label>
                                        <input type="text" class="frm__input" placeholder="Enter your last name here">
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
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Email Address</label>
                                        <input class="frm__input" type="email" placeholder="Enter Company Email Address here">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Username</label>
                                        <input type="text" class="frm__input" placeholder="Enter your Username here">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Password</label>
                                        <input type="password" class="frm__input">
                                        <small class="frm__guidetext">Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.</small>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group frm--required frm--danger">
                                        <label class="frm__label">Confirm Password</label>
                                        <input type="password" class="frm__input">
                                        <small class="frm__guidetext frm__guidetext--danger">Passwords don't match.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group frm--required">
                                        <label class="frm__label">Authorization Letter</label>
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
                                    <em class="frm__guidetext">
                                        <b>Note:</b> I hereby declare that all the above entries are true and correct. Under the Revised Penal Code, I shall be held liable for any willful false statement(s) or misrepresentation(s) made in this application form that may serve as a valid ground for the denial of this application and/or cancellation/revocation of the permit issued/granted. Further, I am freely giving full consent for the collection and processing of personal information in accordance with Republic Act No. 10713, Data Privacy Act of 2012. </em>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn--primary" data-toggle="modal" data-target="#modal-registration-summary" href="#">Submit <i class="fe fe-chevron-right ml-2"></i></a>
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