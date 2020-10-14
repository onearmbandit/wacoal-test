<?php
/**
 * Wacoal text only list block
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

<section class="list-text-format">
    <div class="list-text-format--wrapper">
    <?php

    $row_index = get_row_index();

    foreach ($block_lists as $list) {
        $list_align_type = $list['list_align_type'];
        $list_header = $list['list_header'];
        $list_subhead = $list['list_subhead'];
        $list_description = $list['list_description'];

        if ($list_align_type == 'center_aligned') {
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
        }
        if ($list_align_type == 'left_aligned') {
            ?>
        <div class="list-box list-box-two">
             <?php
                if ($list_header && !empty($list_header)) {
                    ?>
                <div class="list-box--number list-box--number__mobile">
                <span><?php echo esc_attr($row_index); ?></span>
                    <h2><?php echo wp_kses_post($list_header); ?></h2>
                </div>
                    <?php
                } ?>
            <?php
            if ($list_subhead && !empty($list_subhead)) {
                ?>
            <div class="list-box--heading">
                <span>
                    <?php echo wp_kses_post($list_subhead); ?>
                </span>
            </div>
                <?php
            } ?>

            <div class="list-box-even--wrapper">
                <div class="list-box--content">

                <?php
                if ($list_description && !empty($list_description)) {
                    ?>
                    <div class="list-box--para">
                    <?php echo wp_kses_post($list_description); ?>
                    </div>
                    <?php
                } ?>

                </div>

                <?php
                if ($list_header && !empty($list_header)) {
                    ?>
                <div class="list-box--number list-box--number__desktop">
                <span><?php echo esc_attr($row_index); ?></span>
                    <h2><?php echo wp_kses_post($list_header); ?></h2>
                </div>
                    <?php
                } ?>

            </div>
        </div>
            <?php
        }
        if ($list_align_type == 'right_aligned') {
            ?>
            <div class="list-box list-box-three">
            <?php
                if ($list_header && !empty($list_header)) {
                    ?>
                <div class="list-box--number list-box--number__mobile">
                <span><?php echo esc_attr($row_index); ?></span>
                    <h2><?php echo wp_kses_post($list_header); ?></h2>
                </div>
                    <?php
                } ?>
            <?php
            if ($list_subhead && !empty($list_subhead)) {
                ?>
            <div class="list-box--heading">
                <span>
                    <?php echo wp_kses_post($list_subhead); ?>
                </span>
            </div>
                <?php
            } ?>

            <div class="list-box-even--wrapper">

                <?php
                if ($list_header && !empty($list_header)) {
                    ?>
                <div class="list-box--number list-box--number__desktop">
                <span><?php echo esc_attr($row_index); ?></span>
                    <h2><?php echo wp_kses_post($list_header); ?></h2>
                </div>
                    <?php
                } ?>

                <?php
                if ($list_description && !empty($list_description)) {
                    ?>
                <div class="list-box--content">
                    <div class="list-box--para">
                    <?php echo wp_kses_post($list_description); ?>
                    </div>
                </div>
                    <?php
                } ?>

            </div>
        </div>
            <?php
        }
        if ($list_align_type == 'myth_block') {
            ?>
            <div class="list-box list-box-three">
            <?php
                if ($list_header && !empty($list_header)) {
                    ?>
                <div class="list-box--number list-box--number__mobile">
                <span><?php echo esc_attr($row_index); ?></span>
                    <h2><?php echo wp_kses_post($list_header); ?></h2>
                </div>
                    <?php
                } ?>
            <?php
            if ($list_subhead && !empty($list_subhead)) {
                ?>
            <div class="list-box--heading">
                <span>
                    <?php echo wp_kses_post($list_subhead); ?>
                </span>
            </div>
                <?php
            } ?>

            <div class="list-box-even--wrapper">

                <?php
                if ($list_header && !empty($list_header)) {
                    ?>
                <div class="list-box--number list-box--number__desktop">
                <span><?php echo esc_attr($row_index); ?></span>
                    <h2><?php echo wp_kses_post($list_header); ?></h2>
                </div>
                    <?php
                } ?>

                <?php
                if ($list_description && !empty($list_description)) {
                    ?>
                <div class="list-box--content">
                    <div class="list-box--para">
                    <?php echo wp_kses_post($list_description); ?>
                    </div>
                </div>
                    <?php
                } ?>

            </div>
        </div>
            <?php
        }
        $row_index++;
    } ?>

    </div>
</section>
    <?php
}
?>
