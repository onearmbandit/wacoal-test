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
        <div class="footer-wrapper--left">

            <?php dynamic_sidebar('footer-1');?>
            <?php dynamic_sidebar('footer-2');?>
            <?php dynamic_sidebar('footer-3');?>
            <?php dynamic_sidebar('footer-4');?>
        </div>
        <div class="footer-wrapper--right">
            <?php if(!empty($subscribe)):?>
            <form method="post" action="<?php echo esc_url($subscribe);?>">
                <div class="footer-subscribe">
                    <input type="footerEmailAddr" placeholder="Email Address" name="email" id="footerEmailAddr">
                        <button type="submit"
                        onclick="javascript:setSubscriptionEmailCookie(document.getElementById('footerEmailAddr').value)"
                        >subscribe</button>
                </div>
            </form>
            <?php endif;?>
            <div class="footer-images">
                <iframe src="<?php echo esc_url($oembeded);?>" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0px; overflow: hidden; height: 81.9px;"></iframe>
            </div>


            <div class="footer-social">
                <?php foreach($social_share as $key => $value): ?>
                    <a href="<?php echo esc_url($value['link']);?>" class="footer-social--icon" target="_blank">
                        <img class="lazyload" data-src="<?php echo esc_url(wp_get_attachment_url($value['image']));?>" alt="" />
                    </a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="footer-wrapper">
        <div class="footer-wrapper--copyright">
            <?php echo wp_kses_post(Btemptd_Remove_ptag($copyright_value));?>
        </div>
    </div>
</footer>
