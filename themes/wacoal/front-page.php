<?php
/**
 * Front page
 *
 * @package Wacoal
 */


wacoal_page_entry_top('');

// $homepage_fields = get_fields();

$top_banner_fields      = get_field( 'top_banner', 'options' );
$slider_fields      = get_field( 'slider_posts', 'options' );
$top_banner_image_id  = $top_banner_fields['banner_image'];
$top_banner_image_url = wp_get_attachment_image_src( $top_banner_image_id );
$top_banner_title     = $top_banner_fields['banner_title'];
$top_banner_subtitle  = $top_banner_fields['banner_subtitle'];

require locate_template( 'template-parts/front-page.php' );

wacoal_page_entry_bottom();
