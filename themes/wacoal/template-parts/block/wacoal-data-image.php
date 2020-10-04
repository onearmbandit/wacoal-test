<?php
/**
 * Wacoal block image
 *
 * @package Wacoal
 */

global $post;

?>

   <div class="row" style="padding:50px 0">
   <div class="column" style='float:left;width: 50%;'>
    <p><?php echo wp_kses_post($block_content); ?></p>
  </div>
  <div  class="column" style='float:left;width: 50%;'>
    <img src="<?php echo esc_url($block_image_url[0]); ?>" style="width:200px;height:200px;"></br>
    <span><?php echo wp_kses_post($caption); ?></span>
    <?php
    if($separator ) {?>
    <!-- <hr style="width:50%;float:inline-start"></hr> -->
    <?php }
    ?>
  </div>
  </div>

