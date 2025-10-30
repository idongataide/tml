<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg/scania.webp)"> 
    <div class="opacity-medium gradient-black"></div>   
    <div class="container">
            <div class="row align-items-center small-screen">
                <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                    <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>TSL Metroline Limited</span>
                    </h1>
                    <h2 class="m-auto pb-5px pt-5px t-light fw-600 ls-minus-1px overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Urban Mass Transit</span>
                    </h2>
                    <a href="https://cowry.com.ng/" target="_blank" class="mt-3 btn btn-large btn-primary btn-switch-text btn-box-shadow fw-400">
                        <span> 
                            <span class="btn-double-text" data-text="Get Started">Get Started</span> 
                            <span><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>  
                </div> 
            </div>
        </div>
    </section>

        <section class="position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="position-sticky top-50px">
                           <?php include 'sidebar.php'?>
                            <div class="bg-very-light-gray border-radius-6px p-35px lg-p-25px md-p-35px xs-p-25px">
                                <span class="fs-22 ls-minus-05px alt-font text-dark-gray fw-600 mb-20px d-inline-block">How can we help you?</span>
                                <div class="contact-form-style-04">
                                    <!-- start contact form -->
                                    <form action="<?php echo base_url(); ?>/contact/index" method="post">
                                        <input class="box-shadow-double-large input-small mb-15px form-control required" type="text" name="name" placeholder="Your name*">
                                        <input class="box-shadow-double-large input-small mb-15px form-control required" type="email" name="email" placeholder="Your email address*">
                                        <input class="box-shadow-double-large input-small mb-15px form-control required" type="tel" name="phone" placeholder="Your phone no*">
                                        <textarea class="box-shadow-double-large input-small mb-15px form-control required" name="message" placeholder="Your message" rows="4"></textarea>
                                        <input type="hidden" name="service" value="<?= $data['service']?>">
                                        <button class="btn btn-small btn-round-edge btn-base-color btn-box-shadow submit w-100" type="submit">Send message</button>
                                        <div class="form-results mt-20px d-none"></div>
                                    </form>
                                    <!-- end contact form -->  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">Smooth City Commutes: <br/> Your Daily Urban Transit Solution</h4>
                        <p>At TSL Metroline, we recognize the demands of urban living and the critical role a dependable transit system plays in navigating the pace of city life. Our Urban Mass Transit service is thoughtfully designed to meet your daily commuting needs, delivering a seamless, timely, and hassle-free journey within city limits.</p>
                        <img src="<?php echo base_url(); ?>/assets/img/service/intercity.webp" class="mt-30px mb-30px md-mt-15px border-radius-6px" alt="">
                        <p>With a fleet of high-capacity and medium-capacity buses operating along carefully planned routes through major urban centres, we offer a sophisticated alternative to the disarray of traditional city transport. Prioritizing punctuality, comfort, and safety, TSL Metroline ensures a refined and stress-free travel experience, empowering you to focus on what truly matters in your day.</p>
                        <!--<h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">Safety is our utmost priority in every aspect of our service</h4>-->
                        <!--<p>Whether you’re heading to work, school, or any other daily activities, TSL Metroline's Urban Mass Transit service is your perfect travel companion. Let us take the worry out of your daily commute, so you can enjoy more of what matters most.</p>-->
                  </div>
                </div>
            </div> 
        </section>
