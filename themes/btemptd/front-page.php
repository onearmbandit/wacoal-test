<?php
/**
 * Front page
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

Btemptd_Page_Entry_top('');
$banner_url=get_field('banner', 'option');
$banner_title=get_field('banner_title', 'option');
$banner_subtitle=get_field('banner_subtitle', 'option');
require locate_template('template-parts/front-page.php');

Btemptd_Page_Entry_bottom();
