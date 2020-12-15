<?php
/**
 * Wacoal reminder block template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<section class="spacer-120"></section>
<section class="reminder-note">
    <div class="reminder-note--wrapper">

    <?php if($reminder_symbol_id && !empty($reminder_symbol_id)) :?>
        <div class="image">
            <img src="<?php echo  esc_url($reminder_image_url); ?>"
                 alt="<?php echo wp_kses_post($reminder_image_url); ?>" />
        </div>
    <?php endif; ?>

    <?php if($reminder_content && !empty($reminder_content)) :?>
        <div class="content">
        <?php echo wp_kses_post(Wacoal_Remove_P_tag($reminder_content)); ?>
        </div>
    <?php endif;?>

    </div>
</section>
