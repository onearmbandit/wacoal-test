<?php
/**
 * Html for conclusion summary description block.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="conclusion">
    <div class="conclusion--wrapper">

    <?php if($bold_content && !empty($bold_content)) :?>
        <div class="conclusion--top-para">
            <?php echo wp_kses_post($bold_content);?>
        </div>
    <?php endif;?>

    <?php if($content && !empty($content)) :?>
        <div class="conclusion--bottom-para">
            <?php echo wp_kses_post($content);?>
        </div>
    <?php endif;?>

    </div>
</section>
