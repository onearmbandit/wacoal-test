<?php
/**
 * Wacoal size chart table template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<section class="full-width-container--wrapper">
        <?php
        foreach ($chart_images as $chart) {
            $chart_image_id     = $chart['chart_image'];
            $chart_image_array  = wp_get_attachment_image_src($chart_image_id, 'full');
            $chart_image_alt    = wacoal_get_image_alt($chart_image_id, 'Block Image');
            $chart_image_url    = Wacoal_Get_image($chart_image_array);
            ?>
        <!-- <div class="full-width-container--image"> -->
        <div class="full-width--chart">
            <figure>
                <?php if ($chart_image_id && !empty($chart_image_id)) {
                    ?>
                <img class="lazyload" data-src="<?php echo esc_url($chart_image_url); ?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                alt="<?php echo wp_kses_post($chart_image_alt); ?>"
                    style="max-width:100%"/>
                    <?php
                } ?>
            </figure>
        </div>
            <?php
        }
        ?>
</section>
