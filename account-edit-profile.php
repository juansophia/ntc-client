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
                    <h1 class="ct-page__title">My Profile</h1>
                    <div class="d-flex justify-content-between flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <!-- side -->
                        <div class="col-md-4 col-lg-3">
                            <div class="ct-profile__sidebar ct-card">
                                <div class="ct-profile__heading">
                                    <div class="profile__pic-wrapper">
                                        <img class="profile__pic" src="assets/img/users/client-avatar.svg" alt="">
                                    </div>
                                    <span class="profile__name">Hubert Sy</span>
                                    <span class="profile__email">hubertsy@samplemail.com</span>
                                </div>

                                <ul class="ct-profile__nav">
                                    <li>
                                        <a class="profile__link active" href="account-profile.php">
                                            <img class="" src="assets/img/icons/ic-user.svg" alt="">
                                            My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="profile__link" href="audit-trail.php">
                                            <img class="" src="assets/img/icons/ic-files.svg" alt="">
                                            Audit Trail
                                        </a>
                                    </li>
                                    <li>
                                        <a class="profile__link" href="faqs.php">
                                            <img class="" src="assets/img/icons/ic-info.svg" alt="">
                                            Help Desk/ Technical Support
                                        </a>
                                    </li>
                                    <li>
                                        <a class="profile__link color--danger" href="#">
                                            <i class="fe fe-power"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!--  -->

                        <!-- main -->
                        <div class="col-md-8 col-lg-9">
                            <div class="ct-profile__main bg--glass">
                                <div class="d-flex align-items-center">
                                    <div class="profile__pic-wrapper mr-4">
                                        <img class="profile__pic profile__pic--lg" src="assets/img/users/client-avatar.svg" alt="">

                                        <input class="input--hidden" id="input-prof-pic" type="file">
                                        <label class="profile__change-pic" for="input-prof-pic"> <i class="fas fa-pen"></i></label>
                                    </div>
                                    <div>
                                        <h2 class="profile__title mb-1">Edit Profile</h2>
                                        <a class="hyperlink hyperlink--info text--sm" href="account-change-password.php">Change Password</a>
                                    </div>
                                </div>

                                <div class="ct-profile__content">
                                    <ul class="db-tab mt-0">
                                        <li class="db-tab__item border-top-0 active" id="prof-account-tab">Account Information</li>
                                        <li class="db-tab__item border-top-0" id="prof-company-tab">Company Information</li>
                                    </ul>


                                    <!-- Edit Account Info -->
                                    <div class="ct-profile__account-container">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">First Name</label>
                                                        <input class="frm__input" type="text" value="Hubert">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Middle Name</label>
                                                        <input class="frm__input" type="text" value="Smith">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Last Name </label>
                                                        <input class="frm__input" type="text" value="Sy">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Name Ext.</label>
                                                        <input class="frm__input" type="text" value="N/A">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Contact No.</label>
                                                        <input class="frm__input" type="text" value="(+63) 9564464500">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Email Address .</label>
                                                        <input class="frm__input" type="text" value="hubertsy@samplemail.com">
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- cta -->
                                            <div class="d-flex justify-content-end mt-3">
                                                <a class="btn btn--outline-primary mr-2" href="account-profile.php">Cancel</a>
                                                <button class="btn btn--primary px-4" type="submit" value="Submit">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Edit Company Info -->
                                    <div class="ct-profile__company-container">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="frm__label">Applicant</label>
                                                        <input class="frm__input" type="text" value="GMA NETWORK INC.">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group frm--required">
                                                        <label class="frm__label">Type of Entity</label>
                                                        <div class="frm__select-group">
                                                            <select class="frm__input select2" name="sample">
                                                                <option value="A" selected>Corporation</option>
                                                                <option value="B">Option 2</option>
                                                                <option value="B">Option 3</option>
                                                                <option value="D">Option 4</option>
                                                                <option value="E">Option 5</option>
                                                            </select>
                                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="frm__label">Category</label>
                                                        <div class="frm__select-group">
                                                            <select class="frm__input select2" name="sample">
                                                                <option value="A" selected>Broadcast (AM/FM/TV)</option>
                                                                <option value="B">Option 2</option>
                                                                <option value="B">Option 3</option>
                                                                <option value="D">Option 4</option>
                                                                <option value="E">Option 5</option>
                                                            </select>
                                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Permit No.</label>
                                                        <input class="frm__input" type="text" value="PRM-01212022">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Validity (mm/dd/yyyy) </label>
                                                        <input class="frm__input" type="date">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Province</label>
                                                        <div class="frm__select-group">
                                                            <select class="frm__input select2" name="sample">
                                                                <option value="A" selected>NCR, SECOND DISTRICT</option>
                                                                <option value="B">Option 2</option>
                                                                <option value="B">Option 3</option>
                                                                <option value="D">Option 4</option>
                                                                <option value="E">Option 5</option>
                                                            </select>
                                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">City/Municipality</label>
                                                        <div class="frm__select-group">
                                                            <select class="frm__input select2" name="sample">
                                                                <option value="A" selected>Quezon City</option>
                                                                <option value="B">Option 2</option>
                                                                <option value="B">Option 3</option>
                                                                <option value="D">Option 4</option>
                                                                <option value="E">Option 5</option>
                                                            </select>
                                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Barangay</label>
                                                        <div class="frm__select-group">
                                                            <select class="frm__input select2" name="sample">
                                                                <option value="A" selected>South Triangle</option>
                                                                <option value="B">Option 2</option>
                                                                <option value="B">Option 3</option>
                                                                <option value="D">Option 4</option>
                                                                <option value="E">Option 5</option>
                                                            </select>
                                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Street</label>
                                                        <div class="frm__select-group">
                                                            <select class="frm__input select2" name="sample">
                                                                <option value="A" selected>Timog Avenue</option>
                                                                <option value="B">Option 2</option>
                                                                <option value="B">Option 3</option>
                                                                <option value="D">Option 4</option>
                                                                <option value="E">Option 5</option>
                                                            </select>
                                                            <i class="select__icon fe fe-chevron-down" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="frm__label">HouseUnit/Rm/Bldg. No. </label>
                                                        <input class="frm__input" type="text" value="EDSA corner ">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="frm__label">Zip Code</label>
                                                        <input class="frm__input" type="text" value="1103">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Contact No.</label>
                                                        <input class="frm__input" type="text" value="09123456789">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="frm__label">Email Address</label>
                                                        <input class="frm__input" type="email" value="gma.network@mail.com">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- cta -->
                                            <div class="d-flex justify-content-end mt-3">
                                                <a class="btn btn--outline-primary mr-2" href="account-profile.php">Cancel</a>
                                                <button class="btn btn--primary px-4" type="submit" value="Submit">Save</button>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>


<?php
include("footer.php");
?>