<?php
/**
 * Image + Text + Image
 */
return array(
	'title'      => __( 'Image + Text + Image', 'btemptd' ),
	'categories' => array( 'btemptd' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"image-text-image"} -->
 <section class="wp-block-group image-text-image"><!-- wp:columns {"className":"image-text-image\u002d\u002dwrapper"} -->
 <div class="wp-block-columns image-text-image--wrapper"><!-- wp:column {"className":"image-title"} -->
 <div class="wp-block-column image-title"><!-- wp:image {"sizeSlug":"large"} -->
 <figure class="wp-block-image size-large"><img src="https://btemptd.wacoal-america.com/blog/wp-content/themes/btemptd/assets/images/pattern-images/left-image-text-image.jpeg" alt=""/></figure>
 <!-- /wp:image -->

 <!-- wp:paragraph {"className":"title"} -->
 <p class="title">LOREM IPSUM DOLOR SIT AMET,</p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:column -->

 <!-- wp:column {"className":"content"} -->
 <div class="wp-block-column content"><!-- wp:heading {"className":"title"} -->
 <h2 class="title" id="image-text-image-block">Image + Text + Image Block</h2>
 <!-- /wp:heading -->

 <!-- wp:paragraph {"className":"para"} -->
 <p class="para">Don’t forget. Our Fit Experts are always hereto help you find the perfect bra size. Make an appointment for a bra consultation today, or try our bra size calculator to discover your correct bra measurements using our easy step-by-step guide.</p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:column -->

 <!-- wp:column {"className":"image-title"} -->
 <div class="wp-block-column image-title"><!-- wp:image {"sizeSlug":"large"} -->
 <figure class="wp-block-image size-large"><img src="https://btemptd.wacoal-america.com/blog/wp-content/themes/btemptd/assets/images/pattern-images/right-image-text-image.jpeg" alt=""/></figure>
 <!-- /wp:image -->

 <!-- wp:paragraph {"className":"title"} -->
 <p class="title">LOREM IPSUM DOLOR SIT AMET,</p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:column --></div>
 <!-- /wp:columns --></section>
 <!-- /wp:group -->',
);
