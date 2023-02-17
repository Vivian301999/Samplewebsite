<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Advance Training Academy
 */

get_header(); ?>

<main role="main" id="maincontent" class="our-services py-5">
    <div class="innerlightbox">
        <div class="container">
            <?php
            $advance_training_academy_left_right = get_theme_mod( 'advance_training_academy_layout_options','One Column');
            if($advance_training_academy_left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 noresult-content my-3'); ?>>
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <div class="row">
                            <?php if ( have_posts() ) :
                                while ( have_posts() ) : the_post(); ?>
                                    <div class="col-lg-6 col-md-6" >
                                        <?php get_template_part( 'template-parts/content' ); ?>
                                    </div>
                                <?php endwhile;
                            else :
                              get_template_part( 'no-results' ); 
                            endif; 
                            ?>
                        </div>
                        <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                        'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>  
                    </div>
                </div>
            <?php }else if($advance_training_academy_left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 noresult-content my-3'); ?>>
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <div class="row">
                            <?php if ( have_posts() ) :
                                while ( have_posts() ) : the_post(); ?>
                                    <div class="col-lg-6 col-md-6" >
                                        <?php get_template_part( 'template-parts/content' ); ?>
                                    </div>
                                <?php endwhile;
                            else :
                              get_template_part( 'no-results' ); 
                            endif; 
                            ?>
                        </div>
                        <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                        'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>   
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($advance_training_academy_left_right == 'One Column'){ ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('noresult-content my-3'); ?>>
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <div class="row">
                        <?php if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); ?>
                                <div class="col-lg-4 col-md-6" >
                                    <?php get_template_part( 'template-parts/content' ); ?>
                                </div>
                            <?php endwhile;
                        else :
                          get_template_part( 'no-results' ); 
                        endif; 
                        ?>
                    </div>
                    <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                    'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                ) );
                            ?>
                        </div> 
                    <?php } ?>  
                </div>
            <?php }else if($advance_training_academy_left_right == 'Three Columns'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-4 noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content'); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                        'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>   
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($advance_training_academy_left_right == 'Four Columns'){ ?>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <?php get_sidebar();?>
                    </div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-6 noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content'); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                        'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>   
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <?php get_sidebar();?>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($advance_training_academy_left_right == 'Grid Layout'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-9 col-md-9 row noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                        'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>  
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 noresult-content my-3'); ?>>
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-training-academy'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-training-academy' ),
                                        'next_text'          => __( 'Next page', 'advance-training-academy' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text text-uppercase p-2">' . __( 'Page', 'advance-training-academy' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>