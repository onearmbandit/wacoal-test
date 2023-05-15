<?php
/**
 * Banner Large Image
 */
return array(
	'title'      => __( 'Banner Large Image', 'wacoal' ),
	'categories' => array( 'wacoal' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"internal-banner"} -->
 <section class="wp-block-group internal-banner"><!-- wp:image {"sizeSlug":"large","className":"banner-wrapper big-banner"} -->
 <figure class="wp-block-image size-large banner-wrapper big-banner"><img src="https://www.wacoal-america.com/blog/wp-content/themes/wacoal/assets/images/pattern-images/banner-image.png" alt=""/></figure>
 <!-- /wp:image --></section>
 <!-- /wp:group -->',
);
