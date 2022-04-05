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

                    <h1 class="ct-page__title">List of Authorization Cases</h1>
                    <div class="d-flex justify-content-between flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Case Records</li>
                            </ol>
                        </nav>
                        <a href="new-application-step-1.php" class="btn btn--outline-secondary px-4 grow-0">Submit Application</a>
                    </div>
                    <div class="ct-table-settings__row">
                        <div class="ct-table-settings__col ct-table-settings__col--right">
                            <!-- Nav pills / tab -->
                            <ul class="ct-nav-pills nav nav-pills">
                                <li class="nav-item">
                                    <button class="nav-link active" aria-current="page">All</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link">Licenses</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link">Permits</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link">Certificates</button>
                                </li>
                            </ul>


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
                                        <th>Case No.</th>
                                        <th>Nature of Application</th>
                                        <th>Date Filed</th>
                                        <th>Date Until</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="text--nowrap">2019-001</span></td>
                                        <td><span class="truncate">Construction Permit / Radio Station long wordddddd </span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2022</span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2023</span></td>
                                        <td><span class="tag tag--success tag--with-circle">Paid</span></td>
                                        <td>
                                            <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-case-details">View Details</button>
                                        </td>
                                        <td>
                                            <div class="ct-table__dropdown dropdown">
                                                <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="#"> <i class="fe fe-eye mr-2 text--xs"></i>View Order of Payment</a>
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                    <a class="dropdown-item font--tertiary color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text--nowrap">2019-001</span></td>
                                        <td><span class="truncate">Construction Permit / Radio Station long wordddddd </span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2022</span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2023</span></td>
                                        <td><span class="tag tag--danger tag--with-circle">For Payment</span></td>
                                        <td><a class="btn btn--primary btn--sm px-3 ct-drawer__toggle-btn" href="#">View Details</a></td>
                                        <td>
                                            <div class="ct-table__dropdown dropdown">
                                                <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="#"> <i class="fe fe-eye mr-2 text--xs"></i>View Order of Payment</a>
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                    <a class="dropdown-item font--tertiary color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text--nowrap">2019-001</span></td>
                                        <td><span class="truncate">Construction Permit / Radio Station long wordddddd </span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2022</span></td>
                                        <td><span class="text--nowrap">-</span></td>
                                        <td><span class="tag tag--warning tag--with-circle">For Filing</span></td>
                                        <td><a class="btn btn--primary btn--sm px-3 ct-drawer__toggle-btn" href="#">View Details</a></td>
                                        <td>
                                            <div class="ct-table__dropdown dropdown">
                                                <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="#"> <i class="fe fe-eye mr-2 text--xs"></i>View Order of Payment</a>
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                    <a class="dropdown-item font--tertiary color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="text--nowrap">2019-001</span></td>
                                        <td><span class="truncate">Construction Permit / Radio Station long wordddddd </span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2022</span></td>
                                        <td><span class="text--nowrap">-</span></td>
                                        <td><span class="tag tag--info tag--with-circle">For Hearing</span></td>
                                        <td><a class="btn btn--primary btn--sm px-3 ct-drawer__toggle-btn" href="#">View Details</a></td>
                                        <td>
                                            <div class="ct-table__dropdown dropdown">
                                                <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="#"> <i class="fe fe-eye mr-2 text--xs"></i>View Order of Payment</a>
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                    <a class="dropdown-item font--tertiary color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="text--nowrap">2019-001</span></td>
                                        <td><span class="truncate">Construction Permit / Radio Station long wordddddd </span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2022</span></td>
                                        <td><span class="text--nowrap">-</span></td>
                                        <td><span class="tag tag--dark tag--with-circle">Promulgated</span></td>
                                        <td><a class="btn btn--primary btn--sm px-3 ct-drawer__toggle-btn" href="#">View Details</a></td>
                                        <td>
                                            <div class="ct-table__dropdown dropdown">
                                                <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="#"> <i class="fe fe-eye mr-2 text--xs"></i>View Order of Payment</a>
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="edit-case-records-details.php"> <i class="fas fa-pen mr-2 text--xs"></i>Edit Info</a>
                                                    <a class="dropdown-item font--tertiary color--secondary" href="#"> <i class="fas fa-trash-alt mr-2 text--xs"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center flex-wrap mt-4">
                        <!-- Entries -->
                        <div class="ct-table__entries">
                            <label>
                                Showng 1 to 5 of 25 rows
                                <div class="frm__select-group">
                                    <select class="frm__input" name="example_length" aria-controls="example">
                                        <option selected value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                    </select>
                                    <i class="select__icon fe fe-chevron-down px-0 pr-1" aria-hidden="true"></i>
                                </div>
                                entries per page
                            </label>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="ct-pagination pagination mb-3">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>