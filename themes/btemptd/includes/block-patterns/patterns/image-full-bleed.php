<?php
/**
 * Image - Full Bleed
 */
return array(
	'title'      => __( 'Image - Full Bleed', 'btemptd' ),
	'categories' => array( 'btemptd' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"full-bleed-image"} -->
 <section class="wp-block-group full-bleed-image"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
 <figure class="wp-block-image size-large"><a href="https://btemptd.wacoal-america.com/blog/"><img src="https://btemptd.wacoal-america.com/blog/wp-content/themes/btemptd/assets/images/pattern-images/image-full-bleed.jpeg" alt=""/></a></figure>
 <!-- /wp:image -->

 <!-- wp:paragraph {"className":"image-caption"} -->
 <p class="image-caption">Image – Full Bleed – This is the image caption</p>
 <!-- /wp:paragraph --></section>
 <!-- /wp:group -->',
);
