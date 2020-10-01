<?php
/**
 * HTML for title description block
 *
 * @package Wacoal
 */
?>
<div class="row" style="text-align: center;padding:50px 0;">
    <div class="column">
<h6 class="featured-box--content__subtitle"><?php echo esc_attr($title_text);?></h6>
<p class="featured-box--content__title"><?php echo wp_kses_post($desc_text);?></p>
</div>
</div>
