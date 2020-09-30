<?php
/**
 * Wacoal block image
 *
 * @package Wacoal
 */

global $post;

    $admin_img = wp_get_attachment_image_src( $block_image, 'full' );
   ?>
    <h4><u>Image:</u> <?php echo wp_kses_post( $caption ); ?></h4>
    <img src="<?php echo esc_url( $admin_img ); ?>">
    <?php
