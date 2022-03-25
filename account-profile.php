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
                                    </div>

                                    <div>
                                        <h2 class="profile__title mb-1">Profile</h2>
                                        <a class="hyperlink hyperlink--info text--sm" href="account-change-password.php">Change Password</a>
                                    </div>
                                </div>

                                <div class="ct-profile__content">
                                    <ul class="db-tab mt-0">
                                        <li class="db-tab__item border-top-0 active" id="prof-account-tab">Account Information</li>
                                        <li class="db-tab__item border-top-0" id="prof-company-tab">Company Information</li>
                                    </ul>

                                    <!-- Account Info -->
                                    <div class="ct-profile__account-container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        First Name
                                                    </span>
                                                    <span class="profile__input">
                                                        Hubert
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Middle Name
                                                    </span>
                                                    <span class="profile__input">
                                                        Smith
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Last Name
                                                    </span>
                                                    <span class="profile__input">
                                                        Sy
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Name Ext.
                                                    </span>
                                                    <span class="profile__input">
                                                        N/A
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Contact No.
                                                    </span>
                                                    <span class="profile__input">
                                                        (+63) 9564464500
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Email Address
                                                    </span>
                                                    <span class="profile__input">
                                                        hubertsy@samplemail.com
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Company Info -->
                                    <div class="ct-profile__company-container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Applicant
                                                    </span>
                                                    <span class="profile__input">
                                                        GMA NETWORK INC.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Type of Entity
                                                    </span>
                                                    <span class="profile__input">
                                                        Corporation
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Category
                                                    </span>
                                                    <span class="profile__input">
                                                        Broadcast (AM/FM/TV)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Permit No.
                                                    </span>
                                                    <span class="profile__input">
                                                        PRM-01212022
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Validity (mm/dd/yyyy)
                                                    </span>
                                                    <span class="profile__input">
                                                        12/30/2021
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Province
                                                    </span>
                                                    <span class="profile__input">
                                                        NCR, SECOND DISTRICT
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        City/Municipality
                                                    </span>
                                                    <span class="profile__input">
                                                        Quezon City
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Barangay
                                                    </span>
                                                    <span class="profile__input">
                                                        South Triangle
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Street
                                                    </span>
                                                    <span class="profile__input">
                                                        Timog Avenue
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        HouseUnit/Rm/Bldg. No.
                                                    </span>
                                                    <span class="profile__input">
                                                        EDSA corner
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Zip Code
                                                    </span>
                                                    <span class="profile__input">
                                                        1103
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Contact No.
                                                    </span>
                                                    <span class="profile__input">
                                                        09123456789
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile__data">
                                                    <span class="profile__label">
                                                        Email Address
                                                    </span>
                                                    <span class="profile__input">
                                                        gma.network@mail.com
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- cta -->
                                    <div class="d-flex justify-content-end mt-3">
                                        <a class="btn btn--primary " href="account-edit-profile.php">Edit Profile</a>
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