<?php
/*
Template Name: Job Pages Template
*/
//$hide_title = get_post_meta(get_the_ID(), 'hide_title', true);
get_header(); ?>
<div class="main-wrapper">
  <nav class="navbar navbar-expand-lg navbar-bg-page text-light fixed-top" id="mainNav">
    <?php include("main-menu.php"); ?>
  </nav>
  <div class="details-page" id="about"
    style="background-image: url('http://tstwhitehouseltd.com/wp-content/uploads/2025/01/jobs.webp'); background-repeat: no-repeat; background-position: center center; background-size: cover; height: 750px;">
    <div class="d-flex align-items-end justify-content-start" style="height: 100%;">
      <div class="container pb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <h3 class="mb-0">TST WHITE HOUSE</h3>
        <h1>Jobs</h1>
      </div>
    </div>
  </div>
  
  
    <div class="page-content">
    <?php
    while (have_posts()):
      the_post(); ?>
      <div class="border-0 mt-0 p-0">
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
  
  <div class="page-content container">
    <div class="row">
      <?php
      query_posts('post_type=jobs&post_status=publish&posts_per_page=-1&order=DSC&paged=' . get_query_var('post'));
      while (have_posts()):
        the_post(); ?>
        <div class="col-md-6 my-md-5 my-3" data-bs-toggle="modal" data-bs-target="#exampleModal<?php the_ID(); ?>">
          <div class="card">
            <div class="page-image mx-auto">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="card-body pt-0">
              <h2 class="card-text"><?php the_title(); ?></h2>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>






<!--  Modal Show -->

  <?php
  query_posts('post_type=jobs&post_status=publish');
  if (have_posts()):
    while (have_posts()):
      the_post();
      ?>
      <div class="modal fade" id="exampleModal<?php the_ID(); ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php echo the_post_thumbnail('large'); ?>
              <div class="">
                <h2 class="title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    endwhile;
  endif;
  ?>


</div>
<?php get_footer(); ?>