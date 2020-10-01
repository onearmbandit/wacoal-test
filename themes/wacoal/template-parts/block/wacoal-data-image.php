<?php
/**
 * Wacoal block image
 *
 * @package Wacoal
 */

global $post;

   ?>

   <div style="margin-top:200px;margin-bottom:100px;">
   <div style='float:left'>
    <p><?php echo wp_kses_post( $block_content ); ?></p>
  </div>
  <div style='float:left'>
    <img src="<?php echo esc_url( $block_image_url[0] ); ?>" style="width:200px;height:200px;">
  </div>
  <span><?php echo wp_kses_post( $caption ); ?></span>
  <?php
    if( $separator ) {?>
    <hr></hr>
   <?php }
  ?>
  </div>

