<?php
/**
 * Video Horizontal
 */
return array(
	'title'      => __( 'Video Horizontal', 'wacoal' ),
	'categories' => array( 'wacoal' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"video-full-width"} -->
 <section class="wp-block-group video-full-width"><!-- wp:embed {"url":"https://www.youtube.com/watch?v=4QCxwSEuHYg","type":"video","providerNameSlug":"youtube","responsive":true,"className":"video-full-width\u002d\u002dwrapper"} -->
 <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube video-full-width--wrapper"><div class="wp-block-embed__wrapper">
 https://www.youtube.com/watch?v=4QCxwSEuHYg
 </div></figure>
 <!-- /wp:embed -->

 <!-- wp:paragraph {"className":"video-caption"} -->
 <p class="video-caption">VIDEO CAPTION – LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA.</p>
 <!-- /wp:paragraph --></section>
 <!-- /wp:group -->',
);
