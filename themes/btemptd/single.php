<?php
/**
 * Single post to collect all data
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

btemptd_page_entry_top('');
?>

        <?php
        while ( have_posts() ) :
            the_post();
            include locate_template('template-parts/content-post.php');

        endwhile;
        ?>

<?php
btemptd_page_entry_bottom();
