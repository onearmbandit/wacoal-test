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

<section class="body-intro">
    <div class="body-intro--wrapper">
    <?php if($para_content && !empty($para_content)) :?>
        <div class="para">
            <?php echo Wacoal_Remove_P_tag(wp_kses_post($para_content));?>
        </div>
    <?php endif;?>
    <?php if($bullet_content && !empty($bullet_content)) :
        echo Wacoal_Remove_P_tag(wp_kses_post($bullet_content));
    endif;?>
    </div>
</section>
