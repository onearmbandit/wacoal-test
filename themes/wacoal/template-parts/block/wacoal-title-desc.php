<?php
/**
 * Html for subhead with description
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="subhead-two">
    <div class="subhead-two--wrapper">
        <?php
        if ($subhead_text && !empty($subhead_text)) {
            ?>
        <div class="subhead-two--wrapper__title"><?php echo wp_kses_post($subhead_text);?></div>
            <?php
        }
        if ($desc_text && !empty($desc_text)) {
            ?>
        <div class="subhead-two--wrapper__para">
            <?php echo wp_kses_post($desc_text);?>
        </div>
            <?php
        }
        ?>
    </div>
</section>
