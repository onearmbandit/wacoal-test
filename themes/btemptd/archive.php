<?php
/**
 * Single category template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

Btemptd_Page_Entry_top('');

$current_cat_data = get_queried_object();
$current_cat_id   = $current_cat_data->term_id;
$cat_name         = $current_cat_data->name;

?>

<section class="banner-with-background">

<?php if($current_cat_id && !empty($current_cat_id)) : ?>
    <h1 class="banner-with-background--heading"><?php echo esc_attr($cat_name);?></h1>
<?php endif;?>

<?php if(category_description() && !empty(category_description())) :?>
    <p class="banner-with-background--subtitle">
        <?php echo category_description(); ?>
    </p>
<?php endif;?>

</section>

<?php
$template= get_field('template', 'category_'.$current_cat_id);
if ($template == 'simple') :

    $faq_section = get_field('static_section', 'category_'.$current_cat_id);
    error_log('$faq_section'.print_r($faq_section, 1));

    ?>

<section class="full-width-section">
    <?php
    foreach ($faq_section['faq'] as $key => $page_obj) {
        $faq_image_id = $page_obj['image'];
        $faq_image_array = wp_get_attachment_image_src($faq_image_id, 'full');
        $faq_image_alt = Btemptd_Get_Image_alt($faq_image_id, 'Block Image');
        $faq_image_url = Btemptd_Get_Image($faq_image_array);
        $faq_title = $page_obj['title'];
        $faq_ques = $page_obj['question'];

        if ($key % 2 == 0) {
            ?>
    <div class="full-width-section--wrapper">

            <?php if ($faq_image_id && !empty($faq_image_id)) :?>
        <div class="full-width-section--image box-shadow-right">
            <img class="img-fluid" src="<?php echo  esc_url($faq_image_url)?>" />
        </div>
            <?php endif; ?>

        <div class="full-width-section--content">

            <?php if ($faq_title && !empty($faq_title)) :?>
            <div class="content-title">
                <?php echo wp_kses_post($faq_title); ?>
            </div>
            <?php endif; ?>

            <?php if ($faq_ques && !empty($faq_ques)) :?>
            <div class="quote">
                <?php echo wp_kses_post($faq_ques); ?>
            </div>
            <?php endif; ?>

            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
            </div>
        </div>
    </div>
            <?php
        } else {?>

    <div class="full-width-section--wrapper even">

            <?php if ($faq_image_id && !empty($faq_image_id)) :?>
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url($faq_image_url)?>" />
                </div>
            <?php endif; ?>

        <div class="full-width-section--content">
            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
            </div>

            <?php if ($faq_title && !empty($faq_title)) :?>
            <div class="content-title">
                <?php echo wp_kses_post($faq_title); ?>
            </div>
            <?php endif; ?>

            <?php if ($faq_ques && !empty($faq_ques)) :?>
            <div class="quote">
                <?php echo wp_kses_post($faq_ques); ?>
            </div>
            <?php endif; ?>

        </div>
    </div>

        <?php }
    }
    ?>

</section>

<?php endif; ?>
