<?php
/**
 * HTML for title description block
 *
 * @package Wacoal
 */
?>
<div class="featured-box--content">
<p class="featured-box--content__subtitle"><?php echo esc_attr($title_text);?></p>
<h4 class="featured-box--content__title"><?php echo wp_kses_post($desc_text);?></h4>
</div>
