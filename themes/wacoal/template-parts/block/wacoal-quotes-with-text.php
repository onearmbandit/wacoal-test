<?php
/**
 * Wacoal quotes with progress bar block template.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>


<section class="donation">
    <div class="donation--wrapper">
        <div class="donation--wrapper-left">

        <?php if($quotes_block_title && !empty($quotes_block_title)) : ?>
            <div class="title">
                <?php echo wp_kses_post($quotes_block_title); ?>
            </div>
        <?php endif; ?>

        <?php if($quotes_para_content && !empty($quotes_para_content)) : ?>
            <div class="para">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_para_content)); ?>
            </div>
        <?php endif; ?>

        </div>
        <div class="donation--wrapper-right">
        <?php if($quotes_text && !empty($quotes_text)) :?>
            <div class="quote">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_text)); ?></br>
            <?php if($person_name && !empty($person_name)) :?>
                <span>– <?php echo wp_kses_post(Wacoal_Remove_P_tag($person_name)); ?></span>
            <?php endif; ?>
            </div>
        <?php endif; ?>

        </div>
    </div>
</section>

