<?php
/**
 * Btemptd CTA list template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>

<section class="wow-factor">
    <div class="wow-factor--wrapper top">

    <?php if($cta_1_text && !empty($cta_1_text)) :?>
        <div class="wow-factor--left box-shadow-right">
            <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-down.svg" alt="" />
            <?php echo wp_kses_post($cta_1_text); ?>
        </div>
    <?php endif; ?>

    <?php if($cta_2_text && !empty($cta_2_text)) :?>
        <div class="wow-factor--right box-shadow-right">
            <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-down.svg" alt="" />
            <?php echo wp_kses_post($cta_2_text); ?>
        </div>
    <?php endif; ?>

    </div>

    <?php if($block_image_id && !empty($block_image_id)) :?>
    <div class="wow-factor--wrapper bottom">
        <div class="wow-factor--banner">
                <img class="img-fluid" src="<?php echo  esc_url($block_image_url); ?>" alt="Image" />
        </div>
    </div>
    <?php endif;?>

</section>
