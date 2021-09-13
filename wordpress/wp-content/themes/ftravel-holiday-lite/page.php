<?php
/**
 * @package ftravel-holiday-lite
 */
get_header();
?>
<?php
if (is_front_page() && !is_home()) {
    $ftravel_holiday_lite_site_main = "col-md-12 col-lg-12 col-sm-12 sitefull";
} else {
    $ftravel_holiday_lite_site_main = "col-md-8 col-lg-8 col-sm-12 site-main";
}
?>
<div class="container" id="contentdiv">
    
        
        <div class="<?php echo esc_attr($ftravel_holiday_lite_site_main); ?>">
            <div class="blog-post">
                <?php
                if (have_posts()) :

                    while (have_posts()) : the_post();
                        ?>   
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="post-thumb">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                            </div>
                        <?php } ?> 
                        <div class="clear"></div>
                        <div class="heading">
                            <?php if (is_front_page()) { ?>
                                <h3 class="style2"><?php the_title(); ?></h3>
                            <?php }else {?>
                                <h1><?php the_title(); ?></h1>
                            <?php }?>
                        </div>
                        <div class="pagecontent"><?php the_content(); ?></div>
                        <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
                        <?php if (!is_front_page()) { ?>
                            <?php
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;
                            ?>
                        <?php } ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div><!--blog-post -->
        </div><!--col-md-8-->
        <?php if (!is_front_page()) { ?>
            <div class="col-md-4 col-lg-4 col-sm-12" id="sidebar">
                <?php get_sidebar(); ?>
            </div><!--col-md-4-->  
        <?php } ?>
        

        <div class="clearfix"></div>
    
</div><!-- container -->
<?php get_footer(); 