<?php
/**
 * Btemptd list template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>

<section class="image-content image-content-gif">
    <div class="image-content--wrapper">
        <?php
        foreach ($list_data as $key => $list) {
            $list_image_id = $list['image'];
            $list_image_array = wp_get_attachment_image_src($list_image_id, 'full');
            $list_image_alt = Btemptd_Get_Image_alt($list_image_id, 'List Image');
            $list_image_url = Btemptd_Get_Image($list_image_array);
            $list_quotes_text = $list['quotes_text'];
            $list_name = $list['name'];
            $add_button = $list['add_button'];
            if ($add_button == true) {
                $button_label = $list['button_text'];
                $button_url = $list['button_url'];
            }
            if ($key % 2 == 0) {
                ?>
        <div class="odd">
                <?php if ($list_image_id && !empty($list_image_id)) :
                    if($add_button && !empty($button_url)) :?>

                <a href="<?php echo esc_url($button_url);?>" target='_blank'>

                    <?php endif;?>
                    <div class="image-content--image">
                        <img class="img-fluid" src="<?php echo  esc_url($list_image_url); ?>"
                        alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                    </div>
                    <?php
                    if($add_button && !empty($button_url)) :?>

                        </a>

                    <?php endif;
                endif; ?>
            <div class="image-content--content">
                    <div class="quote-left">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-left.svg" alt="Image" />
                    </div>
                    <div class="content-inner">
                        <?php if ($list_quotes_text && !empty($list_quotes_text)) :?>
                        <div class="image-content--content__title">
                            <?php echo wp_kses_post($list_quotes_text); ?>
                        </div>
                        <?php endif;
                        if ($list_name && !empty($list_name)) :
                            ?>
                        <div class="image-content--content__tag">
                            <?php echo wp_kses_post($list_name); ?>
                        </div>
                        <?php endif;
                        if ($add_button) :
                            ?>
                        <div class="shop-button">
                            <a class="see-more-button" href="<?php echo esc_url($button_url); ?>">
                                <?php echo wp_kses_post($button_label);?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="quote-right">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-right.svg" alt="Image" />
                    </div>
            </div>
        </div>
                <?php
            } else {
                ?>

        <div class="even">
                <?php if ($list_image_id && !empty($list_image_id)) :
                    if($add_button && !empty($button_url)) :?>

                <a href="<?php echo esc_url($button_url);?>" target='_blank'>

                    <?php endif;?>
                    <div class="image-content--image">
                        <img class="img-fluid" src="<?php echo  esc_url($list_image_url); ?>"
                        alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                    </div>
                    <?php
                    if($add_button && !empty($button_url)) :?>

                </a>

                    <?php endif;
                endif; ?>
            <div class="image-content--content">
                <div class="quote-left">
                    <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-left.svg" alt="Image" />
                </div>
                <div class="content-inner">
                <?php if ($list_quotes_text && !empty($list_quotes_text)) :?>
                    <div class="image-content--content__title">
                    <?php echo wp_kses_post($list_quotes_text); ?>
                    </div>
                <?php endif;
                if ($list_name && !empty($list_name)) :
                    ?>
                    <div class="image-content--content__tag">
                    <?php echo wp_kses_post($list_name); ?>
                    </div>
                <?php endif;
                if ($add_button) :
                    ?>
                    <div class="shop-button">
                    <a class="see-more-button" href="<?php echo esc_url($button_url); ?>">
                        <?php echo wp_kses_post($button_label);?>
                    </a>
                    </div>
                <?php endif; ?>
                </div>
                <div class="quote-right">
                    <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-right.svg" alt="Image" />
                </div>
            </div>
        </div>
                <?php
            }
        }
        ?>
    </div>
</section>
