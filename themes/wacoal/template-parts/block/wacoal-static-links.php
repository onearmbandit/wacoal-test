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
            <img src="<?php echo  esc_url($block_image_url[0]); ?>" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
               <?php echo esc_attr($block_fields['title']);?>
            </div>
            <?php foreach ($block_fields['links'] as $key => $page_obj) { ?>
                <div class="wacoal-101--list">
                    <div class="wacoal-101--list__icon">
                        <img src="<?php echo  esc_url(get_theme_file_uri()); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                    </div>
                    <div class="wacoal-101--list__content"><a href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
