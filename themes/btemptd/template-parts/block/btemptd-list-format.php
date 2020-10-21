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
        $review_image = $review['image'];
        $review_name  = $review['name'];
        $review_text  = $review['description'];

        if ($key % 2 == 0) {
            ?>
        <div class="reason-box odd">
            <div class="reason-box--content">
                <div  class="reason-box--content__number">
                    <?php echo wp_kses_post($key + 1) . '.'; ?>
                </div>
                <div class="reason-box--content__para">
                    <?php echo wp_kses_post($review_text); ?>
                </div>
            </div>

            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url($review_image); ?>" alt="Article Image" />
            </div>
        </div>
            <?php
        } else { ?>

        <div class="reason-box even">
            <div class="reason-box--content">
                <div  class="reason-box--content__number">
                    <?php echo wp_kses_post($key + 1) . '.'; ?>
                </div>
                <div class="reason-box--content__para">
                    <?php echo wp_kses_post($review_text); ?>
                </div>
            </div>

            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url($review_image); ?>" alt="Article Image" />
            </div>
        </div>

        <?php }
    }
    ?>

    </div>
</section>
