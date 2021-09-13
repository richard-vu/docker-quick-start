<?php
/**
 * 404 pages (Not Found).
 *
 * @package ftravel-holiday-lite
 */
get_header();
?>

<div class="container" id="contentdiv">
    <div class="page_content row">
        <div class="col-md-4 col-lg-4 col-sm-12" id="sidebar">
            <?php get_sidebar(); ?>
        </div><!--col-md-4-->
        <section class="site-main col-md-8 col-lg-8 col-sm-12">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e('Oops! That page can&rsquo;t be found', 'ftravel-holiday-lite'); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php esc_html_e('Looks like you have taken a wrong turn...Don\'t worry... it happens to the best of us.', 'ftravel-holiday-lite'); ?></p>

            </div><!-- .page-content -->
        </section>


        <div class="clearfix"></div>
    </div><!--row-->
</div><!--container-->
<?php get_footer();