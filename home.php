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


  <div class="home-about-section">
    <div class="home-about-content container cpy-10">
      <div class="row">
        <div class="col-md-6">
          <div class="home-about-headline mb-5 px-3 px-md-0">
            <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $myOptions['about-page-title']; ?></h2>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <?php echo $myOptions['about-page-description']; ?>
          </div>
          </div>
        </div>
        <div class="col-6">
        </div>
      </div>
    </div>

  </div>

  <div class="our-mission-section">
    <div class="container cpy-100">
      <div class="row px-3 px-md-0">
        <div class="col-12">
          <div class="our-mission-content mb-5">
            <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $myOptions['our-mission-section-title']; ?></h2>
          </div>
        </div>
        <?php 
        $our_mission_data = $myOptions['our-mission-column-content'];
        foreach ($our_mission_data as $index => $data):
        ?>
        <div class="col-md-4">
          <div class="our-mission-content mb-5 pe-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <h3><?php echo $data['our-mission-column-title']; ?></h3>
            <p><?php echo $data['our-mission-column-description']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php $concerns = $myOptions['our-concern-section-content']; ?>
  <div class="our-concerns-section bg-black cpy-100" id="ourConcerns">
    <div class="container">
      <h2 class="title"><?php echo $myOptions['our-concerns-section-title']; ?></h2>
      <div class="d-flex align-items-start flex-wrap">
        <div class="nav flex-column nav-pills width-25 mb-5 mb-md-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php
          $i = 0;
          foreach ($concerns as $key => $concern) :
              $active = ($i == 0) ? 'active' : '';
              ?>
              <button class="nav-link <?php echo $active; ?>" id="v-pills-<?php echo $key; ?>-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-<?php echo $key; ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $key; ?>"
                  aria-selected="<?php echo ($i == 0) ? 'true' : 'false'; ?>">
                  <?php echo $concern['our-concerns-main-title']; ?>
              </button>
        <?php
          $i++;
          endforeach;
        ?>
        </div>
        <div class="tab-content width-75" id="v-pills-tabContent">
            <?php
                $i = 0;
                foreach ($concerns as $key => $concern) :
                    $active = ($i == 0) ? 'show active' : ''; ?>
                    <div class="tab-pane fade <?php echo $active; ?>" id="v-pills-<?php echo $key; ?>"
                        role="tabpanel" aria-labelledby="v-pills-<?php echo $key; ?>-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img class="img-fluid" src="<?php echo $concern['our-concerns-tab-image']['url']; ?>" alt="Concern Image" />
                            </div>
                            <div class="col-md-6 our-concerns-content">
                                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <?php echo $concern['our-concerns-tab-title']; ?>
                                </h2>
                                <p class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <?php echo $concern['our-concerns-tab-description']; ?>
                                </p>
                                <a href="<?php echo $concern['our-concerns-tab-link']; ?>" 
                                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
            <?php $i++;
                endforeach;  ?>
        </div>
      </div>
    </div>
  </div>

  <div class="recent-highlights-section bg-light cpy-100" id="recentHighlights">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2 class="title mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><?php echo $myOptions['our-recent-highlights-title']; ?></h2>
        </div>
        
        <div class="col-md-8">
          <div class="owl-carousel owl-theme  second-carousel">
          <?php foreach ($myOptions['our-recent-highlights-content'] as $highlight) : ?>
              <div class="recent-highlights-content item">
                  <div class="card bg-dark text-white">
                      <img class="img-fluid" src="<?php echo $highlight['our-recent-highlights-image']['url']; ?>" alt="<?php echo $highlight['our-recent-highlights-title']; ?>" />
                      <div class="card-img-overlay">
                          <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                              <?php echo $highlight['our-recent-highlights-title']; ?>
                          </h2>
                          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                              <?php echo $highlight['our-recent-highlights-description']; ?>
                          </p>
                          <a href="<?php echo $highlight['our-recent-highlights-link']; ?>" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                              Learn More
                          </a>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>

  <div class="leaf-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?php echo $myOptions['our-client-section-title'];?></h2>
          <div class="leaf-item d-flex justify-content-between align-items-center flex-wrap">
            <?php foreach ($myOptions['client-area'] as $clientLogo) : ?>
              <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                <img src="<?php echo $clientLogo['client-logo-image']['url']; ?>" alt="">
              </div>
            <?php endforeach; ?>
          </div>
      </div>
    </div>
  </div>

  <div class="contact-section" id="contact">
    <div class="container">
      <div class="contact-text">
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><?php echo $myOptions['contact-us-section-subtitle'];?></p>
        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><?php echo $myOptions['contact-us-section-title'];?></h2>
      </div>
      <div class="row mt-md-5">
        <div class="col-md-6">
          <div class="contact-form mt-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <?php echo do_shortcode($myOptions['contact-us-contact-form']); ?>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center" id="exploreLocation">
          <div class="contact-address">
            <div class="address" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
              <h2><?php echo $myOptions['contact-us-contact-form-address-title'];?></h2>
              <p><i class="fa fa-map-marker icon-address" aria-hidden="true"></i>
              <?php echo $myOptions['address'];?></p>
              <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $myOptions['mobile-number'];?>
              </p>
              <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $myOptions['email-address'];?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>