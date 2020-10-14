<?php
/**
 * Wacoal myth list block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

if ($block_lists && !empty($block_lists)) {
    ?>

<section class="list-text-format myth-block">
    <div class="list-text-format--wrapper">
    <?php

    $row_index = get_row_index();

    foreach ($block_lists as $list) {
        $list_align_type = $list['list_align_type'];
        $list_header = $list['list_header'];
        $list_subhead = $list['list_subhead'];
        $list_description = $list['list_description'];
        ?>
        <div class="list-box list-box-one">

            <?php
            if ($list_header && !empty($list_header)) {
                ?>
            <div class="list-box--number">
                <span><?php echo esc_attr($row_index); ?></span>
                <h2><?php echo wp_kses_post($list_header); ?></h2>
            </div>
                <?php
            } ?>

            <div class="list-box--content">

                <?php
                if ($list_subhead && !empty($list_subhead)) {
                    ?>
                <div class="list-box--heading">
                    <span>
                        <?php echo wp_kses_post($list_subhead); ?>
                    </span>
                </div>
                    <?php
                }
                if ($list_description && !empty($list_description)) {
                    ?>
                <div class="list-box--para">
                    <?php echo wp_kses_post($list_description); ?>
                </div>
                    <?php
                } ?>

            </div>
        </div>
            <?php
            $row_index++;
    } ?>

    </div>
</section>
    <?php
}
?>
