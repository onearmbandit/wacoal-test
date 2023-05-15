<?php
/**
 * Btemptd Questions B Template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */
?>

<section class="temptd-to">
    <div class="temptd-to--wrapper">
       <div class="heading">
            <?php echo wp_kses_post($title);?>
       </div>
       <div class="sub-heading">
            <?php echo wp_kses_post($description);?>
       </div>
    </div>
</section>
