<?php
/**
 * Website common functions
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

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
/**
 * Add posted time to post listing
 *
 * @return void
 */

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
/**
 * change Author html
 *
 * @return html
 */
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
/**
 * change edit post link
 *
 * @return void
 */
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
/**
 * change html of post thumbnail
 *
 * @return html
 */
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
/**
 * Get header html
 *
 * @param string $classname class name.
 */
function wacoal_page_entry_top($classname)
{
    get_header('files/main-header');
    echo "<div class=\"$classname\" id=\"js-$classname\">\n"; // phpcs:ignore
    get_template_part('template-parts/content-header');
}
/**
 * Get footer html
 */
function wacoal_page_entry_bottom()
{
    get_template_part('template-parts/content-footer');
    echo "</div>\n";
    get_footer('files/main-footer');
}

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
 *
 * @param  int $attachmentId attachment id.
 * @return array $image_src
 */
function wacoal_get_image_src($attachmentId, $size = 'full', $icon = false)
{
    $image_src = wp_get_attachment_image_src($attachmentId, $size, $icon);
    return $image_src[0];
}

/**
 * Get wacoal Image alt
 *
 * @param  int $attachmentId attachment id.
 * @return string $image_alt
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
 *
 * @param  string $content post content.
 * @return string $content
 */
function wacoal_remove_p_tag($content)
{
    $content = str_ireplace('<p>', '', $content);
    $content = str_ireplace('</p>', '', $content);
    return $content;
}

/**
 * Add Menu link class.
 *
 * @param  WP_Post  $item  The current menu item.
 * @param  stdClass $args  An object of wp_nav_menu() arguments.
 * @param  int      $depth Depth of menu item. Used for padding.
 * @return array $atts
 */
function wacoal_add_menu_link_class($atts, $item, $args)
{
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'header-navigation--link';
    } else {
        $atts['class'] = 'footer-links--ul__link';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'wacoal_add_menu_link_class', 1, 3);

/**
 * Add Menu li class.
 *
 * @param  string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
 * @param  WP_Post  $item    The current menu item.
 * @param  stdClass $args    An object of wp_nav_menu() arguments.
 * @param  int      $depth   Depth of menu item. Used for padding.
 * @return array $classes
 */
function wacoal_add_menu_li_class( $classes, $item, $args, $depth )
{

    if ($args->theme_location == 'primary') {
        $classes[] = 'header-navigation--list';
    } else {
        $classes[] = 'footer-links--ul__list';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'wacoal_add_menu_li_class', 10, 4);

/**
 * Add support for svg images.
 *
 * @param  array $file_types file types.
 * @return array $file_types
 */
function wacoal_add_svg_file_types_to_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}
add_action('upload_mimes', 'wacoal_add_svg_file_types_to_uploads');

/**
 * Register Sidebar,Footer Column One,Footer Column two,Footer Column three,Footer Column four widget
 */
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
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
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
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
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
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
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
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );


}
add_action('widgets_init', 'wacoal_widgets_init');


/**
 * Function get all the posts from 'post' post type
 *
 * @param array $args wp query args.
 *
 * @return array|WP_Post
 */
function Wacoal_Query_posts( $args )
{

    $wmag_posts = [];

    $default_args = array(
    'post_type' => array(
    'post',
    ),
    );

    $args = array_merge($default_args, $args);

    $wmag_query = new WP_Query($args);

    foreach ( $wmag_query->posts as $post ) {

        $meta         = Wacoal_get_post_details($post->ID);
        $wmag_posts[] = new Wacoal_Post($post, $meta);
    }

    return $wmag_posts;
}


/**
 * Function to get the post details of provide post id.
 *
 * @param int $wacoal_post_id post id.
 *
 * @return $meta
 */
function Wacoal_get_post_details( int $wacoal_post_id )
{

    $meta = get_post_meta($wacoal_post_id);

    return $meta;
}

/**
 * Function used to return the post published date in New York format.
 *
 * @param  int $wacoal_post_id post id to date in newyork timezone.
 * @return string return date for provided post id.
 */
function wacoal_post_date( $wacoal_post_id )
{

    $post_date = get_the_date('F j, Y g:i a', $wacoal_post_id);
    $date = new DateTime($post_date);
    $wacoal_post_date = $date->format('F j, Y g:i a');
    return $wacoal_post_date;
}

/**
 * Undocumented function
 *
 * @param int $post_id post id to fetch categories.
 *
 * @return array
 */
function wacoal_get_primary_category( $post_id )
{
    $primary_category = null;

    $wpseo_primary_term_cls = new WPSEO_Primary_Term('category', $post_id);
    $wpseo_primary_term     = $wpseo_primary_term_cls->get_primary_term();
    $primary_cat_arr        = get_term($wpseo_primary_term);

    if (! is_wp_error($primary_cat_arr) ) {
        $primary_category = $primary_cat_arr;
    } else {
        $all_categories = get_the_category($post_id);

        if (! empty($all_categories) ) {
            $primary_category = $all_categories[0];
        }
    }

    return $primary_category;
}


 /**
  * Function to create the URL
  *
  * @param  string $url URL.
  * @return string
  */
