<?php
/**
 * Template part for displaying footer content
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

$copyright_value = get_field('copyright_text', 'options');
$social_share    = get_field('social_share', 'options');
$oembeded        = get_field('instagram_feeds', 'options');
$subscribe       = get_field('subscribe_link', 'options');
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
            <div class="footer-links--title">Stay Connected</div>
            <div class="footer-subscribe">
                <div class="footer-subscribe--note">
                    New product releases, markdowns and more!
                </div>
                <!-- <div class="footer-subscribe--input">
                    <input class="input-box" type="text" placeholder="Email Address">
                    <button class="input-button">Subscribe</button>
                </div> -->
                <!-- <div class="footer-subscribe--input"> -->
                <?php if(!empty($subscribe)) :?>
                    <form method="post" action="<?php echo esc_url($subscribe);?>" class="">
                        <div class="footer-subscribe--input">
                        <input type="footerEmailAddr" class="input-box" placeholder="user@email.com" name="email" id="footerEmailAddr">
                            <button type="submit" class="input-button"
                                    onclick="javascript:setSubscriptionEmailCookie(document.getElementById('footerEmailAddr').value)">
                                Subscribe
                            </button>
                        </div>
                    </form>
                <?php endif;?>
                <!-- </div> -->
            </div>
            <div class="footer-images">
                <dfiv class="footer-images--title">Instagram</dfiv>
                <iframe src="<?php echo esc_url($oembeded);?>"
                        scrolling="no"
                        allowtransparency="true"
                        class="lightwidget-widget"
                        style="width: 100%; border: 0px; overflow: hidden; height: 81.9px;">
                </iframe>
            </div>
        </div>
    </div>

    <div class="footer-wrapper footer-wrapper--bottom">
        <div class="footer-wrapper--copyright">
            <?php echo wp_kses_post($copyright_value);?>
        </div>

        <div class="footer-social">
                <?php foreach($social_share as $key => $value){ ?>
                   <a href="<?php echo esc_url($value['link']['url']);?>" class="footer-social--icon"
                      target="_blank">
                    <img class="lazyload"
                         data-src="<?php echo esc_url($value['icon']['url']);?>"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         alt="<?php echo esc_attr($value['icon']['alt']);?>" />
                    </a>
                <?php } ?>

            </div>
    </div>
</footer>

<script>

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function removeCookie(name) {
document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

    function setSubscriptionEmailInput() {
        var emailAddrCookie = getCookie("subscriptionEmail");

        if(emailAddrCookie != null){
            removeCookie("emailSignupEmail");
        }
    }
    function setSubscriptionEmailCookie(emailAddr) {
        setCookie("subscriptionEmail", emailAddr);
    }
    setSubscriptionEmailInput();
</script>
