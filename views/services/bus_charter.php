<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/bg/scania3.webp)"> 
    <div class="opacity-medium gradient-black"></div>   
    <div class="container">
            <div class="row align-items-center small-screen">
                <div class="col-lg-7 col-sm-12 position-relative page-title-extra-small">
                    <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>TSL Metroline Limited</span>
                    </h1>
                    <h2 class="m-auto pb-5px pt-5px t-light fw-600 ls-minus-1px overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Bus Charter Services</span>
                    </h2>
                    <a href="#bus-charter-form" class="mt-3 btn btn-large btn-primary btn-switch-text btn-box-shadow fw-400">
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
                        </div>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">Tailored Travel Solutions: Your Custom Bus Charter Service</h4>
                        <p>Whether you’re planning a corporate event, school excursion, family reunion, or any group outing, TSL Metroline’s Charter Services are tailored to provide the ultimate in flexibility and convenience.</p>
                        <p>Our versatile fleet of high-capacity buses and coaches can be customized to meet the specific needs of your group, ensuring a seamless travel experience. With professional drivers dedicated to safety, comfort, and exceptional service, we make your journey effortless and enjoyable.</p>
                        <img src="<?php echo base_url(); ?>/assets/img/service/regional.webp" class="mt-30px mb-30px md-mt-15px border-radius-6px" alt="">
                        <p>Here’s what you can expect with TSL Metroline’s Charter Services:</p>
                        <ul>
                            <li><b>Tailored Routes and Schedules:</b> Collaborate with us to create a travel plan perfectly aligned with your itinerary.</li>
                            <li><b>Comfort and Convenience:</b> Enjoy a stress-free trip with thoughtfully equipped buses designed for your comfort.</li>
                            <li><b>Unmatched Professionalism:</b> From booking to your journey’s conclusion, our team is committed to delivering excellence at every step.</li>
                        </ul>
                        <p>Experience group travel redefined with TSL Metroline, where your journey is as memorable as your destination.</p>

                   </div>
                </div>
            </div> 
    </section>

    <section class="ps-8 pe-8 lg-ps-4 lg-pe-4 md-ps-0 md-pe-0 py-0 mb-5" id="bus-charter-form">
            <div class="container-fluid">
                <div class="row g-0 bg-very-light-gray justify-content-center border-radius-10px overflow-hidden flex-lg-row flex-column-reverse">
                    <div class="col-lg-8 p-6 lg-p-50px xs-ps-30px xs-pe-30px">
                        <span class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">TML Metroline Services</span>
                        <h2 class="fw-600 text-dark-gray ls-minus-1px mb-45px-">Charter a Bus</h2>
                        <p class="fs-16">At TSL Metroline, we recognize that sometimes, standard transportation services just aren't enough. That's why we offer our Bus Charter Services, providing tailored travel solutions to meet your specific needs.</p>
                       
                        <!-- start contact form -->
                        <form action="<?php echo base_url(); ?>/contact/index" method="post" class="row contact-form-style-01" novalidate>    
                           <div class="form-results mt-20px d-none"></div>
                            <div class="col-md-6 mb-30px sm-mb-20px">
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-person"></i></span>
                                    <input class="input-name box-shadow-double-large form-control required" type="text" name="name" placeholder="Your name">
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input class="box-shadow-double-large form-control required" type="email" name="email" placeholder="Your email">
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                    <input class="input-name box-shadow-double-large form-control required" type="text" name="phone" placeholder="Your mobile">
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-people"></i></span>
                                    <input class="box-shadow-double-large form-control required" type="number" name="no_of_people" min="1" max="1000" placeholder="No. of People">
                                </div>
                            </div>
                            <div class="col-md-6 mb-30px">
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-calendar"></i></span>
                                    <input class="box-shadow-double-large form-control required" type="date" name="date" placeholder="Booking Date">
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-geo-alt"></i></span>
                                    <input class="box-shadow-double-large form-control required" type="text" name="booking_address" placeholder="Booking Address">
                                </div>
                                <div class="position-relative form-group form-textarea">
                                    <span class="form-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                    <textarea class="box-shadow-double-large form-control" cols="40" rows="4" name="destination_address" placeholder="Destination Address"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="service" value="Bus Charter">
                            <input type="hidden" name="subject" value="Bus Charter Booking Request">
                            <div class="col-auto text-center text-md-end sm-mt-20px lg-mb-15px">
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-dark-gray btn-switch-text btn-medium left-icon btn-round-edge submit btn-box-shadow" type="submit">
                                    <span>
                                        <span><i class="feather icon-feather-mail"></i></span>
                                        <span class="btn-double-text" data-text="Book Now">Book Now</span> 
                                    </span>
                                </button>
                            </div>                            
                            
                        </form>
                        <!-- end contact form -->
                    </div>
                    <div class="col-lg-4 md-h-700px sm-h-500px">
                        <div class="cover-background background-position-center-top h-100" style="background-image: url('<?php echo base_url(); ?>/assets/img/man.webp');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
