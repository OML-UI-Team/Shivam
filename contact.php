<?php include('components/header.php'); ?>
            <!-- Home Section -->
            <section class="page-section bg-dark-alfa-50 bg-scroll" data-background="images/contact-banner.jpg"
                id="home">
                <div class="container relative text-center">

                    <!-- <div class="row"> -->

                    <!-- <div class="col-md-8"> -->
                    <div class="wow fadeInUpShort" data-wow-delay=".1s">
                        <h1 class="hs-line-7 mb-20 mb-xs-10">Contact</h1>
                    </div>
                    <div class="wow fadeInUpShort" data-wow-delay=".2s">
                        <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                            We’re always open to talk to good people
                        </p>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->

                </div>
            </section>
            <!-- End Home Section -->


            <!-- Contact Section -->
            <section class="page-section">
                <div class="container relative">

                    <!-- Contact Form -->
                    <div class="row">
                        <!-- col-md-10 offset-md-1 -->

                        <div class="col-md-6">
                            <div class="google-map">

                                <a href="#" class="map-section">
                                    <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
                                        <div class="mt-icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <div class="mt-text">
                                            <div class="mt-open">Open the map <i class="mt-open-icon"></i></div>
                                            <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
                                        </div>
                                    </div>
                                </a>



                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27951.97217632441!2d77.12425200000001!3d28.868721499999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390dabeeb4938319%3A0xa233e660de6c08ee!2sKundli%2C%20Sonipat%2C%20Haryana%20131028!5e0!3m2!1sen!2sin!4v1661262152724!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <form class="form contact-form wow fadeInUpShort" id="contact_form">

                                <div class="row">
                                    <div class="">
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" name="name" id="name" class="input-lg round form-control"
                                                placeholder="Enter your name" pattern=".{3,100}" required
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" name="email" id="email"
                                                class="input-lg round form-control" placeholder="Enter your email"
                                                pattern=".{5,100}" required aria-required="true">
                                        </div>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea name="message" id="message" class="input-lg round form-control"
                                        style="height: 130px;" placeholder="Enter your message" required></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Send Button -->
                                        <div class="text-end pt-10">
                                            <button type="submit" class="submit_btn btn btn-mod btn-large btn-round"
                                                id="submit_btn" aria-controls="result">
                                                Submit Message
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="form-results">
                                    <div class="scss-div alert alert-success alert-dismissible" style="display: none;"
                                        role="alert">
                                        <strong>Success!</strong> <span class="scss-msg"></span>
                                    </div>

                                    <div class="err-div alert alert-danger alert-dismissible" style="display: none;"
                                        role="alert">
                                        <strong>Error!</strong> <span class="err-msg"></span>
                                    </div>
                                </div>

                                <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                            </form>

                        </div>
                    </div>
                    <!-- End Contact Form -->

                    <div class="row page-section pb-0">

                        <div class="col-md-10 offset-md-1">
                            <div class="row">

                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pb-20">
                                    <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone-alt"></i>
                                        </div>
                                        <div class="ci-title">
                                            Call Us
                                        </div>
                                        <div class="ci-text">
                                            
                                        </div>
                                        <div class="ci-link"><a href="tel:9810745215">9810745215</a></div>
                                        <div class="ci-link"><a href="tel:9871387215">9871387215</a></div>
                                    </div>
                                </div>
                                <!-- End Phone -->

                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pb-20">
                                    <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s"
                                        data-wow-duration="1s">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <div class="ci-title">
                                            Address
                                        </div>
                                        <p>
                                            KHASRA NO. 92/17/2, 18/1, INDUSTRIAL SECTOR-52,
                                            VILLAGE KUNDLI, Sonipat (Haryana), 131028
                                            </p>
                                        <div class="ci-link">
                                            <a href="https://goo.gl/maps/AF8phm6bZ3MRoNARA" target="_blank">See on the
                                                Map</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->

                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pb-20">
                                    <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s"
                                        data-wow-duration="1s">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope-open"></i>
                                        </div>
                                        <div class="ci-title">
                                            Email
                                        </div>
                                        
                                        <div class="ci-link"><a href="mailto:manmohan@sbipl.in">manmohan@sbipl.in</a></div>
                                        <div class="ci-link"><a href="mailto:vikas@sbipl.in">vikas@sbipl.in</a></div>
                                        

                                        
                                        
                                    </div>
                                </div>
                                <!-- End Email -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        <?php include('components/footer.php'); ?>