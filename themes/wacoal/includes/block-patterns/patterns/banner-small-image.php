<?php
/**
 * Banner Small Image
 */
return array(
	'title'      => __( 'Banner Small Image', 'wacoal' ),
	'categories' => array( 'wacoal' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"internal-banner"} -->
 <section class="wp-block-group internal-banner"><!-- wp:image {"className":"banner-wrapper small-banner"} -->
 <figure class="wp-block-image banner-wrapper small-banner"><img src="https://www.wacoal-america.com/blog/wp-content/themes/wacoal/assets/images/pattern-images/banner-image.png" alt=""/></figure>
 <!-- /wp:image --></section>
 <!-- /wp:group -->',
);
