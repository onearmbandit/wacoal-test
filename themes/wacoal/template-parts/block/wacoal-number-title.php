<?php
/**
 * Html for wacoal number list block.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="number-title">
    <div class="number-title--wrapper">

    <?php if($add_number && !empty($add_number)) :?>
        <div class="number desktop">
            <?php echo wp_kses_post($add_number);?>.
        </div>
    <?php endif;?>

        <div class="title js-bg-text">

        <?php if($add_number && !empty($add_number)) :?>
            <div class="number mobile">
                <?php echo wp_kses_post($add_number);?>.
            </div>
        <?php endif;?>

        <?php if($title && !empty($title)) :?>
            <span><?php echo Wacoal_Remove_P_tag(wp_kses_post($title))?></span>
        <?php endif;?>

        <?php if($subtitle && !empty($subtitle)) :?>
            <div class="sub-head"><?php echo Wacoal_Remove_P_tag(wp_kses_post($subtitle));?></div>
        <?php endif;?>

        </div>

        <?php if($description && !empty($description)) :?>
            <div class="content">
                <?php echo Wacoal_Remove_P_tag(wp_kses_post($description));?>
            </div>
        <?php endif;?>
    </div>
</section>
