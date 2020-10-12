<?php
/**
 * HTML for question answer block
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

<section class="list-format">
    <div class="list-format--wrapper">
    <?php foreach ($block_lists as $key => $list) {
        $list_image_url = $list['image'];
        $list_heading = $list['list_heading'];
        $list_subheading_1 = $list['list_subheading_1'];
        $list_subheading_2 = $list['list_subheading_2'];
        $list_desc = $list['description'];

        if ($key % 2 == 0) {
            ?>
        <div class="list list-odd-order">
            <?php
            if ($list_image_url && !empty($list_image_url)) {
                ?>
            <div class="list--image list--image__desktop">
                <img class="lazyload" data-src="<?php echo  esc_url($list_image_url) ?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="List Image" />
            </div>
                <?php
            } ?>
            <div class="list--content">
                <?php
                if ($list_heading && !empty($list_heading)) {
                    ?>
                <div class="list--content__heading">
                    <?php echo wp_kses_post($list_heading); ?>
                </div>
                    <?php
                }

                if ($list_subheading_1 && !empty($list_subheading_1)) {
                    ?>
                <div class="list--content__subheading-one">
                    <?php echo wp_kses_post($list_subheading_1); ?>
                </div>
                    <?php
                }

                if ($list_subheading_2 && !empty($list_subheading_2)) {
                    ?>
                <div class="list--content__subheading-two">
                    <?php echo wp_kses_post($list_subheading_2); ?>
                </div>
                    <?php
                }

                if ($list_image_url && !empty($list_image_url)) {
                    ?>
                <div class="list--image list--image__mobile">
                    <img class="lazyload" data-src="<?php echo  esc_url($list_image_url) ?>"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="List Image" />
                </div>
                    <?php
                }

                if ($list_desc && !empty($list_desc)) {
                    ?>
                <div class="list--content__para">
                    <?php echo wp_kses_post($list_desc); ?>
                </div>
                    <?php
                } ?>

            </div>
        </div>
            <?php
        } elseif ($key % 2 == 1) {
            ?>

        <div class="list list-even-order">
            <?php
            if ($list_image_url && !empty($list_image_url)) {
                ?>
            <div class="list--image list--image__desktop">
                <img class="lazyload" data-src="<?php echo  esc_url($list_image_url) ?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="List Image" />
            </div>
                <?php
            } ?>
                        <div class="list--content">
                <?php
                if ($list_heading && !empty($list_heading)) {
                    ?>
                <div class="list--content__heading">
                    <?php echo wp_kses_post($list_heading); ?>
                </div>
                    <?php
                }

                if ($list_subheading_1 && !empty($list_subheading_1)) {
                    ?>
                <div class="list--content__subheading-one">
                    <?php echo wp_kses_post($list_subheading_1); ?>
                </div>
                    <?php
                }

                if ($list_subheading_2 && !empty($list_subheading_2)) {
                    ?>
                <div class="list--content__subheading-two">
                    <?php echo wp_kses_post($list_subheading_2); ?>
                </div>
                    <?php
                }


                if ($list_image_url && !empty($list_image_url)) {
                    ?>
                <div class="list--image list--image__mobile">
                    <img class="lazyload" data-src="<?php echo  esc_url($list_image_url) ?>"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="List Image" />
                </div>
                    <?php
                }

                if ($list_desc && !empty($list_desc)) {
                    ?>
                <div class="list--content__para">
                    <?php echo wp_kses_post($list_desc); ?>
                </div>
                    <?php
                } ?>

            </div>
        </div>
            <?php
        }
    } ?>

</section>
    <?php
}
?>
