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
$subscribe = get_field('subscribe_link', 'options');
?>
<footer class="footer-section">
    <div class="footer-wrapper">
        <div class="footer-wrapper--right">
            <div class="footer-subscribe">
                <div class="title">Stay Connected</div>
                <div class="sub-title">New product releases, markdowns and more!</div>
                <?php if(!empty($subscribe)) :?>
                    <form method="post" action="<?php echo esc_url($subscribe);?>">
                        <div class="input-button-wrapper">
                        <input type="footerEmailAddr" placeholder="Email Address" name="email" id="footerEmailAddr">
                            <button type="submit"
                                    onclick="javascript:setSubscriptionEmailCookie(document.getElementById('footerEmailAddr').value)">
                                Subscribe
                            </button>
                        </div>
                    </form>
                <?php endif;?>
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
                <?php echo wp_kses_post(Btemptd_Remove_ptag($copyright_value));?>
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
