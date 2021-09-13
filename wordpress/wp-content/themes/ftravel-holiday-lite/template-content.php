<?php
/**
 * @package ftravel-holiday-lite
 */
?>
<div class="recent_articles">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if (has_post_thumbnail()) { ?>
            <div class="post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            </div>
        <?php } ?> 

        <header class="entry-header">           
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <?php if ('post' == get_post_type()) : ?>
                <div class="postmeta">
                    <div class="post-date"><?php the_date(); ?></div><!-- post-date -->
                    <div class="post-comment"> <a href="<?php esc_url(comments_link()); ?>"><?php comments_number(); ?></a></div>                                  
                </div><!-- postmeta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <?php if (is_search() || !is_single()) : ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
                <a class="learnmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More &raquo;', 'ftravel-holiday-lite'); ?></a>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="entry-content">
                <?php the_content(esc_html_e('Continue reading <span class="meta-nav">&rarr;</span>', 'ftravel-holiday-lite')); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ftravel-holiday-lite'),
                    'after'  => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clearfix"></div>
    </article><!-- #post-## -->
</div><!-- site-bloglist-repeat -->