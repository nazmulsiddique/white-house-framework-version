<?php
/*
Template Name: Real Estate 
*/
get_header();
$myOptions = get_option( 'git_theme_options' );
$slider_data = $myOptions['real_estate_slider_area'];
?>
       
          <div class="main-wrapper">
              <nav class="navbar navbar-expand-lg navbar-bg text-light fixed-top" id="mainNav">
           <?php include("menu.php"); ?>
           </nav>
            <header class="masthead" id="">
            <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                <?php foreach ($slider_data as $index => $slide): ?>
                  <div class="carousel-item  <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="10000">
                    <img src="<?php echo esc_url($slide['real_estate_slider_bg']['url'] ?? ''); ?>" alt="Slider  <?php echo $index + 1; ?>" class="d-block w-100">
                      <div class="carousel-caption">
                          <div class="masthead-heading text-uppercase"> 
                            <h2><?php echo esc_html($slide['real_estate_slider_title'] ?? ''); ?></h2>
                          </div>
                          <div class="masthead-subheading">
                            <p><?php echo esc_html($slide['real_estate_slider_description'] ?? ''); ?> </p>
                          </div>
                      </div>
                  </div>
                  <?php endforeach; ?>
                </div>
            </div>
        </header>

            <div class="leaf-section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="leaf-item d-flex justify-content-between align-items-center">
                  <?php foreach ($myOptions['client-area'] as $clientLogo) : ?>
                    <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                      <img src="<?php echo $clientLogo['client-logo-image']['url']; ?>" alt="">
                    </div>
                  <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-section">
              <div class="about-content">
                <div class="fixed-headline sticky-top-title mb-md-5">
                  <h2 class="text-center"><?php echo $myOptions['real_estate_about_page_title'];?></h2>
                </div>
                <img src="<?php echo $myOptions['real_estate_about_page_bg']['url'];?>" alt="" class="img-fluid">
              </div>
            </div>

          <?php $approach_data = $myOptions['approach_section_area']; ?>
            <div class="our-approach-section" id="ourApproach">
              <div class="container">
                <div class="approach-title">
                  <h2><?php echo $myOptions['approach_section_title'];?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                      <circle cx="23.2773" cy="23" r="22.0417" stroke="#A37507" stroke-width="1.91667"/>
                      <path d="M22.5997 32.3998C22.974 32.7741 23.5807 32.7741 23.955 32.3998L30.0538 26.301C30.428 25.9268 30.428 25.32 30.0538 24.9457C29.6795 24.5715 29.0727 24.5715 28.6985 24.9457L23.2773 30.3669L17.8562 24.9457C17.4819 24.5715 16.8752 24.5715 16.5009 24.9457C16.1267 25.32 16.1267 25.9268 16.5009 26.301L22.5997 32.3998ZM22.319 12.7222V31.7222H24.2357V12.7222H22.319Z" fill="#A37507"/>
                      </svg>
                  </h2>
                </div>
              </div>
              <div class="container approach-auto-slide">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="d-flex justify-content-center inicator-section">
                    <div class="carousel-indicators custom-indicators mt-5">
                    <?php foreach ($approach_data as $index => $slide): ?>
                      <span data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>" aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $index + 1; ?>"> <?php echo esc_html($slide['approach_single_section_title'] ?? ''); ?></span>
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <div class="carousel-inner mt-md-5">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo esc_html($slide['approach_single_section_image_1']['url']); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-12">
                              <img src="<?php echo esc_html($slide['approach_single_section_image_2']['url']); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                              <p><?php echo esc_html($slide['approach_single_section_description']); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo get_theme_mod('approach_tab_2_image_one') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-12">
                             <img src="<?php echo get_theme_mod('approach_tab_2_image_two') ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                              <p><?php echo get_theme_mod('approach_tab_2_description') ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo get_theme_mod('approach_tab_3_image_one') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-12">
                              <img src="<?php echo get_theme_mod('approach_tab_3_image_two') ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                              <p><?php echo get_theme_mod('approach_tab_3_description') ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="our-project-section" id="ourProject">
              <div class="container">
                <div class="title">
                  <h1 class="mb-3">Our projects</h1>
                </div>
                <div class="project-category">
                  <ul class="nav nav-pills">
                    <!-- <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#completed">Completed</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="pill" href="#ongoing"><?php echo get_theme_mod('our_project_tab_1_tab_title') ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#upcoming"><?php echo get_theme_mod('our_project_tab_2_tab_title') ?></a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane container active" id="ongoing">
                      <div class="complete-content py-5">
                        <div class="row mt-3">
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_two') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-2 arrow-icon align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_three') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <div class="project-details">
                              <h2><?php echo get_theme_mod('our_project_tab_1_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_1_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_1_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_1_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-15">       
                          <div class="col-2 arrow-icon arrow-icon-2 align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <!-- <img src="<?php //echo get_template_directory_uri() ?>/images/circle-angle-arrow.png" alt=""> -->
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_two') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6">
                            <div class="project-details text-end project-details-2">
                              <h2><?php echo get_theme_mod('our_project_tab_2_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_2_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_2_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_2_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_three') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="upcoming">
                      <div class="complete-content py-5">
                        <div class="row mt-3">
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_two') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-2 arrow-icon align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_three') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <div class="project-details">
                              <h2><?php echo get_theme_mod('our_project_tab_1_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_1_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_1_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_1_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-15">       
                          <div class="col-2 arrow-icon arrow-icon-2 align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <!-- <img src="<?php //echo get_template_directory_uri() ?>/images/circle-angle-arrow.png" alt=""> -->
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_two') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6">
                            <div class="project-details text-end project-details-2">
                              <h2><?php echo get_theme_mod('our_project_tab_2_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_2_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_2_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_2_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_three') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="landowner-section">
              <div class="landowner-section-bg">
                <div class="card text-white">
                  <div class="card-img-overlay container sticky-top-landowner">
                    <div class="row">
                      <div class="col-12 col-md-4"></div>
                      <div class="col-12 col-md-6 overlay-custom-text">
                        <p><?php echo esc_html($myOptions['real_estate_landowner_subtitle'] ?? ''); ?></p>
                        <h2><?php echo esc_html($myOptions['real_estate_landowner_title'] ?? ''); ?></h2>
                      </div>
                    </div>
                  </div>
                  <img src="<?php echo esc_html($myOptions['real_estate_landowner_image']['url'] ?? ''); ?>" class="img-fluid" alt="">
                </div>
              </div>
            </div>
            <?php 
              $key_point_data = $myOptions['key_point_single_section_area']; 
              $total_items = count($key_point_data);
            ?>
            <div class="key-point-section" id="keyPoint">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <p class="subtitle"><?php echo esc_html($myOptions['key_point_section_subtitle'] ?? ''); ?></p>
                    <h2 class="title"><?php echo esc_html($myOptions['key_point_section_title'] ?? ''); ?></h2>
                  </div>
                  <?php $count = 0; ?>
                  <?php foreach ($key_point_data as $key_point) : ?>
                    <?php if ($count == 2) : ?>
                      <!-- Add an Empty Column in 2nd Row First Position -->
                      </div><div class="row mt-3">
                      <div class="col-md-3"></div> <!-- Empty Column -->
                    <?php endif; ?>
                  <div class="col-md-3 box mb-3">
                    <div class="single-key-point">
                      <img src="<?php echo esc_url($key_point['key_point_single_section_icon']['url'] ?? ''); ?>" alt="">
                      <div class="single-key-title">
                        <h2><?php echo esc_html($key_point['key_point_single_section_title'] ?? ''); ?></h2>
                      </div>
                    </div>
                    <div class="overlay">
                      <div class="text">
                      <div class="single-key-title">
                        <h2><?php echo esc_html($key_point['key_point_single_section_title'] ?? ''); ?></h2>
                      </div>
                      <div class="single-key-description">
                        <p class="mt-3"><?php echo esc_html($key_point['key_point_single_section_description'] ?? ''); ?></p>
                      </div>
                    </div>
                    </div>
                  </div>  
                  <?php $count++; ?> 
                  <?php endforeach; ?>             
                </div>
                
              </div>
            </div>

            <div class="gallery-section">
                <div class="container-fluid">
                    <div class="position-relative">
                  <div class="row">
                      <div class="owl-carousel owl-theme first-carousel">
                        <?php
                        $args = array(
                            'post_type' => 'gallery',
                            'posts_per_page' => 4,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        );

                        $custom_query = new WP_Query($args);
                        if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                        <div class="item">
                          <div class="col-md-12">
                            <?php
                              if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'img-fluid'));
                              } ?>
                          </div>
                        </div>
                        
                        <?php
                              endwhile;
                              wp_reset_postdata();
                          else :
                              echo 'No posts found';

                          endif;
                        ?>
                      </div>
                      <div class="gallery-overly-image position-absolute top-50 start-50 translate-middle">
                        <img src="<?php echo get_template_directory_uri() ?>/images/loader-image.png" alt="">
                      </div>
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