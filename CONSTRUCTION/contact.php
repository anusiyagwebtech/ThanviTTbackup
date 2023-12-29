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
                                <h1 class="t-uppercase font-45">CONTACT US</h1>
                                <ol class="breadcrumb">
                                  <li><a href="index.php"><i class="fa fa-home mr-10"></i>Home</a></li>
                                  <li class="active">Contact us</li>
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
                    <h3 class="h-title pb-15 pr-20 mb-40 font-26 is-inline-block">Contact Us</h3>
                    <div class="row mb-10">
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="contact-box t-center p-20">
                                <div class="contact-icon">
                                    <i class="lnr lnr-map-marker"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Our Location</h5>
                                <p class="color-mid">221, Nethaji main road,<br> Bibi kulam , Madurai -625002</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="contact-box t-center p-20">
                                <div class="contact-icon">
                                    <i class="lnr lnr-phone"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Call Us</h5>
                                <p class="color-mid">Phone : +1 (800) 233-2742
                                    <br> Fax : +1 (800) 244-2743</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="contact-box t-center p-20">
                                <div class="contact-icon">
                                    <i class="lnr lnr-laptop-phone"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Connect Online</h5>
                                <p class="color-mid">Email : drprofessional.er@gmail.com
                                   </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="contact-box t-center p-20">
                                <div class="contact-icon">
                                    <i class="lnr lnr-calendar-full"></i>
                                </div>
                                <h5 class="t-uppercase mb-10">Open Hours</h5>
                                <p class="color-mid">Mon-Fri : 9 AM  13 6 PM
                                    <br> Saturday-Sunday : Closed</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-tb-15">
                        <div class="col-md-6">
                            <p class="color-mid mb-30">Call or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!</p>
                            <div class="contact-form">
                                <form action="https://constructor-theme.firebaseapp.com/assets/php/contact.php" method="post" id="contactForm">
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.8885940783766!2d78.12569757489592!3d9.943226590159275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5e92a6bd54f%3A0x95133f82eca207ec!2s221%2C%20Nethaji%20Main%20Rd%2C%20Krishnapuram%20Colony%2C%20Tamil%20Nadu%20625002!5e0!3m2!1sen!2sin!4v1688201852618!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                                <span class="gmap-lock" id="gmapLock"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: Contact Us Area  -->



		<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
<?php include "require/footer.php"; ?>
