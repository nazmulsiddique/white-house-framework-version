<?php
/*
Template Name: Custom Common Pages Template
*/
//$hide_title = get_post_meta(get_the_ID(), 'hide_title', true);
get_header(); ?>
<div class="main-wrapper">
    <nav class="navbar navbar-expand-lg navbar-bg-page text-light fixed-top" id="mainNav">
      <?php include("main-menu.php"); ?>
    </nav>

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
</div>
<?php get_footer(); ?>