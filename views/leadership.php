

<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/banner/breadcrumb/leadership.webp)"> 
 <div class="opacity-light gradient-black"></div>   
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-lg-7 col-sm-12 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Transport Service Limited</span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Our Leadership Team</span>
                </h2>
                <p class="text-white">Guiding Our Vision with Expertise and Integrity Leading Us Towards a Excellence</p>
            </div> 
        </div>
    </div>
</section>


<?php
$base_url = base_url(); 
$team_members = [
    ["name" => "Jamil Malik", "position" => "Chief Operating Officer (COO)", "delay" => "100", "link" => "{$base_url}/about/leaderships/1"],
    ["name" => "Femi Sholeye, FCA", "position" => "Chief Financial Officer (CFO)", "delay" => "200", "link" => "{$base_url}/about/leaderships/2"],
    ["name" => "Olusola Iwasanmi", "position" => "Head, Commercial & Business Intelligence", "delay" => "300", "link" => "{$base_url}/about/leaderships/3"],
    ["name" => "Olalekan Olagunju", "position" => "Head, Safety, Security & Quality", "delay" => "400", "link" => "{$base_url}/about/leaderships/4"],
    ["name" => "Olusegun Adeyemo", "position" => "Head, Drivers’ Administration", "delay" => "500", "link" => "{$base_url}/about/leaderships/5"],
    ["name" => "Emem Ogheneochuko", "position" => "Head, Human Resources & Admin", "delay" => "600", "link" => "{$base_url}/about/leaderships/6"],
];

?>


<section class="py-0- bg-light">
    <div class="container">        
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- <h3 class="fw-700 text-dark-gray ls-minus-2px">Meet the professional accounting people</h3> -->
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start team member item -->
            <?php foreach ($team_members as $member) { ?>
                <div class="col text-center team-style-01 md-mb-30px wow fadeInUp mb-3" data-wow-delay="<?php echo $member['delay']; ?>ms">
                 <a href="<?php echo $member['link']; ?>">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px"><?php echo $member['name']; ?></span>
                                <p class="m-0" style="font-size:14px; color:#a21615"><?php echo $member['position']; ?></p>
                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                 </a>    
                </div>
            <?php } ?>
        </div>
    </div>
</section>
