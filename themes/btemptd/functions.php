<?php
/**
 * Theme functions.
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

define('THEMEPATH', get_template_directory());
define('THEMEURI', get_template_directory_uri());
define('STYLESHEETURI', get_stylesheet_directory_uri());

if (!function_exists('btemptd_setup')) {

    function btemptd_setup()
    {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
            'menu-1' => esc_html__('Primary', 'btemptd'),
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
    }
}
add_action('after_setup_theme', 'btemptd_setup');

/**
 * Enqueue scripts and styles.
 */
function btemptd_scripts()
{

    global $wp_query;
    $distFileJson = file_get_contents(__DIR__ . '/dist/assets.json');
    $distFile = json_decode($distFileJson, true);

    wp_enqueue_script('btemptd-js', STYLESHEETURI . '/dist/' . $distFile['website']['js'], array('jquery'), null, true);
    wp_enqueue_style('btemptd-css', STYLESHEETURI . '/dist/' . $distFile['website']['css']);

    wp_localize_script(
        'btemptd-js',
        'btemptd_js_var',
        array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'query_vars' => wp_json_encode($wp_query->query),
        'nonce' => wp_create_nonce('ajax-nonce'),
        )
    );

}
add_action('wp_enqueue_scripts', 'btemptd_scripts');

/**
 * Admin Enqueue scripts and styles.
 */
function btemptd_Admin_scripts($hook)
{
    global $post;

    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }

    $distFileJson = file_get_contents(__DIR__ . '/dist/assets.json');
    $distFile = json_decode($distFileJson, true);

    if ($hook == 'post-new.php' || $hook == 'post.php' ) {
        if ('post' === $post->post_type || 'page' === $post->post_type ) {
            wp_enqueue_script('btemptd-admin', esc_url(THEMEURI) . '/dist/' . $distFile['wpadmin']['js'], array('jquery'), null, true);
            wp_enqueue_style('btemptd-admin', STYLESHEETURI . '/dist/' . $distFile['wpadmin']['css']);
        }
    }
}
add_action('admin_enqueue_scripts', 'btemptd_Admin_scripts', 10, 1);

/**
 * Admin Enqueue ACF scripts.
 */
function acf_custom_text_toolbar_script()
{
    wp_enqueue_script('admin-js', esc_url(THEMEURI) . '/assets/js/admin/acf-custom-text-toolbar.js', array( 'jquery' ), '1.0.0', true);
}
add_action('acf/input/admin_enqueue_scripts', 'acf_custom_text_toolbar_script');

/**
 * Admin functions include
 */
if (is_admin()) {
    include THEMEPATH . '/includes/admin/admin-functions.php';
}

/**
 * Website functions include
 */
require THEMEPATH . '/includes/website/website-functions.php';

/**
 * Enable gutenberg
 */
if (function_exists('wpcom_vip_load_gutenberg') ) {
    wpcom_vip_load_gutenberg(true);
}

// LOCALDEV START.
/**
 * Below this all code is local dev only, in circle ci configuration this code is removed in a '-built' branch
*/
if (defined('btemptd_ENABLE_LOCAL_SETTINGS') && btemptd_ENABLE_LOCAL_SETTINGS ) {

    add_filter(
        'wp_get_attachment_image_src',
        function ( $image ) {
            $image[0] = jetpack_photon_url($image[0]);
            return $image;
        }
    );

    add_filter(
        'jetpack_photon_domain',
        function ( $domain ) {
            return btemptd_PHOTON_URL;
        }
    );
}
// LOCALDEV END.
/**
 * Website ajax functions include
*/
require THEMEPATH . '/includes/website/website-ajax-functions.php';