<?php
/**
 * HTML for static links block
 *
 * @package Wacoal
 */
?>

<section class="wacoal-101">
    <div class="wacoal-101--wrapper">
        <div class="wacoal-101--image">
            <img class="lazyload" data-src="<?php echo  esc_url($block_image_url[0]); ?>"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
               <?php echo esc_attr($block_fields['title']);?>
            </div>
            <?php foreach ($block_fields['links'] as $key => $page_obj) { ?>
                <div class="wacoal-101--list">
                    <div class="wacoal-101--list__icon">
                        <img class="lazyload" data-src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/wacol-101-arrow.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Wacoal 101 Arrow" />
                    </div>
                    <div class="wacoal-101--list__content"><a href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
