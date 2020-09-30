<?php
/**
 * Wacoal block tesimonial
 *
 * @package Wacoal
 */

global $post;

?>

<div style="margin-top:200px;margin-bottom:100px;">
<div style='float:left'>
        <img src="<?php echo esc_url( $testimonial_image_url[0] ); ?>" style="height:200px;width:200px;"/>
    </div>
    <div style='float:leftt'>
        <span><q><?php echo wp_kses_post( $testimonial_quote_text ); ?></span></q>
    </div>
</div>
