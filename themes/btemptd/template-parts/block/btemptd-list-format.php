<?php
/**
 * Btemptd review list template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>

<section class="three-reason">
    <div class="three-reason--wrapper">

    <?php
    foreach ($block_lists as $key => $review) {
        $review_image_id = $review['image'];
        $review_image_array = wp_get_attachment_image_src($review_image_id, 'full');
        $review_image_alt = Btemptd_Get_Image_alt($review_image_id, 'Review Image');
        $review_image_url = Btemptd_Get_Image($review_image_array);
        $review_name  = $review['name'];
        $review_text  = $review['description'];

        if ($key % 2 == 0) {
            ?>
        <div class="reason-box odd">
            <div class="reason-box--content box-shadow-right">
                <div  class="reason-box--content__number">
                    <?php echo wp_kses_post($key + 1) . '.'; ?>
                </div>

                <?php if($review_text && !empty($review_text)) :?>
                <div class="reason-box--content__para">
                    <?php echo wp_kses_post($review_text); ?>
                </div>
                <?php endif;?>

            </div>

            <?php if($review_image_id && !empty($review_image_id)) :?>
            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url($review_image_url); ?>" alt="<?php echo esc_attr($review_image_alt);?>" />
            </div>
            <?php endif;?>

        </div>
            <?php
        } else { ?>

        <div class="reason-box even">
            <div class="reason-box--content box-shadow-right">
                <div  class="reason-box--content__number">
                    <?php echo wp_kses_post($key + 1) . '.'; ?>
                </div>

                <?php if($review_text && !empty($review_text)) :?>
                <div class="reason-box--content__para">
                    <?php echo wp_kses_post($review_text); ?>
                </div>
                <?php endif; ?>

            </div>

            <?php if($review_image_id && !empty($review_image_id)) :?>
            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url($review_image_url); ?>" alt="<?php echo esc_attr($review_image_alt);?>" />
            </div>
            <?php endif;?>
        </div>

        <?php }
    }
    ?>

    </div>
</section>
