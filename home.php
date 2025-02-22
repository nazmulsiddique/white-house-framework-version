<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="main-wrapper">
  <nav class="navbar navbar-expand-lg navbar-bg text-light fixed-top" id="mainNav">
    <?php include("main-menu.php"); ?>
  </nav>

  <?php include("home-slider.php"); ?>


  <div class="home-about-section"
    style="background-image: url('<?php echo get_template_directory_uri() ?>/images/home-about-bg.webp'); background-repeat: no-repeat; background-position:right bottom;">
    <div class="home-about-content container cpy-10">
      <div class="row">
        <div class="col-md-6">
          <div class="home-about-headline mb-5 px-3 px-md-0">
            <h2 data-aos="fade-up" data-aos-duration="1000">About Us</h2>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <p>
              TST White House Ltd. is a prominent real estate and trading company based in Dhaka, Bangladesh,
              established in 2023. The company takes pride in its role as direct importers of high-quality Dubai black
              stone (GABBRO), enabling it to supply up to 100,000 metric tons of stone per month. </p>
            <p>
              Additionally, TST White House is adept at providing Bitumen imported from Dubai, Indian Pakur Stone, and
              Local Sand. </p>
            <p>
              Positioned at the forefront of contemporary real estate development, the company aims to redefine luxury
              living and commercial spaces. By blending cutting-edge technology with visionary design, TST White House
              Limited is ushering in a new era of urban lifestyle.
            </p>
          </div>
          </div>
        </div>
        <div class="col-6">
        </div>
      </div>




    </div>

  </div>

  <div class="our-mission-section"
    style="background-image: url('<?php echo get_template_directory_uri() ?>/images/home-mission-bg.webp'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
    <div class="container cpy-100">
      <div class="row px-3 px-md-0">
        <div class="col-12">
          <div class="our-mission-content mb-5">
            <h2 data-aos="fade-up" data-aos-duration="1000">Our Mission</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="our-mission-content mb-5 pe-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <h3>For Our Clients</h3>
            <p>To offer a global touch, maintaining Bangladeshi culture in living and work places, with utmost
              uncompromising service to our clients and value for money. </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="our-mission-content mb-5 pe-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <h3>For Our Employees</h3>
            <p>To give employees a feeling of satisfaction by maximizing their potentials and providing means for their
              personal well-being and career development.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="our-mission-content mb-5 pe-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <h3>For Our Investors</h3>
            <p>To ensure a smooth upward-reasonable trend of return on investment.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="our-concerns-section bg-black cpy-100" id="ourConcerns">
    <div class="container">
      <h2 class="title">Our Concerns</h2>
      <div class="d-flex align-items-start flex-wrap">
        <div class="nav flex-column nav-pills width-25 mb-5 mb-md-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-real-state-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-real-state" type="button" role="tab" aria-controls="v-pills-real-state"
            aria-selected="true">Real Estate</button>
          <button class="nav-link" id="v-pills-building-material-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-building-material" type="button" role="tab"
            aria-controls="v-pills-building-material" aria-selected="false">Building Materials</button>
          <button class="nav-link" id="v-pills-agro-tab" data-bs-toggle="pill" data-bs-target="#v-pills-agro"
            type="button" role="tab" aria-controls="v-pills-agro" aria-selected="false">Essential Agro
            Commodities</button>
          <button class="nav-link" id="v-pills-mega-structure-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-mega-structure" type="button" role="tab" aria-controls="v-pills-mega-structure"
            aria-selected="false">Mega Structures</button>
        </div>
        <div class="tab-content width-75" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-real-state" role="tabpanel"
            aria-labelledby="v-pills-real-state-tab" tabindex="0">
            <div class="row">
              <div class="col-md-6 text-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/our-concern-1.webp"
                  alt="..." />
              </div>
              <div class="col-md-6 our-concerns-content">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">A New way of building</h2>
                <p class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Our real estate projects redefine living and working spaces through innovation,
                  sustainability, and design excellence.</p>
                <p class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">We craft transformative mega-structures and innovative properties that meet modern demands while
                  shaping a better urban future.</p>
                <a href="<?php echo home_url(); ?>/real-state" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Learn More</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-building-material" role="tabpanel"
            aria-labelledby="v-pills-building-material-tab" tabindex="0">
            <div class="row">
              <div class="col-md-6 text-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/our-concern-2.webp"
                  alt="..." />
              </div>
              <div class="col-md-6 our-concerns-content">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">A New way of building</h2>
                <p class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">We focus on importing high-quality materials such as gabbro stone from Dubai and bitumen. </p>
                <a href="<?php echo home_url(); ?>/construction-buildings-materials" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Learn More</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-agro" role="tabpanel" aria-labelledby="v-pills-agro-tab" tabindex="0">
            <div class="row">
              <div class="col-md-6 text-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/our-concern-3.webp"
                  alt="..." />
              </div>
              <div class="col-md-6 our-concerns-content">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">A New way of building</h2>
                <p class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">We are dedicated to ensuring a reliable supply of essential commodities like sugar and edible oil,
                  serving diverse industrial and commercial needs with integrity and excellence. </p>
                <a href="<?php echo home_url(); ?>/agro" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Learn More</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-mega-structure" role="tabpanel"
            aria-labelledby="v-pills-mega-structure-tab" tabindex="0">
            <div class="row">
              <div class="col-md-6 text-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/our-concern-4.webp"
                  alt="..." />
              </div>
              <div class="col-md-6 our-concerns-content">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">A New way of building</h2>
                <p class="mb-3" class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Our mega-structure projects exemplify engineering brilliance and architectural
                  innovation. Including bridge piling and road works, these projects are designed to redefine skylines
                  and infrastructure. </p>
                <p class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">They reflect our commitment to excellence, sustainability, and modernity, delivering iconic landmarks
                  that stand the test of time.</p>
                <a href="<?php echo home_url(); ?>/upcoming-projects" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="recent-highlights-section bg-light cpy-100" id="recentHighlights">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2 class="title mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Recent Highlights</h2>
        </div>
        
        <div class="col-md-8">
          <div class="owl-carousel owl-theme  second-carousel">
              <div class="recent-highlights-content item">
                <div class="card text-white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/recent-heighlit-1.webp" alt="Image 1" />
                  <div class="card-img-overlay">
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">A MILESTONE TO ACHIEVE</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Supply up to 100,000 metric tons of stone/ month. </p>
                    <a href="<?php echo home_url(); ?>/construction-buildings-materials" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="recent-highlights-content item">
                <div class="card text-white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/recent-heighlit-2.webp" alt="Image 1" />
                  <div class="card-img-overlay">
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">A DREAM IN THE MAKING</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">TST Prime is A symbol of luxury and comfort. </p>
                    <a href="<?php echo home_url(); ?>/real-state#ourProject" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="recent-highlights-content item">
                <div class="card text-white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/recent-heighlit-1.webp" alt="Image 1" />
                  <div class="card-img-overlay">
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">A MILESTONE TO ACHIEVE</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Supply up to 100,000 metric tons of stone/ month. </p>
                    <a href="<?php echo home_url(); ?>/construction-buildings-materials" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="recent-highlights-content item">
                <div class="card text-white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/recent-heighlit-2.webp" alt="Image 1" />
                  <div class="card-img-overlay">
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">A DREAM IN THE MAKING</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">TST Prime is A symbol of luxury and comfort. </p>
                    <a href="<?php echo home_url(); ?>/real-state#ourProject" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Learn More</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>

  <div class="leaf-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Our Partners</h2>
        <div class="leaf-item d-flex justify-content-between align-items-center flex-wrap">
          <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <img src="<?php echo get_theme_mod('leaf_logo_image_1') ?>" alt="">
          </div>
          <div class="leaf-single-item-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
            <img src="<?php echo get_theme_mod('leaf_logo_image_2') ?>" alt="">
          </div>
          <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
            <img src="<?php echo get_theme_mod('leaf_logo_image_3') ?>" alt="">
          </div>
          <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
            <img src="<?php echo get_template_directory_uri() ?>/images/leaf-logo.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-section" id="contact">
    <div class="container">
      <div class="contact-text">
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><?php echo get_theme_mod('contact_section_small_text') ?></p>
        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><?php echo get_theme_mod('contact_section_heading') ?></h2>
      </div>
      <div class="row mt-md-5">
        <div class="col-md-6">
          <div class="contact-form mt-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <?php echo do_shortcode(get_theme_mod('contact_section_contactform')); ?>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center" id="exploreLocation">
          <div class="contact-address">
            <div class="address" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
              <h2><?php echo get_theme_mod('contact_section_visit_us') ?></h2>
              <p><i class="fa fa-map-marker icon-address" aria-hidden="true"></i>
                <?php echo get_theme_mod('contact_section_address') ?></p>
              <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_theme_mod('contact_section_mobile') ?>
              </p>
              <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_theme_mod('contact_section_email') ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>