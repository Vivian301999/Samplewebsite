<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Advance Training Academy
 */

get_header(); ?>

<?php do_action( 'advance_training_academy_page_header' ); ?>

<main role="main" id="maincontent" class="page-box-single mb-5">
    <?php
    $advance_training_academy_left_right = get_theme_mod( 'advance_training_academy_single_page_sidebar_layout','One Column');
    if($advance_training_academy_left_right == 'Left Sidebar'){ ?>
      <div class="container">
        <div class="row">
          <div id="sidebar" class="col-lg-4 col-md-4 mt-3">
              <?php dynamic_sidebar('sidebar-1'); ?>
          </div>
          <div class="col-lg-8 col-md-8 left-sidebar-page background-img-skin mt-3">
            <div class="box-img">
              <?php if(has_post_thumbnail()){
                   the_post_thumbnail();
                  } else{?>
                    <div class="single-img"></div>
              <?php } ?>
            </div>
            <div class="new-text text-start">
              <div class="container">
                <div class="main-content-box">
                  <h1><?php the_title(); ?></h1>
                  <div class="entry-content"><?php the_content();?></div>
                </div>
              </div>
            </div>
            <div class="commentbox mt-4">
              <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
              ?>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    <?php }else if($advance_training_academy_left_right == 'Right Sidebar'){ ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 right-sidebar-page background-img-skin mt-3">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_post_thumbnail(); ?>
              <h1><?php the_title(); ?></h1>
              <div class="entry-content"><?php the_content();?></div>
            <?php endwhile; // end of the loop. ?>
            <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                  comments_template();
              endif;
            ?>
            <div class="commentbox mt-4">
              <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                  comments_template();
              endif;
              ?>
            </div>
            <div class="clear"></div>
          </div>
          <div id="sidebar" class="col-lg-4 col-md-4 mt-3 mt-3">
            <?php dynamic_sidebar('sidebar-1'); ?>
          </div>
        </div>
      </div>
    <?php }else if($advance_training_academy_left_right == 'One Column'){ ?>
        <div class="background-img-skin">
          <div class="box-img">
            <?php if(has_post_thumbnail()){
                 the_post_thumbnail();
                } else{?>
                  <div class="single-img"></div>
            <?php } ?>
          </div>
          <div class="new-text text-start">
            <div class="container">
              <div class="main-content-box">
                <h1><?php the_title(); ?></h1>
                <div class="entry-content"><?php the_content();?></div>
              </div>
            </div>
          </div>
          <div class="commentbox mt-4">
            <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                  comments_template();
              endif;
            ?>
          </div>
          <div class="clear"></div>
        </div>
    <?php }?>
</main>

<?php do_action( 'advance_training_academy_page_footer' ); ?>

<?php get_footer(); ?>