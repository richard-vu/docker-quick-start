<?php

/**
 * @package ftravel-holiday-lite
 */
require_once get_template_directory() . "/pubcore/customizer.php";

add_image_size('ftravel-holiday-lite-home-box-size', 400, 250, true);

add_action('customize_register', 'ftravel_holiday_lite_customize_register_custom_controls', 9);

function ftravel_holiday_lite_customize_register_custom_controls($wp_customize) {
    get_template_part('pubcore/ftravel_holiday_lite', 'sectionpro');
}

function ftravel_holiday_lite_customize_controls_js() {
    $theme = wp_get_theme();
    wp_enqueue_script('ftravel-holiday-lite-customizer-section-pro-jquery', get_template_directory_uri() . '/pubcore/customize-controls.js', array('customize-controls'), $theme->get('Version'), true);
    wp_enqueue_style('ftravel-holiday-lite-customizer-section-pro', get_template_directory_uri() . '/pubcore/customize-controls.css', $theme->get('Version'));
}

add_action('customize_controls_enqueue_scripts', 'ftravel_holiday_lite_customize_controls_js');

function ftravel_holiday_lite_enqueue_comments_reply() {
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('comment_form_before', 'ftravel_holiday_lite_enqueue_comments_reply');

if (!function_exists('ftravel_holiday_lite_sanitize_page')) :

    function ftravel_holiday_lite_sanitize_page($page_id, $setting) {
        // Ensure $input is an absolute integer.
        $page_ids = absint($page_id);
        // If $page_id is an ID of a published page, return it; otherwise, return the default.
        return ( 'publish' === get_post_status($page_ids) ? $page_ids : $setting->default );
    }

endif;

//widet registartion
function ftravel_holiday_lite_widgets_init() {

    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'ftravel-holiday-lite'),
        'description'   => esc_html__('Appears on sidebar', 'ftravel-holiday-lite'),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init', 'ftravel_holiday_lite_widgets_init');

// after theme setup hook
if (!function_exists('ftravel_holiday_lite_setup')) :

    function ftravel_holiday_lite_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('title-tag');
        add_theme_support("wp-block-styles");
        add_theme_support("responsive-embeds");
        add_theme_support("align-wide");
        add_theme_support('custom-logo', array(
            'height' => 480,
            'width'  => 720,
        ));


        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'ftravel-holiday-lite'),
            'footer'  => esc_html__('Footer Menu', 'ftravel-holiday-lite'),
        ));
        add_theme_support('custom-background', array(
            'default-color' => 'ffffff'
        ));

        $defaults = array(
            'default-image'      => get_template_directory_uri() . '/images/slider1.jpg',
            'default-text-color' => 'ffffff',
            'width'              => 1400,
            'height'             => 500,
            'uploads'            => true,
            'wp-head-callback'   => 'ftravel_holiday_lite_header_style',
        );
        add_theme_support('custom-header', $defaults);
        
        /**
         * Add post-formats support.
         */
        add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        add_theme_support('jetpack-content-options', array(
            'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
            'author-bio'         => true, // display or not the author bio: true or false.
            'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
            'masonry'            => '.site-main', // a CSS selector matching the elements that triggers a masonry refresh if the theme is using a masonry layout.
            'post-details'       => array(
                'stylesheet' => 'themeslug-style', // name of the theme's stylesheet.
                'date'       => '.posted-on', // a CSS selector matching the elements that display the post date.
                'categories' => '.cat-links', // a CSS selector matching the elements that display the post categories.
                'tags'       => '.tags-links', // a CSS selector matching the elements that display the post tags.
                'author'     => '.byline', // a CSS selector matching the elements that display the post author.
                'comment'    => '.comments-link', // a CSS selector matching the elements that display the comment link.
            ),
            'featured-images'    => array(
                'archive'         => true, // enable or not the featured image check for archive pages: true or false.
                'archive-default' => false, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
                'post'            => true, // enable or not the featured image check for single posts: true or false.
                'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
                'page'            => true, // enable or not the featured image check for single pages: true or false.
                'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
            ),
        ));
    }

endif; // ftravel_holiday_lite_setup
add_action('after_setup_theme', 'ftravel_holiday_lite_setup');

if (!isset($content_width))
    $content_width = 900;

//logo header style
function ftravel_holiday_lite_header_style() {
    $ftravel_holiday_lite_header_text_color = get_header_textcolor();
    if (get_theme_support('custom-header', 'default-text-color') === $ftravel_holiday_lite_header_text_color) {
        return;
    }
    echo '<style id="ftravel-holiday-lite-custom-header-styles" type="text/css">';
    if ('blank' !== $ftravel_holiday_lite_header_text_color) {
        echo '.logotxt, .logotxt a
			 {
				color: #' . esc_attr($ftravel_holiday_lite_header_text_color) . '
			}';
    }
    echo '</style>';
}

//define css and js in header part
function ftravel_holiday_lite_style_js() {
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/skinview/bootstrap/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/skinview/css/font-awesome.css');
    wp_enqueue_style('ftravel-holiday-lite-basic-style', get_stylesheet_uri());
    wp_enqueue_style('ftravel-holiday-lite-style', get_template_directory_uri() . '/main.css');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/skinview/bootstrap/js/bootstrap.js', array('jquery'));
    wp_enqueue_script('ftravel-holiday-lite-toggle-jquery', get_template_directory_uri() . '/skinview/js/toggle.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'ftravel_holiday_lite_style_js');

//wp_print_footer_scripts hooks
function ftravel_holiday_lite_skip_link_focus_fix() {
    echo '<script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>';

    //menu dropdown accessibility
    echo '<script type="text/javascript">

        jQuery(document).ready(function () {
            jQuery(".nav").fphotosnapliteaccessibleDropDown();
        });

        jQuery.fn.fphotosnapliteaccessibleDropDown = function () {
            var el = jQuery(this);

            /* Make dropdown menus keyboard accessible */

            jQuery("a", el).focus(function () {
                jQuery(this).parents("li").addClass("hover");
            }).blur(function () {
                jQuery(this).parents("li").removeClass("hover");
            });
        }
    </script>';
}

add_action('wp_print_footer_scripts', 'ftravel_holiday_lite_skip_link_focus_fix');

//content excerpt function
function ftravel_holiday_lite_get_excerpt($postid, $post_count_size) {
    $excerpt = get_post_field('post_content', $postid);
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $post_count_size);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    return $excerpt;
}
