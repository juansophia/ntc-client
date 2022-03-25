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
                        <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-case-details">Case Details Drawer</button>
                        <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-license-details">License Details Drawer</button>
                        <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-complaint-details">Complaint Details Drawer</button>
                        <button class="btn btn--primary btn--sm px-3" type="button" data-toggle="drawer" data-target="#drawer-billing-details">Billing Details Drawer</button>
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