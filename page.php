<?php get_header(); ?>
  <div class="main-wrapper">
    <nav class="navbar navbar-expand-lg navbar-bg-page text-light fixed-top" id="mainNav">
        <?php include("main-menu.php"); ?>
    </nav>
    <div class="content-area container">
      <div class="page-title">
        <h2><?php the_title(); ?></h2>
      </div>
        <?php
        while ( have_posts() ) : the_post(); ?>
        <div class="card border-0">
          <div class="page-image mx-auto">
            <?php the_post_thumbnail( 'full' ); ?>  
          </div> 
          <div class="card-body">
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>

          <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
  </div>
<?php get_footer(); ?>