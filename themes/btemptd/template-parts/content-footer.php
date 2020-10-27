<?php
/**
 * Template part for displaying footer content
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

$copyright_value = get_field('copyright_text', 'options');
$social_share = get_field('social_share', 'options');
$oembeded = get_field('instagram_feeds', 'options');
$subscribe = get_field('subscribe_link', 'options');
?>
<footer class="footer-section">
    <div class="footer-wrapper">
        <div class="footer-wrapper--right">
            <!-- <?php if(!empty($subscribe)):?> -->
            <!-- <form method="post" action="<?php echo $subscribe;?>">
                <div class="footer-subscribe">
                    <input type="text" placeholder="Email Address"><button type="submit">subscribe</button>
                </div>
            </form> -->
            <!-- <?php endif;?> -->

            <div class="footer-subscribe">
                <div class="title">Stay Connected</div>
                <div class="sub-title">New product releases, markdowns and more!</div>
                <div class="input-button-wrapper">
                    <input type="text" placeholder="Email Address">
                    <button type="submit">
                        <img src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/subscribe-arrow.svg" />
                    </button>
                </div>
            </div>
        </div>
        <div class="footer-wrapper--left">

            <?php dynamic_sidebar('footer-1');?>
            <?php dynamic_sidebar('footer-2');?>
            <?php dynamic_sidebar('footer-3');?>
            <?php dynamic_sidebar('footer-4');?>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="footer-wrapper">
            <div class="footer-wrapper--copyright">
                <?php echo Btemptd_Remove_ptag($copyright_value);?>
            </div>
            <div class="footer-social">
                <?php foreach($social_share as $key => $value):
                    ?>
                    <a href="<?php echo esc_url($value['link']);?>" class="footer-social--icon" target="_blank">
                        <img class="lazyload" data-src="<?php echo esc_url(wp_get_attachment_url($value['image']));?>" alt="" />
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>
