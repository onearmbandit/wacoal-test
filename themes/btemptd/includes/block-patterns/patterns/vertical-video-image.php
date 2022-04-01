<?php
/**
 * Video Vertical with image
 */
return array(
	'title'      => __( 'Video Vertical with image', 'btemptd' ),
	'categories' => array( 'btemptd' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section"} -->
 <section class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","className":"video-image\u002d\u002dwrapper"} -->
 <div class="wp-block-columns are-vertically-aligned-center video-image--wrapper"><!-- wp:column {"verticalAlignment":"center","className":"video-image\u002d\u002dwrapper__left"} -->
 <div class="wp-block-column is-vertically-aligned-center video-image--wrapper__left"><!-- wp:embed {"url":"https://www.youtube.com/embed/-CdXBfMq7uI","type":"rich","providerNameSlug":"embed-handler","responsive":true,"align":"center","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
 <figure class="wp-block-embed aligncenter is-type-rich is-provider-embed-handler wp-block-embed-embed-handler wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
 https://www.youtube.com/embed/-CdXBfMq7uI
 </div></figure>
 <!-- /wp:embed -->

 <!-- wp:paragraph {"className":"video-caption"} -->
 <p class="video-caption">Video Vertical Block – Video with image<br>LOREM IPSUM DOLOR SIT AMET,</p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:column -->

 <!-- wp:column {"verticalAlignment":"center","className":"video-image\u002d\u002dwrapper__right"} -->
 <div class="wp-block-column is-vertically-aligned-center video-image--wrapper__right"><!-- wp:image {"align":"center","id":188,"sizeSlug":"full","linkDestination":"none"} -->
 <div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://btemptdblog.wacoal-america.mark4.cetxlabs.com/wp-content/uploads/sites/3/2020/11/BT_BWOWD_Pushup.jpeg" alt="" class="wp-image-188"/><figcaption>LOREM IPSUM DOLOR SIT AMET,</figcaption></figure></div>
 <!-- /wp:image --></div>
 <!-- /wp:column --></div>
 <!-- /wp:columns --></section>
 <!-- /wp:group -->',
);
