<?php
/*
Template Name: About Full Width Template
*/
$hide_title = get_post_meta(get_the_ID(), 'hide_title', true);
get_header(); ?>
<div class="main-wrapper">
  <nav class="navbar navbar-expand-lg navbar-bg-page text-light fixed-top" id="mainNav">
    <?php include("main-menu.php"); ?>
  </nav>

  <div class="why-us-banner" id="about"
    style="background-image: url('<?php echo get_template_directory_uri() ?>/images/about-top-bg.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center why-us-content">
      <div class="text-center">
        <h1>redefining homes</h1>
        <h3 class="mt-3">About TST White House</h3>
      </div>
    </div>
  </div>


  <div class="about-summary-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="sub-title d-md-flex">
            <p class="mt-md-4 text-end">We are not just building lifeless structures.
              Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
            <div class="">
              <h2>Build. <br>Decorate. <br>Experience.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center pt-80">
        <div class="col-md-8">
          <div class="sub-title d-flex">
            <p>TST White House Ltd. is a leading real
              estate company in Dhaka, Bangladesh,
              established in 2023.
              The company emerges as the vanguard of
              contemporary real estate development,
              poised to redefine luxury living and
              commercial spaces.
              Fusing cutting-edge technology with
              visionary design, TST White House Limited
              introduces a new era of urban  lifestyle.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="board-of-directors-section">
    <div class="board-of-directors-headline text-center">
      <h1>Board of Directors</h1>
      <h3 class="mt-3">The faces behind</h3>
    </div>
    <div class="board-of-directors-details container">

      <div class="single-board-of-director">
        <div class="mb-3">
          <div class="row justify-content-center">
            <div class="col-md-3">
              <img src="<?php echo get_template_directory_uri() ?>/images/Tahmina Afrose Tanna.png" class="img-fluid"
                alt="">
            </div>
            <div class="col-md-5">
              <h2>Tahmina Afrose Tanna</h2>
              <h5>Chairman</h5>
              <p>
                Ms. Tahmina Afrose Tanna is one of the youngest Directors of Walton Hi-Tech Industries PLC. She is a
                visionary dreamer for making peoples’ lifestyles much easier in the hectic schedules by introducing the
                latest technology. After joining the business, Ms. Tanna planned to do something different for society
                as well as for the globe. As a part of her plan, she wanted to change the tradition of washing clothes
                with people's own hands. She has significant contribution to developing the manufacturing plant for
                Walton Washing machines in the country. Ms. Tanna is aware of Global Warming, Climates and Natural
                Environments. So, while establishing the furniture & home decor industry, she is looking forward to
                ensuring sustainable design for Green Living.
              </p>
            </div>
          </div>
        </div>
        <div class="border-bottom-line"></div>
      </div>
      <div class="single-board-of-director">
        <div class="mb-3">
          <div class="row justify-content-center">
            <div class="col-md-3">
              <img src="<?php echo get_template_directory_uri() ?>/images/GolamMurshed.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-5">
              <h2>Golam Murshed</h2>
              <h5>Managing Director</h5>
              <p>
                Golam Murshed, an entrepreneurial and visionary young business leader, has been serving Walton in
                various important positions for over a decade. He is most admired for the modernization of production
                and aggressive marketing strategy. His entrepreneurial journey as result-driven Managing Director former
                Additional Managing Director & Chief Executive, with 12 years of leading industry expertise in operating
                leading company in the domestic and international marketplace is remarkable. He is a Facilitator and
                builder of world-class technology management and product development team with a specialty in both
                small-scaled and scaled growth stages.In Majesto Limited his vision is to create a international
                furniture brand offering innovative and superior quality products by ensuring sustainability for better
                tomorrow.
              </p>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!--
            <div class="board-of-directors-headline text-center">
              <h1>Advisory Committee</h1>
              <h3 class="mt-3">Our consultants</h3>
            </div>
            <div class="board-of-directors-details container">
              <div class="single-board-of-director">
                <div class="mb-3">
                  <div class="row justify-content-center">
                    <div class="col-md-3">
                      <img src="<?php echo get_template_directory_uri() ?>/images/pic-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-5">
                        <h2>John Doe</h2>
                        <h5>Director</h5>
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum. <br><br>

                          Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
       -->
  </div>

  <div class="leaf-section">
    <div class="container">
      <div class="row justify-content-center">
        <h2>Our Trusted Partners</h2>
        <div class="leaf-item d-flex justify-content-between align-items-center">
          <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <img src="<?php echo get_template_directory_uri() ?>/images/advanced-insight.png" alt="">
          </div>
          <div class="leaf-single-item-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri() ?>/images/interior-architects.png" alt="">
          </div>
          <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <img src="<?php echo get_template_directory_uri() ?>/images/majesto-logo.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="about-page-contact-section mb-5"
    style="background-image: url('<?php echo get_template_directory_uri() ?>/images/about-bittom-bg.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
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
<?php get_footer(); ?>