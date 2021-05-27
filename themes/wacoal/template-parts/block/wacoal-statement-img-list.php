<?php
/**
 * Html for subhead with description
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php if ($block_lists && !empty($block_lists)) {
    ?>
<section class="list-statment-image">

    <?php foreach ($block_lists as $key => $list) {
        $list_img_id         = $list['image'];
        $list_title          = $list['title'];
        $list_statement_word = $list['statement_word'];
        $list_desc           = $list['description'];

        if (! empty($list_img_id) && $list_img_id ) {
            $list_image_array = wp_get_attachment_image_src($list_img_id, 'full');
            $list_image_alt   = Wacoal_Get_Image_alt($list_img_id, 'Block Image');
            $list_image_url   = Wacoal_Get_image($list_image_array);
        }

        if ($key % 2 == 0) {
            ?>
    <div class="list-statment-image--wrapper">
        <div class="list-statment-image--inner">
            <div class="list-statment-image--content">
            <?php if($list_statement_word && !empty($list_statement_word)) :?>
                <h3 class="title"><?php echo wp_kses_post($list_statement_word);?></h3>
            <?php endif;?>

            <?php if($list_title && !empty($list_title)) :?>
                <h2 class="title-sub"><?php echo Wacoal_Remove_P_tag(wp_kses_post($list_title));?></h2>
            <?php endif;?>

            <?php if($list_desc && !empty($list_desc)) :?>
                <div class="content">
                    <?php echo wp_kses_post($list_desc);?>
                </div>
            <?php endif;?>

            </div>

            <?php if($list_img_id && !empty($list_img_id)) :?>
                <div class="list-statment-image--img" style="background-image:url(<?php echo esc_url($list_image_url); ?>">
                </div>
            <?php endif;?>
        </div>
    </div>
            <?php
        } elseif ($key % 2 == 1) {
            ?>
    <div class="list-statment-image--wrapper">
        <div class="list-statment-image--inner">
            <div class="list-statment-image--content">

            <?php if($list_statement_word && !empty($list_statement_word)) :?>
                <h3 class="title"><?php echo wp_kses_post($list_statement_word);?></h3>
            <?php endif;?>

            <?php if($list_title && !empty($list_title)) :?>
                <h2 class="title-sub"><?php echo Wacoal_Remove_P_tag(wp_kses_post($list_title));?></h2>
            <?php endif;?>

            <?php if($list_desc && !empty($list_desc)) :?>
                <div class="content">
                    <?php echo wp_kses_post($list_desc);?>
                </div>
            <?php endif;?>

            </div>

            <?php if($list_img_id && !empty($list_img_id)) :?>
                <div class="list-statment-image--img" style="background-image:url(<?php echo esc_url($list_image_url); ?>">
                </div>
            <?php endif;?>

        </div>
    </div>
            <?php
        }
    } ?>
</section>

<?php } ?>
