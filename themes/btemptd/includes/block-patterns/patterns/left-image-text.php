<?php
/**
 * Left Image + Text
 */
return array(
	'title'      => __( 'Left Image + Text', 'btemptd' ),
	'categories' => array( 'text' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":" list-text-image"} -->
	<section class="wp-block-group  list-text-image"><!-- wp:columns {"className":"list-text-image\u002d\u002dwrapper img-left"} -->
	<div class="wp-block-columns list-text-image--wrapper img-left"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"width":420,"height":420,"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large is-resized"><img src="https://btemptdblog.wacoal-america.mark4.cetxlabs.com/wp-content/uploads/sites/3/2020/11/BT_BENTICING_Strapless.jpeg" alt="" width="420" height="420"/></figure>
	<!-- /wp:image -->

	<!-- wp:paragraph {"className":"image-name"} -->
	<p class="image-name">LOREM IPSUM DOLOR SIT AMET</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"className":"list-text-image\u002d\u002dcontent"} -->
	<div class="wp-block-group list-text-image--content"><!-- wp:heading {"className":"title"} -->
	<h2 class="title">Image + Text (Left &amp; Right) – Left Image</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"content"} -->
	<p class="content">A hands-down cult favorite at Wacoal HQ, Body Base® is all about solutions—and we love it for that. It’s lightweight, smoothing, and helps clothing skim your body. Think of it as a supportive hybrid between panties and shapewear—only it’s not constricting. We truly cannot get enough of this style.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":" button-block"} -->
	<div class="wp-block-buttons  button-block"><!-- wp:button {"className":"block-btn"} -->
	<div class="wp-block-button block-btn"><a class="wp-block-button__link" href="#">Shop Now</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
	<!-- /wp:group -->',
);
