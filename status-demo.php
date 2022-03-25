<?php
include("header.php");
?>

<main class="">
    <!-- 'c' prefix for Client -->
    <section class="ct-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-2">
                    <h3>Case Management - Client </h3>
                    <div class="d-flex flex-column">
                        <span class="tag tag--neutral tag--with-circle">draft</span>
                        <span class="tag tag--warning tag--with-circle"> For Assessment</span>
                        <span class="tag tag--danger tag--with-circle">Ready for Payment</span>
                        <span class="tag tag--success tag--with-circle">Paid</span>
                        <span class="tag tag--violet tag--with-circle">NOH Recieved</span>
                        <span class="tag tag--info tag--with-circle">Notified </span>
                        <span class="tag tag--info tag--with-circle">For Initial Hearing</span>
                        <span class="tag tag--info tag--with-circle">Ongoing Hearing</span>
                        <span class="tag tag--info tag--with-circle">decision published</span>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <h3>Case Management - Admin </h3>
                    <div class="d-flex flex-column">
                        <span class="tag tag--warning tag--with-circle"> For Assessment</span>
                        <span class="tag tag--info tag--with-circle">decision published</span>
                        <span class="tag tag--warning tag--with-circle"> SOA for approval</span>
                        <span class="tag tag--success tag--with-circle"> SOA RECEIVED</span>
                        <span class="tag tag--violet tag--with-circle">OP FOR ISSUANCE</span>
                        <span class="tag tag--danger tag--with-circle">READY FOR PAYMENT</span>
                        <span class="tag tag--success tag--with-circle"> PAID</span>
                        <span class="tag tag--info tag--with-circle">RECIEVED</span>
                        <span class="tag tag--info tag--with-circle">FOR SCHEDULE</span>
                        <span class="tag tag--warning tag--with-circle">FOR CONFIRMATION</span>
                        <span class="tag tag--info tag--with-circle">FOR SCHEDULE APPROVAL</span>
                        <span class="tag tag--warning tag--with-circle">NOH: FOR SENDING</span>
                        <span class="tag tag--violet tag--with-circle">NOH: FOR SENDING</span>
                        <span class="tag tag--info tag--with-circle">ONGOING HEARING</span>
                        <span class="tag tag--warning tag--with-circle">DELIBERATION FOR SCHEDULE</span>
                        <span class="tag tag--success tag--with-circle"> DELIBERATED DURING EN BANC</span>
                        <span class="tag tag--violet tag--with-circle">ORDER: FOR SENDING</span>
                        <span class="tag tag--info tag--with-circle">DOCKETED</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 py-2">
                    <h3>License Management - Client </h3>
                    <div class="d-flex flex-column">
                        <span class="tag tag--warning tag--with-circle"> For Assessment</span>
                        <span class="tag tag--warning tag--with-circle"> Pending </span>
                        <span class="tag tag--success tag--with-circle"> Completed </span>
                        <span class="tag tag--danger tag--with-circle"> Ready for Payment </span>
                        <span class="tag tag--danger tag--with-circle"> Expired </span>
                        <span class="tag tag--success tag--with-circle"> Released </span>
                        <span class="tag tag--info tag--with-circle"> For released </span>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <h3>License Management - Admin </h3>
                    <div class="d-flex flex-column">
                        <span class="tag tag--warning tag--with-circle"> Pending </span>
                        <span class="tag tag--success tag--with-circle"> Released </span>
                        <span class="tag tag--danger tag--with-circle"> Expired </span>
                        <span class="tag tag--warning tag--with-circle"> For Assessment </span>
                        <span class="tag tag--warning tag--with-circle"> SOA for approval </span>
                        <span class="tag tag--violet tag--with-circle"> OP for issuance </span>
                        <span class="tag tag--info tag--with-circle"> Received </span>
                        <span class="tag tag--info tag--with-circle"> Ready for review </span>
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