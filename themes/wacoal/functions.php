<?php
/**
 * Theme functions.
 *
 * @package Wacoal
 */

define('THEMEPATH', get_template_directory());
define('THEMEURI', get_template_directory_uri());
define('STYLESHEETURI', get_stylesheet_directory_uri());

if (!function_exists('wacoal_setup')) {

    function wacoal_setup()
    {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'wacoal'),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        add_theme_support(
            'custom-background',
            apply_filters(
                'wacoal_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
}
add_action('after_setup_theme', 'wacoal_setup');

function wacoal_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wacoal_content_width', 640);
}
add_action('after_setup_theme', 'wacoal_content_width', 0);

function wacoal_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'wacoal'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'wacoal'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Column One', 'wacoal' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wacoal' ),
		'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-links--title">',
		'after_title'   => '</div>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Two', 'wacoal' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wacoal' ),
		'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-links--title">',
		'after_title'   => '</div>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Three', 'wacoal' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wacoal' ),
		'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-links--title">',
		'after_title'   => '</div>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Four', 'wacoal' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wacoal' ),
		'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-links--title">',
		'after_title'   => '</div>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Five', 'wacoal' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'wacoal' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );

}
add_action('widgets_init', 'wacoal_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function Wacoal_scripts()
{

    $distFileJson = file_get_contents(__DIR__ . '/dist/assets.json');
    $distFile = json_decode($distFileJson, true);

    wp_enqueue_script('wacoal-js', STYLESHEETURI . '/dist/' . $distFile['website']['js'], array('jquery'), null, true);
    wp_enqueue_style('wacoal-css', STYLESHEETURI . '/dist/' . $distFile['website']['css']);

    wp_localize_script(
        'wacoal-js',
        'wacoal_js_var',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'Wacoal_scripts');

/**
 * Admin Enqueue scripts and styles.
 */
function Wacoal_Admin_scripts()
{
    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }

    wp_enqueue_style('jquery');

    wp_enqueue_script('wacoal-admin-js', THEMEURI . '/assets/js/wpadmin.js', array('jquery'), null, true);
    //    wp_enqueue_style('wacoal-admin-css', themeUri . '/assets/css/wpadmin/admin.css');

    wp_localize_script(
        'admin',
        'wacoal_js_var_admin',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );
}
add_action('admin_enqueue_scripts', 'Wacoal_Admin_scripts');

/**
 * Admin functions include - START
 */

if (is_admin()) {

    include THEMEPATH . '/includes/admin/admin-functions.php';
}

/**
 * Admin functions include - END
 */


/**
 * Website functions include - START
 */

require THEMEPATH . '/includes/website/website-functions.php';

/**
 * Website functions include - END
 */

if (function_exists('wpcom_vip_load_gutenberg') ) {
    wpcom_vip_load_gutenberg(true);
}
grant_super_admin(1);
/**
 * Add Menu link class.
 */
function wacoal_add_menu_link_class($atts, $item, $args)
{
    if ($args->menu->name == 'Header') {
        $atts['class'] = 'header-navigation--link';
    }else{
        $atts['class'] = 'footer-links--ul__link';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'wacoal_add_menu_link_class', 1, 3);
/**
 * Add Menu li class.
 */

function wacoal_add_menu_li_class ( $classes, $item, $args, $depth ){
  if($args->menu->name == 'Header'){
    $classes[] = 'header-navigation--list';
  }else{
    $classes[] = 'footer-links--ul__list';
  }

  return $classes;
}
add_filter ( 'nav_menu_css_class', 'wacoal_add_menu_li_class', 10, 4 );
