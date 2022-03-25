<?php
include("header.php");
?>

<?php
include("client-header-unauth.php");
?>

<main class="cd-main-content cd-main-content--client">
    <div class="ct-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="ct-page__title">Hearing Notices</h1>

                    <div class="ct-table-wrapper bg--glass mt-3">
                        <!-- <div class="bg--noise"></div> -->
                        <div class="ct-table ct-table--hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Case No.</th>
                                        <th>Name of Applicant</th>
                                        <th>Nature of Application</th>
                                        <th>Date Filed</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="text--nowrap">2019-001</span></td>
                                        <td><span class="truncate">Manila Boradcasting Company</span></td>
                                        <td><span class="text--nowrap">Issuance of Provisional Authority</span></td>
                                        <td><span class="text--nowrap">Sun., Dec 12, 2021</span></td>
                                        <td><span class="tag tag--info tag--with-circle">For initial hearing</span></td>
                                        <td>
                                            <div class="ct-table__dropdown dropdown">
                                                <a class="btn btn--icon btn--icon-lg btn--basic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="hearing-details.php"> <i class="fe fe-eye mr-2 text--xs"></i>View Details</a>
                                                    <a class="dropdown-item font--tertiary color--tertiary" href="#"> <i class="fas fa-eye mr-2 text--xs"></i>View N.O.H</a>
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