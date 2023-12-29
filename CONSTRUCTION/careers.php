<?php
include "require/header.php";
?>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

    <!-- ––––––––––––[ PAGE CONTENT ]–––––––––––– -->
        <main id="mainContent" class="main-content">
            <!-- start: Hero Area -->
            <section class="section breadcrumb-area pt-100 pb-80 bg-ct" data-bg-img="assets/images/background/25.jpg">
                <div class="container t-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                            <div class="section-top-title">
                                <h1 class="t-uppercase font-45">Careers</h1>
                                <ol class="breadcrumb">
                                  <li><a href="index.php"><i class="fa fa-home mr-10"></i>Home</a></li>
                                  <li class="active">Careers</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: Hero Area -->

            <!-- start: Contact Us Area  -->
            <section class="section contact-us-area ptb-60">
                <div class="container">
                    <h3 class="h-title pb-15 pr-20 mb-40 font-26 is-inline-block">Careers</h3>
                   
                    <div class="row row-tb-15">
                        <div class="col-md-6">
                            <p class="color-mid mb-30">Call or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!</p>
                            <div class="contact-form">
                                <form action="#" method="post" id="contactForm">
                                    <div class="row row-tb-10">
                                        <div class="col-xs-12">
                                            <input class="form-control input-lg" type="text" placeholder="Full Name" name="required['name']" id="contactName">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control input-lg" type="text" placeholder="Email" name="required['email']" id="contactEmail">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control input-lg" type="phone" placeholder="Phone Number" name="required['phone']" id="contactPhone">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control input-lg" type="text" placeholder="Suject" name="required['subject']" id="contactSubject">
                                        </div>
                                        <div class="col-xs-12">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Your Message" name="required['message']" id="contactMessage"></textarea>
                                        </div>
                                        <div class="col-xs-12">
                                            <button class="btn btn-block btn-lg" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="contact-response" id="contactResponse"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gmap locked" data-toggle-class="locked" data-toggle-event="click#gmapLock">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12784710.729794526!2d-95.70452899344905!3d38.52760683652829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7b8ef8e9099%3A0x93fc3322b2afd0e9!2sAmerican+Iron+and+Steel+Institute!5e0!3m2!1sen!2s!4v1492443664482"></iframe>
                                <span class="gmap-lock" id="gmapLock"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: Contact Us Area  -->



		<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
<?php include "require/footer.php"; ?>
