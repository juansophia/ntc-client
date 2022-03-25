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
                    <h1 class="ct-page__title">Audit Trail</h1>
                    <div class="d-flex justify-content-between flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Audit Trail</li>
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
                                        <a class="profile__link" href="account-profile.php">
                                            <img class="" src="assets/img/icons/ic-user.svg" alt="">
                                            My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="profile__link active" href="audit-trail.php">
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
                            <div class="ct-table-settings__row">
                                <div class="ct-table-settings__col ct-table-settings__col--right">
                                    <!-- Entries -->
                                    <div class="ct-table__entries">
                                        <label>
                                            Show
                                            <div class="frm__select-group">
                                                <select class="frm__input" name="example_length" aria-controls="example">
                                                    <option selected value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                </select>
                                                <i class="select__icon fe fe-chevron-down px-0 pr-1" aria-hidden="true"></i>
                                            </div>
                                            Entries
                                        </label>
                                    </div>

                                    <!-- Advanced Search -->
                                    <div class="ct-advanced-search-group">
                                        <div class="frm__input-group">
                                            <div class="input-group__append"><i class="fe fe-search color--neutral-0 pr-1"></i></div>
                                            <input class="frm__input pr-4" type="text" placeholder="Search">
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn--tertiary btn--sm br--xs" href="#" role="button" id="dropdown-advanced-search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Advanced Search
                                            </a>

                                            <div class="dropdown-menu dropdown-menu--lg dropdown-menu-right br--xs mt-3" aria-labelledby="dropdown-advanced-search">
                                                <form action="">
                                                    <div class="row mb-2">
                                                        <div class="col-6 px-1">
                                                            <input type="text" class="frm__input" value="Item 1">
                                                        </div>
                                                        <div class="col-6 px-1">
                                                            <div class="frm__select-group">
                                                                <select class="frm__input" name="sample">
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

                                                    <div class="row mb-2">
                                                        <div class="col-6 px-1">
                                                            <input type="text" class="frm__input" value="Item 1">
                                                        </div>
                                                        <div class="col-6 px-1">
                                                            <div class="frm__select-group">
                                                                <select class="frm__input" name="sample">
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

                                                    <div class="row mb-2">
                                                        <div class="col-6 px-1">
                                                            <input type="text" class="frm__input" value="Item 1">
                                                        </div>
                                                        <div class="col-6 px-1">
                                                            <div class="frm__select-group">
                                                                <select class="frm__input" name="sample">
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
                                                        <div class="col-12">
                                                            <div class="d-flex justify-content-end mt-2">
                                                                <a class="btn btn--sm btn--basic br--xs mr-2" href="">Cancel</a>
                                                                <input class="btn btn--sm btn--tertiary" type="submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="ct-table-wrapper bg--glass">
                                <div class="bg--noise"></div>
                                <div class="ct-table ct-table--hover">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Actions Done</th>
                                                <th>User Account</th>
                                                <th>IP Address</th>
                                                <th>Timestamp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="text--nowrap truncate">Updated Case 2019-001</span></td>
                                                <td><span class="">Hubert Sy</span></td>
                                                <td><span class="text--nowrap">172.31.255.255</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <div class="ct-table__dropdown dropdown">
                                                        <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                            <a class="dropdown-item color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="text--nowrap truncate">Updated Case 2019-001</span></td>
                                                <td><span class="">Hubert Sy</span></td>
                                                <td><span class="text--nowrap">172.31.255.255</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <div class="ct-table__dropdown dropdown">
                                                        <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                            <a class="dropdown-item color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="text--nowrap truncate">Updated Case 2019-001</span></td>
                                                <td><span class="">Hubert Sy</span></td>
                                                <td><span class="text--nowrap">172.31.255.255</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <div class="ct-table__dropdown dropdown">
                                                        <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                            <a class="dropdown-item color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="text--nowrap truncate">Updated Case 2019-001</span></td>
                                                <td><span class="">Hubert Sy</span></td>
                                                <td><span class="text--nowrap">172.31.255.255</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <div class="ct-table__dropdown dropdown">
                                                        <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                            <a class="dropdown-item color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="text--nowrap truncate">Updated Case 2019-001</span></td>
                                                <td><span class="">Hubert Sy</span></td>
                                                <td><span class="text--nowrap">172.31.255.255</span></td>
                                                <td><span class="text--nowrap">Dec 12, 2022 - 8:31 AM</span></td>
                                                <td>
                                                    <div class="ct-table__dropdown dropdown">
                                                        <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                            <a class="dropdown-item color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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