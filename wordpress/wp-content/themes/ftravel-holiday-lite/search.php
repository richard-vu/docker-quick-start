<?php
/**
 * @package ftravel-holiday-lite
 */
get_header();
?>

<div class="container" id="contentdiv">
    <div class="page_content row">
          
        <section class="site-main col-md-8 col-lg-8 col-sm-12">
            <div class="blog-post">
                <?php if (have_posts()) : ?>                    
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template', 'content'); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <h1 class="entry-title"><?php printf(esc_html__('404 Page Found', 'ftravel-holiday-lite')); ?></h1>

                <?php endif; ?>
            </div><!-- blog-post -->
        </section> 
        <div class="col-md-4 col-lg-4 col-sm-12" id="sidebar">    
            <?php get_sidebar(); ?> 
        </div><!--col-md-4--> 


        <div class="clearfix"></div>
    </div><!-- site-aligner -->
</div><!-- container -->
<?php get_footer(); ?>