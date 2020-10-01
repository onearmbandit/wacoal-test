<?php
/**
 * Website common functions
 *
 * @package Wacoal
 */

/**
 * Function used to add the body classes
 *
 * @param array $classes body classes.
 */
function wacoal_body_classes( $classes )
{
    if (! is_singular() ) {
        $classes[] = 'hfeed';
    }

    if (! is_active_sidebar('sidebar-1') ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'wacoal_body_classes');

/**
 * To ‘ping‘ all the sites that were linked to in your post
 *
 * @return void
 */
function wacoal_pingback_header()
{
    if (is_singular() && pings_open() ) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'wacoal_pingback_header');

if (!function_exists('wacoal_posted_on')) {

    function wacoal_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            esc_html_x('Posted on %s', 'post date', 'wacoal'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore

    }
};

if (!function_exists('wacoal_posted_by')) {

    function wacoal_posted_by()
    {
        $byline = sprintf(
            esc_html_x('by %s', 'post author', 'wacoal'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore

    }
};

if (!function_exists('wacoal_entry_footer')) {

    function wacoal_entry_footer()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {

            $categories_list = get_the_category_list(esc_html__(', ', 'wacoal'));
            if ($categories_list) {
                printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'wacoal') . '</span>', $categories_list); // phpcs:ignore
            }

            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'wacoal'));
            if ($tags_list) {
                printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'wacoal') . '</span>', $tags_list); // phpcs:ignore
            }
        }

        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'wacoal'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    __('Edit <span class="screen-reader-text">%s</span>', 'wacoal'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
};

if (!function_exists('wacoal_post_thumbnail')) {

    function wacoal_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>

<div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
</div><!-- .post-thumbnail -->

<?php else : ?>

<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
    <?php
        the_post_thumbnail(
            'post-thumbnail', array(
            'alt' => the_title_attribute(
                array(
                'echo' => false,
                )
            ),
            )
        );
    ?>
</a>

    <?php
endif; // End is_singular().
    }
};

function wacoal_page_entry_top($classname)
{
    get_header('files/main-header');
    echo "<div class=\"$classname\" id=\"js-$classname\">\n"; // phpcs:ignore
    get_template_part('template-parts/content-header');
}

function wacoal_page_entry_bottom()
{
    get_template_part('template-parts/content-footer');
    echo "</div>\n";
    get_footer('files/main-footer');
}

/**
 * Remove admin bar from fontend
*/
add_filter('show_admin_bar', '__return_false');

/**
 * ACF get fields of page by PageId
 */
function wacoal_get_page_acf_fields($pageId)
{
    $fields = get_fields($pageId);
    return $fields;
}

/**
 * Get wacoal Image source
 */
function wacoal_get_image_src($attachmentId, $size = 'full', $icon = false)
{
    $image_src = wp_get_attachment_image_src($attachmentId, $size, $icon);
    return $image_src[0];
}

/**
 * Get wacoal Image alt
 */
function wacoal_get_image_alt($attachmentId, $default = null)
{
    $image_alt = get_post_meta($attachmentId, '_wp_attachment_image_alt', true);
    if ($image_alt == '') {
        $image_alt = $default;
    }
    return $image_alt;
}

/**
 * wacoal remove p tag from content
 */
function wacoal_remove_p_tag($content)
{
    $content = str_ireplace('<p>', '', $content);
    $content = str_ireplace('</p>', '', $content);
    return $content;
}

/**
 * Add Menu link class.
 */
function wacoal_add_menu_link_class($atts, $item, $args)
{
    if($args->theme_location == 'primary') {
        $atts['class'] = 'header-navigation--link';
    }else{
        $atts['class'] = 'footer-links--ul__link';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'wacoal_add_menu_link_class', 1, 3);

/**
 * Add Menu li class.
 */
function wacoal_add_menu_li_class( $classes, $item, $args, $depth )
{

    if($args->theme_location == 'primary') {
        $classes[] = 'header-navigation--list';
    }else{
        $classes[] = 'footer-links--ul__list';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'wacoal_add_menu_li_class', 10, 4);

/**
 * Add support for svg images.
 */
function wacoal_add_svg_file_types_to_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}
add_action('upload_mimes', 'wacoal_add_svg_file_types_to_uploads');


function wacoal_widgets_init()
{
    register_sidebar(
        array(
        'name' => esc_html__('Sidebar', 'wacoal'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'wacoal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column One', 'wacoal'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'wacoal'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column Two', 'wacoal'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'wacoal'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column Three', 'wacoal'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'wacoal'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column Four', 'wacoal'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Add widgets here.', 'wacoal'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">', //You can change class/id here
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );


}
add_action('widgets_init', 'wacoal_widgets_init');
