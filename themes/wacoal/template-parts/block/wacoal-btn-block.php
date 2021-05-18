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

<section class="link-button">
    <?php if($button_label && !empty($button_label)) :?>
    <div class="link-button--wrapper">
        <a href="<?php echo esc_url($button_url);?>" class="btn primary dark" <?php if($new_tab == true) : ?> target="_blank" <?php
       endif;?>>
            <?php echo esc_attr($button_label);?>
        </a>
    </div>
    <?php endif;?>
</section>
