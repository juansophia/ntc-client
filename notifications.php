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
                    <h1 class="ct-page__title">Notifications</h1>
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="ct-breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notifications</li>
                        </ol>
                    </nav>
                    <section class="ct-notif">
                        <div class="ct-notif__card bg--glass">
                            <div class="ct-notif__header">
                                <h2 class="ct-notif__heading">Newest</h2>
                                <a class="hyperlink--primary text--sm font--secondary" href="#">Mark all as read</a>
                            </div>
                            <div class="ct-divider"></div>
                            <div class="ct-notif__body">
                                <h3 class="ct-notif__subheading">Upcoming Hearing</h3>

                                <!-- unread notif has class "unread" for red circle -->
                                <div class="ct-notif__item hover--border-left unread">
                                    <div class="ct-notif__details">
                                        <h4 class="ct-notif__title">Hearing Date <i class="ct-notif__circle"></i> </h4>
                                        <p class="ct-notif__desc truncate">Suspendiasda da ad d ad ada d ad ad a da dsse sodales sapien ut diam rutrum tristique. </p>
                                    </div>
                                    <div class="ct-notif__actions">
                                        <a class="btn btn--icon btn--icon-md btn--basic" href="#"><i class="fe fe-trash-2"></i></a>
                                        <small class="ct-notif__datestamp">3 hours ago</small>
                                    </div>
                                </div>

                                <!-- notif item -->
                                <div class="ct-notif__item hover--border-left">
                                    <div class="ct-notif__details">
                                        <h4 class="ct-notif__title">Violations <i class="ct-notif__circle"></i> </h4>
                                        <p class="ct-notif__desc truncate">Suspendiasda da ad d ad ada d ad ad a da dsse sodales sapien ut diam rutrum tristique. </p>
                                    </div>
                                    <div class="ct-notif__actions">
                                        <a class="btn btn--icon btn--icon-md btn--basic" href="#"><i class="fe fe-trash-2"></i></a>
                                        <small class="ct-notif__datestamp">3 hours ago</small>
                                    </div>
                                </div>

                                <h2 class="ct-notif__heading mt-4">Oldest</h2>
                                <!-- notif item -->
                                <div class="ct-notif__item hover--border-left unread">
                                    <div class="ct-notif__details">
                                        <h4 class="ct-notif__title">Billing <i class="ct-notif__circle"></i> </h4>
                                        <p class="ct-notif__desc truncate">Suspendiasda da ad d ad ada d ad ad a da dsse sodales sapien ut diam rutrum tristique. </p>
                                    </div>
                                    <div class="ct-notif__actions">
                                        <a class="btn btn--icon btn--icon-md btn--basic" href="#"><i class="fe fe-trash-2"></i></a>
                                        <small class="ct-notif__datestamp">3 hours ago</small>
                                    </div>
                                </div>

                                <!-- notif item -->
                                <div class="ct-notif__item hover--border-left">
                                    <div class="ct-notif__details">
                                        <h4 class="ct-notif__title">Complaint<i class="ct-notif__circle"></i> </h4>
                                        <p class="ct-notif__desc truncate">Suspendiasda da ad d ad ada d ad ad a da dsse sodales sapien ut diam rutrum tristique. </p>
                                    </div>
                                    <div class="ct-notif__actions">
                                        <a class="btn btn--icon btn--icon-md btn--basic" href="#"><i class="fe fe-trash-2"></i></a>
                                        <small class="ct-notif__datestamp">3 hours ago</small>
                                    </div>
                                </div>


                                <!-- notif item -->
                                <div class="ct-notif__item hover--border-left">
                                    <div class="ct-notif__details">
                                        <h4 class="ct-notif__title">Hearing Date <i class="ct-notif__circle"></i> </h4>
                                        <p class="ct-notif__desc truncate">Suspendiasda da ad d ad ada d ad ad a da dsse sodales sapien ut diam rutrum tristique. </p>
                                    </div>
                                    <div class="ct-notif__actions">
                                        <a class="btn btn--icon btn--icon-md btn--basic" href="#"><i class="fe fe-trash-2"></i></a>
                                        <small class="ct-notif__datestamp">3 hours ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>