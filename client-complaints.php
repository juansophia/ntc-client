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

                    <h1 class="ct-">Client Complaints</h1>
                    <div class="d-flex justify-content-between flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="licensing-management.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Client Complaints</li>
                            </ol>
                        </nav>
                        <a href="file-complaint.php" class="btn btn--primary px-4 grow-0">File New Case</a>
                    </div>

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
                                        <th>Case No.</th>
                                        <th>Nature of Complaint</th>
                                        <th>Date Filed</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="font--tertiary text--nowrap">2019-001</span></td>
                                        <td><span class="font--tertiary truncate">Poor Service (Technical Service) </span></td>
                                        <td><span class="text--nowrap">Tue., Dec 12, 2022</span></td>
                                        <td><span class="tag tag--success tag--with-circle">completed</span></td>
                                        <td>
                                            <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-complaint-details">View Details</button>
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

                                </tbody>
                            </table>
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