function Wacoal_Reconstruct_url( $url )
{
    $url_parts           = wp_parse_url($url);
    $url_parts['scheme'] = isset($url_parts['scheme']) ? $url_parts['scheme'] : '';
    $url_parts['host']   = isset($url_parts['host']) ? $url_parts['host'] : '';
    $constructed_url     = $url_parts['scheme'] . '://' . $url_parts['host'] . ( isset($url_parts['path']) ? $url_parts['path'] : '' );

    return $constructed_url;
}



/**
 * Function to create the image with crop points
 *
 * @param array $image Image array.
 * @param int   $width Image size to return.
 * @param array $ratio Image ratio to return.
 *
 * @return string Return the image URL.
 */
function Wacoal_Get_image( $image, $width = null, $ratio = null )
{

    if ($image && ! empty($image) && ! empty($image[0]) ) {


        $url = $image[0];

        $dimention = null;

        if ($image[1] > $image[2] ) {
            $dimention = $image[2];
        } else {
            $dimention = $image[1];
        }

        if (! empty($width) && ! empty($ratio) ) {

            $height = ( $dimention * $ratio[1] ) / $ratio[0];

            $params = array(
            'crop' => '0,0,' . (int) $dimention . 'px,' . (int) $height . 'px',
            'w'    => $width . 'px',
            );

            $url .= '?' . build_query($params);
        } elseif (! empty($width) ) {

            $params = array(
            'w' => $width . 'px',
            );

            $url .= '?' . build_query($params);
        }

        return $url;
    } else {
        return '';
    }
}
/**
 * Function for  pagination
 *
 * @return html Return the pagination html.
 */
function wacoal_paging_nav()
{

    if (is_singular() ) {
        return;
    }

    global $wp_query;

    /**
     * Stop execution if there's only 1 page
    */
    if ($wp_query->max_num_pages <= 1 ) {
        return;
    }


    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /**
     * Add current page to the array
    */
    if ($paged >= 1 ) {
        $links[] = $paged;
    }

    /**
     * Add the pages around the current page to the array
    */
    if ($paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<section class="pagination"><div class="pagination--wrapper"><div class="pagination-box">' . "\n";

    /**
     * Previous Post Link
    */
    // if ( get_previous_posts_link() )
    printf('<div class="pagination-box--btn prev"><a href="%s"><img class="lazyload" data-src="'.esc_url(THEMEURI).'/assets/images/pagination-prev-icon.svg"></a></div>' . "\n", esc_url(get_previous_posts_page_link()));
    echo '<ul class="pagination-box--numbers">';
    /**
     * Link to first page, plus ellipses if necessary
    */
    if (! in_array(1, $links) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li class="nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (! in_array(2, $links) ) {
            echo '<li>…</li>';
        }
    }

    /**
     * Link to current page, plus 2 pages in either direction if necessary
    */
    sort($links);
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li class="nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), esc_attr($link));
    }

    /**
     * Link to last page, plus ellipses if necessary
    */
    if (! in_array($max, $links) ) {
        if (! in_array($max - 1, $links) ) {
            echo '<li class="nav-links">…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li class="nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), esc_attr($max));
    }
    echo '</ul>';
    /**
     * Next Post Link
    */
    if (get_next_posts_link() ) {
        printf('<div class="pagination-box--btn next"><a href="%s"><img class="lazyload" data-src="'.esc_url(THEMEURI).'/assets/images/pagination-next-icon.svg"></a></div>' . "\n", esc_url(get_next_posts_page_link()));
    }

    echo '</div></div></section>' . "\n";
}

 /**
  * Function to remove 2 recent posts from post listing
  *
  * @param  array $query wp_query array
  * @return array $query wp_query array
  */
function wacoal_exclude_posts_from_specific_category( $query )
{

    if (is_admin() || ! $query->is_main_query() ) {
        return;
    }

    if ($query->is_archive() ) {

        $get_cat_ID=get_term_by('slug', $query->query_vars['category_name'], 'category');

        $featured_posts = get_posts(
            array(
            'numberposts' => 2,
            'cat' => $get_cat_ID->term_id,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status'=>'publish'
            )
        );
        foreach( $featured_posts as $featured_post ) {
            $posts_to_exclude[]    = $featured_post->ID;
        }
        $query->set('post__not_in', $posts_to_exclude);
    }

}
add_action('pre_get_posts', 'wacoal_exclude_posts_from_specific_category');

/**
 * Function to enable the taxonomies on pages
 *
 * @return void
 */
function wacoal_add_taxonomies_to_pages()
{
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'wacoal_add_taxonomies_to_pages');
