<?php
include("header.php");
?>

<main class="bg--lightblue">
    <!-- 'c' prefix for Client -->
    <section class="ct-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ct-btn-group mb-3">
                        <a class="btn btn--primary btn--sm px-3" data-toggle="modal" data-target="#modal-edit-records-summary" href="javascript:void(0)">Case Records Summary</a>
                        <a class="btn btn--outline-primary btn--sm px-3" data-toggle="modal" data-target="#modal-invalid-document" href="javascript:void(0)">Invalid documennt</a>
                    </div>
                    <div class="ct-btn-group">
                        <a class="btn btn--warning btn--sm px-3" data-toggle="modal" data-target="#modal-confirmation" href="javascript:void(0)">Confirmation modal</a>
                        <a class="btn btn--success btn--sm px-3" data-toggle="modal" data-target="#modal-success" href="javascript:void(0)">Success modal</a>
                        <a class="btn btn--danger btn--sm px-3" data-toggle="modal" data-target="#modal-failed" href="javascript:void(0)">Failed modal</a>
                        <a class="btn btn--warning btn--sm px-3" data-toggle="modal" data-target="#modal-pending" href="javascript:void(0)">Pending modal</a>
                    </div>
                    <hr>
                    <h4 class="mt-5">Added Feb-15</h4>
                    <div class="ct-btn-group">
                        <a class="btn btn--primary btn--sm px-3" data-toggle="modal" data-target="#modal-survey" href="javascript:void(0)">Start survey</a>
                        <a class="btn btn--primary btn--sm px-3" data-toggle="modal" data-target="#modal-thankyou" href="javascript:void(0)">Survey - Thank you</a>
                        <a class="btn btn--primary btn--sm px-3" data-toggle="modal" data-target="#modal-save-draft" href="javascript:void(0)">Application - Save as Draft</a>
                        <a class="btn btn--outline-warning btn--sm px-3" data-toggle="modal" data-target="#modal-access-denied" href="javascript:void(0)">Access Denied</a>
                        <a class="btn btn--outline-info btn--sm px-3" data-toggle="modal" data-target="#modal-update-frequency" href="javascript:void(0)">Update Frequency</a>
                        <a class="btn btn--outline-success btn--sm px-3" data-toggle="modal" data-target="#modal-for-release" href="javascript:void(0)">Available for Release</a>
                    </div>
                    <hr>
                    <h4 class="mt-5">Added Mar-3</h4>
                    <div class="ct-btn-group">
                        <a class="btn btn--primary px-3" data-toggle="modal" data-target="#modal-registration-summary" href="javascript:void(0)">Registration Summary</a>
                        <a class="btn btn--primary px-3" data-toggle="modal" data-target="#modal-application-summary" href="javascript:void(0)">New Application Summary</a>
                        <a class="btn btn--primary px-3" data-toggle="modal" data-target="#modal-motion-for-withdrawal" href="javascript:void(0)">Motion for Withdrawal</a>
                    </div>
                    <h4 class="mt-5">Added Mar-4</h4>
                    <div class="ct-btn-group">
                        <a class="btn btn--outline-primary px-3" data-toggle="modal" data-target="#modal-pay-onsite" href="javascript:void(0)">Pay On Site</a>
                        <a class="btn btn--outline-primary px-3" data-toggle="modal" data-target="#modal-invite-parties" href="javascript:void(0)">Invite/Notify Affected Parties</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--</div>-->
</main>

<?php
include("footer.php");
?>