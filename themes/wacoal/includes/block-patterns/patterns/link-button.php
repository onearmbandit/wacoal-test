<?php
/**
 * Link Button
 */
return array(
	'title'      => __( 'Link Button', 'wacoal' ),
	'categories' => array( 'wacoal' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"link-button"} -->
 <section class="wp-block-group link-button"><!-- wp:buttons {"className":"link-button\u002d\u002dwrapper","layout":{"type":"flex","justifyContent":"center"}} -->
 <div class="wp-block-buttons link-button--wrapper"><!-- wp:button {"backgroundColor":"black","style":{"border":{"radius":"0px"},"typography":{"fontSize":"14px"}},"className":"btn primary dark"} -->
 <div class="wp-block-button has-custom-font-size btn primary dark" style="font-size:14px"><a class="wp-block-button__link has-black-background-color has-background" style="border-radius:0px">SHOP NOW</a></div>
 <!-- /wp:button --></div>
 <!-- /wp:buttons --></section>
 <!-- /wp:group -->',
);
