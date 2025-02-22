<?php
/*
Template Name: Full Width Template
*/
$hide_title = get_post_meta(get_the_ID(), 'hide_title', true);
get_header(); ?>
<div class="main-wrapper">
  <nav class="navbar navbar-expand-lg navbar-bg-page text-light fixed-top" id="mainNav">
    <?php include("main-menu.php"); ?>
  </nav>
  <div class="content-area pb-0">
    <?php
    if (empty($hide_title) || $hide_title !== 'yes') { ?>
      <div class="page-title">
        <h2><?php the_title(); ?></h2>
      </div>
      <?php
    } ?>
    <div class="page-content">
      <?php
      while (have_posts()):
        the_post(); ?>
        <div class="card border-0 mt-0">
          <div class="page-image mx-auto">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <div class="card-body pt-0">
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>

        <?php
        if (comments_open() || get_comments_number()):
          comments_template();
        endif;
      endwhile;
      ?>
    </div>
    <div class="custom-about-page">
      <div class="why-us-banner"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner.jpeg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
        <div class="d-flex justify-content-center align-items-center why-us-content">
          <div class="text-center">
            <h1>Homes Personalized</h1>
            <h3 class="mt-3">Why TST White House</h3>
          </div>
        </div>
      </div>


      <div class="functional-design-section why-us-icon"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-2.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
        <div class="sub-title">
          <p>We are not just building lifeless structures.
            Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
        </div>
        <div class="vertical-line">
          <div class="bottom-icon">
            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
          </div>
          <div class="line mt-3"></div>
        </div>
        <div class="functional-logo text-center py-5">
          <img src="<?php echo get_template_directory_uri() ?>/images/functional-design-logo.png" alt=""
            class="img-fluid">
        </div>

        <div class="functional-content-area">
          <div class="container functional-content">
            <div class="row">
              <div class="col-md-5">
                <div class="color-area">
                  <p class="color-area-content">We consider every aspect of your space so that it complements your
                    well-being and you have a place you truely cherish.</p>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/color.png" alt="">
                    <div class="ms-3">
                      <h2>Color</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/brightness.png" alt="">
                    <div class="ms-3">
                      <h2>light</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/wind.png" alt="">
                    <div class="ms-3">
                      <h2>clean air</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


      </div>

      <div class="quality-materials why-us-icon"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-3.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
        <div class="vertical-line">
          <div class="bottom-icon">
            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
          </div>
          <div class="line mt-3 mb-4"></div>
        </div>
        <div class="functional-logo text-center py-5">
          <h1>quality materials</h1>
        </div>

        <div class="functional-content-area">
          <div class="container functional-content">
            <div class="row">
              <div class="col-md-5">
                <div class="color-area">
                  <p class="color-area-content">We consider every aspect of your space so that it complements your
                    well-being and you have a place you truely cherish.</p>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/durability.png" alt="">
                    <div class="ms-3">
                      <h2>Durability</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sustainability.png" alt="">
                    <div class="ms-3">
                      <h2>sustainability</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="aesthetics-materials why-us-icon"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-4.png'); background-repeat: no-repeat; background-position: center center; background-size: 100% 100%;">
        <div class="vertical-line">
          <div class="bottom-icon">
            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
          </div>
          <div class="line mt-3 mb-4"></div>
        </div>
        <div class="functional-logo text-center py-5">
          <h1>Aesthetics</h1>
        </div>

        <div class="functional-content-area">
          <div class="container functional-content">
            <div class="row">
              <div class="col-md-5">
                <div class="color-area">
                  <p class="color-area-content">We consider every aspect of your space so that it complements your
                    well-being and you have a place you truely cherish.</p>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/color.png" alt="">
                    <div class="ms-3">
                      <h2>exterior</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sun.png" alt="">
                    <div class="ms-3">
                      <h2>interior</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


      </div>

      <div class="commitments-materials why-us-icon"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-5.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
        <div class="vertical-line">
          <div class="bottom-icon">
            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
          </div>
          <div class="line mt-3 mb-4"></div>
        </div>
        <div class="functional-logo text-center py-5">
          <h1 class="w-100 text-center">commitments</h1>
        </div>

        <div class="functional-content-area">
          <div class="container functional-content">
            <div class="row">
              <div class="col-md-5">
                <div class="color-area">
                  <p class="color-area-content">We consider every aspect of your space so that it complements your
                    well-being and you have a place you truely cherish.</p>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/color.png" alt="">
                    <div class="ms-3">
                      <h2>exterior</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                  <div class="single-content d-flex mt-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sun.png" alt="">
                    <div class="ms-3">
                      <h2>interior</h2>
                      <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to
                        create spaces that inspire and energize the people living inside them.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="leaf-section why-us-leaf-section">
          <div class="container">
            <div class="row justify-content-center">
              <h2>Our Trusted Partners</h2>
              <div class="leaf-item d-flex justify-content-between align-items-center">
                <div class="leaf-single-item" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                  <img src="<?php echo get_template_directory_uri() ?>/images/advanced-insight.png" alt="">
                </div>
                <div class="leaf-single-item-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                  <img src="<?php echo get_template_directory_uri() ?>/images/interior-architects.png" alt="">
                </div>
                <div class="leaf-single-item" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                  <img src="<?php echo get_template_directory_uri() ?>/images/majesto-logo.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="about-page-contact-section mb-5"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner.jpeg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
        <div class="content-opacity">
          <h1>let’s build a space of your dream</h1>
        </div>
      </div>
      <div class="about-contact-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 bg-white contact-box">
              <div class="contact-text">
                <div class="contact-text">
                  <p><?php echo get_theme_mod('contact_section_small_text') ?></p>
                  <h2><?php echo get_theme_mod('contact_section_heading') ?></h2>
                </div>
              </div>
              <div class="contact-form mt-md-5">
                <?php echo do_shortcode(get_theme_mod('contact_section_contactform')); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>