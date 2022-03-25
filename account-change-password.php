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
                        <div class="col-md-8 col-lg-4">
                            <div class="ct-profile__main bg--glass">
                                <h2 class="profile__title mb-4">Change Password</h2>
                                <form class="" action="">
                                    <div class="form-group">
                                        <label class="frm__label">Old Password</label>
                                        <input class="frm__input" type="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="frm__label">New Password</label>
                                        <input class="frm__input" type="password" required>
                                    </div>
                                    <div class="form-group frm--danger">
                                        <label class="frm__label">Confirm Password</label>
                                        <input class="frm__input" type="password" required>
                                        <small class="frm__guidetext frm__guidetext--danger"> Those passwords didn't match. Try again</small>

                                    </div>

                                    <!-- cta -->
                                    <div class="d-flex justify-content-end mt-3">
                                        <button class="btn btn--primary px-4" type="submit" value="Submit">Save</button>
                                    </div>
                                </form>
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