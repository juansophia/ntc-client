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
                    <h1 class="ct-page__title">Helpdesk / Technical Support</h1>
                    <div class="d-flex justify-content-between flex-wrap mb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="ct-breadcrumb breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Helpdesk / Technical Support</li>
                            </ol>
                        </nav>
                        <a data-toggle="modal" data-target="#modal-contact-us" href="#" class="btn btn--primary px-4">Contact Us</a>
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
                                        <a class="profile__link" href="audit-trail.php">
                                            <img class="" src="assets/img/icons/ic-files.svg" alt="">
                                            Audit Trail
                                        </a>
                                    </li>
                                    <li>
                                        <a class="profile__link active" href="faqs.php">
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
                                <h2 class="profile__title mb-3">Frequently Asked Questions</h2>
                                <p>In this section you can find answers to some of the frequently asked questions at the NTC.
                                    Questions are grouped according to categories. Please select from any of the categories
                                    to proceed to the specific topic you are interested.</p>
                                <!-- Accordion -->
                                <div class="ct-accordion ct-faqs__accordion accordion" id="faqs-accordion">
                                    <!-- start: TELECOMMUNICATION -->
                                    <div class="accordion-item">
                                        <div class="ct-accordion__heading ct-accordion__heading--main" type="button" data-toggle="collapse" data-target="#faq-category-1" aria-expanded="true" aria-controls="faq-category-1">
                                            <h4 class="font--tertiary mb-0"> <img class="mr-2 d-inline-block" src="assets/img/icons/faq-telecom.svg" alt="">Telecommunications</h4>
                                        </div>


                                        <div id="faq-category-1" class="accordion-collapse show" data-parent="#faqs-accordion">
                                            <div class="ct-accordion__body p-0">
                                                <!-- start: Question inner accordion-->
                                                <div class="ct-accordion accordion" id="category1-questions">
                                                    <!-- Question 1 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category1-question1" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">1. What is required in order to operate and maintain public telecommunications facilities and services in the Philippines?</h4>
                                                        </div>
                                                        <div id="category1-question1" class="accordion-collapse collapse" data-parent="#category1-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>A Certificate of Public Convenience and Necessity (CPCN) or authorization predicted on a valid congressional franchise is required before an entity is allowed to install, operate and maintain public telecommunications facilities and services in the country.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 2 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category1-question2" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">2. How does one obtain a CPCN?</h4>
                                                        </div>
                                                        <div id="category1-question2" class="accordion-collapse collapse" data-parent="#category1-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>To obtain a CPCN, an applicant has to file an application with the National Telecommunications Commissions Commission (NTC), pay the required filing fee, and after which, the application will be assigned a case number. A Notice of Hearing is published in a newspaper of general circulation. The application undergoes public hearings, is evaluated and an Order/Decision is issued granting the CPCN or Provisional Authority (PA).</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 3 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category1-question3" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">3. Is there a limit of foreign ownership for companies intending to apply for CPCN or authorization?</h4>
                                                        </div>
                                                        <div id="category1-question3" class="accordion-collapse collapse" data-parent="#category1-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>Foreign ownership is limited to 40%.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end: Question inner accordion -->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end: TELECOMMUNICATION -->

                                    <!-- start: LICENSING -->
                                    <div class="accordion-item">
                                        <div class="ct-accordion__heading ct-accordion__heading--main collapsed" type="button" data-toggle="collapse" data-target="#faq-category-2" aria-expanded="true" aria-controls="faq-category-2">
                                            <h4 class="font--tertiary mb-0"> <img class="mr-2 d-inline-block" src="assets/img/icons/faq-licensing.svg" alt="">Licensing</h4>
                                        </div>


                                        <div id="faq-category-2" class="accordion-collapse collapse" data-parent="#faqs-accordion">
                                            <div class="ct-accordion__body p-0">
                                                <!-- start: Question inner accordion-->
                                                <div class="ct-accordion accordion" id="category2-questions">
                                                    <!-- Question 1 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category2-question1" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">1. Where can I file my application for NTC examination?</h4>
                                                        </div>
                                                        <div id="category2-question1" class="accordion-collapse collapse" data-parent="#category2-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>Applications for examination may be filed at the following offices/addresses:</p>
                                                                <ol class="list" type="a">
                                                                    <li>NTC Central Office NTC Building, BIR Road, East Triangle, Diliman, Quezon City Telephone Number – (02) 924-25-95</li>
                                                                    <li>Any of the Regional Offices</li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 2 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category2-question2" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">2. What is the schedule of NTC examination in Manila? How much is the examination fee?</h4>
                                                        </div>
                                                        <div id="category2-question2" class="accordion-collapse collapse" data-parent="#category2-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>The NTC examination is scheduled every Friday, unless it is declared a holiday. The examination fee is PHP50.00.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 3 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category2-question3" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">3. Where is the NTC examination conducted?</h4>
                                                        </div>
                                                        <div id="category2-question3" class="accordion-collapse collapse" data-parent="#category2-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>The NTC examination is conducted at the NTC Office, BIR Road, East Triangle, Diliman, Quezon City, unless there is a new venue, which will be determined by the Radio Operator Examination Committee (ROEC). The new venue will be announced two (2) weeks earlier than the scheduled date of examination.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 4 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category2-question4" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">4. Where can I file my Radio Operator Certificate?</h4>
                                                        </div>
                                                        <div id="category2-question4" class="accordion-collapse collapse" data-parent="#category2-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>Applications for examination may be filed at the following offices/addresses:</p>
                                                                <ol class="list" type="a">
                                                                    <li>NTC Central Office NTC Building, BIR Road, East Triangle, Diliman, Quezon City Telephone Number – (02) 924-25-95</li>
                                                                    <li>Any of the Regional Offices</li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 5 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category2-question5" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">5. What are the documents being issued by NTC for ships intended for international trade?</h4>
                                                        </div>
                                                        <div id="category2-question5" class="accordion-collapse collapse" data-parent="#category2-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <ol class="list" type="a">
                                                                    <li>Cargo Ship Safety Radio Certificate (CSSRC)</li>
                                                                    <li>Ship Radio Station License (RSL)</li>
                                                                    <li>Ship Earth Station License (SES)</li>
                                                                    <li>Special Permit for Domestic Vessels to Engage Temporarily in International Trade</li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 6 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category2-question6" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">6. What are the requirements for the issuance of New Radio Station License (RSL) on board vessel engaged in the international trade?</h4>
                                                        </div>
                                                        <div id="category2-question6" class="accordion-collapse collapse" data-parent="#category2-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <ol class="list" type="a">
                                                                    <li>Application for Permit to Purchase/Possess;</li>
                                                                    <li>Application for New Radio Station License;</li>
                                                                    <li>Authenticated Copy of Latest Issued Temporary Permit;</li>
                                                                    <li>NTC Survey Report Form properly accomplished by NTC authorized Classification society and properly signed by any authorized representative of the Philippine Consulate at place of survey or by the Master of the vessel countersigned by the President/Manager of the Company</li>
                                                                    <li>Authenticated copy of the Certificate of Philippine Registry;</li>
                                                                    <li>Accounting Authority Service Contract entered into by despondent Owner and SGV and Company;</li>
                                                                    <li>Valid General Operators Certificates of two (2) deck officers.</li>
                                                                    <li>Contract of Employment of deck officers issued by POEA/Certificate of Employment issued by Shipping Company</li>
                                                                    <li>Copy of valid Shore-based Maintenance Agreement</li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end: Question inner accordion -->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end: LICENSING -->

                                    <!-- start: MISCELLANEOUS -->
                                    <div class="accordion-item">
                                        <div class="ct-accordion__heading ct-accordion__heading--main collapsed" type="button" data-toggle="collapse" data-target="#faq-category-2" aria-expanded="true" aria-controls="faq-category-2">
                                            <h4 class="font--tertiary mb-0"> <img class="mr-2 d-inline-block" src="assets/img/icons/faq-misc.svg" alt="">Miscellaneous</h4>
                                        </div>


                                        <div id="faq-category-2" class="accordion-collapse collapse" data-parent="#faqs-accordion">
                                            <div class="ct-accordion__body p-0">
                                                <!-- start: Question inner accordion-->
                                                <div class="ct-accordion accordion" id="category3-questions">
                                                    <!-- Question 1 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category3-question1" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">1. What is Interconnection?</h4>
                                                        </div>
                                                        <div id="category3-question1" class="accordion-collapse collapse" data-parent="#category3-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>Interconnection, as defined by Republic Act 7925 is the linkage, by wire, radio, satellite or other means, of two or more existing telecommunications carriers or operators with one another for the purpose of allowing or enabling the subscribers of one carrier or operator to access or reach the subscribers of the other carriers or operators.</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 2 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category3-question2" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">2. Is voice over internet allowed by the NTC?</h4>
                                                        </div>
                                                        <div id="category3-question2" class="accordion-collapse collapse" data-parent="#category3-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>It is not prohibited. However, it should follow rules on voice service. Please contact the NTC for further clarification.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Question 3 -->
                                                    <div class="accordion-item">
                                                        <div class="ct-accordion__heading ct-accordion__heading--inner collapsed" type="button" data-toggle="collapse" data-target="#category3-question3" aria-expanded="true" aria-controls="faq-item-one">
                                                            <h4 class="font--tertiary mb-0">3. What is convergence?</h4>
                                                        </div>
                                                        <div id="category3-question3" class="accordion-collapse collapse" data-parent="#category3-questions">
                                                            <div class="ct-accordion__body ct-accordion__body--inner">
                                                                <p class="font--tertiary mb-3">Answer:</p>
                                                                <p>The November 2000 Report: Incremental Change or step Function Gain? Positioning the Philippines’ Communications sector in the Emerging WTO Environment by Cutler and Company defines convergence as; the progressive integration of the value chains of the information and content industries- telecommunications, posts multimedia, electronic commerce, broadcasting, information technology, and publishing industries into a single value chain based on the common use of distributed</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- end: Question inner accordion -->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end: MISCELLANEOUS -->

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