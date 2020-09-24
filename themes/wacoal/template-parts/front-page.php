<?php
/**
 * front page html
 *
 * @package Wacoal
 */
?>

<div class="container">
<div class="row" style="background-image:url( <?php echo esc_url( $top_banner_image_url[0] ); ?> ); background-size:cover; height:250px; width:100%;">
<div class="col-lg-12">
    <div class="intro-text">
      <h2><?php echo esc_attr( $top_banner_title ); ?></h2>
      <span class="skills"><?php echo esc_attr( $top_banner_subtitle ); ?></span>
    </div>
  </div>
</div>
</div>
