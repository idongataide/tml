<div class="mb-30px">
    <ul class="p-0 m-0 list-style-02">
        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray align-items-center"><a href="<?php echo base_url(); ?>/services/urban_mass">Urban Mass Transit</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray align-items-center text-dark-gray"><a href="<?php echo base_url(); ?>/services/intercity_services" class="text-dark-gray text-dark-gray-hover">Intercity Services</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray align-items-center"><a href="<?php echo base_url(); ?>/services/regional_bus">Regional Coach Services</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
        <li class="pb-15px align-items-center"><a href="<?php echo base_url(); ?>/services/bus_charter">Bus Charter</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
    </ul>
</div>


<div class="bg-very-light-gray border-radius-6px p-35px lg-p-25px md-p-35px xs-p-25px">
    <span class="fs-22 ls-minus-05px alt-font text-dark-gray fw-600 mb-20px d-inline-block">How can we help you?</span>
    <div class="contact-form-style-04 contact-form">
        <form action="<?php echo base_url(); ?>/contact/index" method="post">
            <input class="box-shadow-double-large input-small mb-15px form-control required" type="text" name="name" placeholder="Your name*">
            <input class="box-shadow-double-large input-small mb-15px form-control required" type="email" name="email" placeholder="Your email address*">
            <input class="box-shadow-double-large input-small mb-15px form-control required" type="tel" name="phone" placeholder="Your phone no*">
            <textarea class="box-shadow-double-large input-small mb-15px form-control required" name="message" placeholder="Your message" rows="4"></textarea>
            <input type="hidden" name="service" value="<?= $data['service']?>">
            <button class="btn btn-small btn-round-edge btn-base-color btn-box-shadow submit w-100" type="submit">Send message</button>
            <div class="form-results mt-20px d-none fs-14"></div>
        </form>
        <!-- end contact form -->  
    </div>
</div>
