<?php
/**
 * Website common functions
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

/**
 * To ‘ping‘ all the sites that were linked to in your post
 *
 * @return void
 */
function Btemptd_Pingback_header()
{
    if (is_singular() && pings_open() ) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'Btemptd_Pingback_header');
/**
 * Get header html
 *
 * @param string $classname class name.
 *
 * @return html
 */
function Btemptd_Page_Entry_top($classname)
{
    get_header('files/main-header');
    echo "<div class=\"$classname\" id=\"js-$classname\">\n"; // phpcs:ignore
    get_template_part('template-parts/content-header');
}

/**
 * Get footer html
 *
 * @return footer html
 */
function Btemptd_Page_Entry_bottom()
{
    get_template_part('template-parts/content-footer');
    echo "</div>\n";
    get_footer('files/main-footer');
}

/**
 * Get btemptd Image source
 *
 * @param int    $attachmentId attachment id.
 * @param string $size         size of image.
 * @param $icon         icon
 *
 * @return array $image_src
 */
function Btemptd_Get_Image_src($attachmentId, $size = 'full', $icon = false)
{
    $image_src = wp_get_attachment_image_src($attachmentId, $size, $icon);
    return $image_src[0];
}

/**
 * Get btemptd Image alt
 *
 * @param int    $attachmentId attachment id.
 * @param string $default      image default size.
 *
 * @return string $image_alt
 */
function Btemptd_Get_Image_alt($attachmentId, $default = null)
{
    $image_alt = get_post_meta($attachmentId, '_wp_attachment_image_alt', true);
    if ($image_alt == '') {
        $image_alt = $default;
    }
    return $image_alt;
}

/**
 * Btemptd remove p tag from content
 *
 * @param string $content post content.
 *
 * @return string $content
 */
function Btemptd_Remove_ptag($content)
{
    $content = str_ireplace('<p>', '', $content);
    $content = str_ireplace('</p>', '', $content);
    return $content;
}

/**
 * Add Menu link class.
 *
 * @param $atts Attributes.
 * @param $item The current menu item.
 * @param $args An object of wp_nav_menu() arguments.
 *
 * @return array $atts
 */
function Btemptd_Add_Menu_Link_class($atts, $item, $args)
{
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'header-navigation--link';
    } else {
        $atts['class'] = 'footer-links--ul__link';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'Btemptd_Add_Menu_Link_class', 1, 3);

/**
 * Add Menu li class.
 *
 * @param string   $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
 * @param WP_Post  $item    The current menu item.
 * @param stdClass $args    An object of wp_nav_menu() arguments.
 * @param int      $depth   Depth of menu item. Used for padding.
 *
 * @return array $classes
 */
function Btemptd_Add_Menu_Li_class( $classes, $item, $args, $depth )
{

    if ($args->theme_location == 'primary') {
        $classes[] = 'header-navigation--list';
    } else {
        $classes[] = 'footer-links--ul__list';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'Btemptd_Add_Menu_Li_class', 10, 4);

/**
 * Add support for svg images.
 *
 * @param array $file_types file types.
 *
 * @return array $file_types
 */
function Btemptd_Add_Svg_File_Types_To_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}
add_action('upload_mimes', 'Btemptd_Add_Svg_File_Types_To_uploads');

/**
 * Register Sidebar,Footer Column One,Footer Column two,Footer Column three,Footer Column four widget.
 *
 * @return $footer widgets.
 */
function Btemptd_Widgets_init()
{

    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column One', 'btemptd'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'btemptd'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column Two', 'btemptd'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'btemptd'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column Three', 'btemptd'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'btemptd'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Column Four', 'btemptd'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Add widgets here.', 'btemptd'),
        'before_widget' => '<div id="%1$s" class="footer-links %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-links--title">',
        'after_title'   => '</div>',
        )
    );


}
add_action('widgets_init', 'Btemptd_Widgets_init');

/**
 * Function get all the posts from 'post' post type
 *
 * @param array $args wp query args.
 *
 * @return array|WP_Post
 */
function Btemptd_Query_posts( $args )
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

        $meta         = btemptd_get_post_details($post->ID);
        $wmag_posts[] = new btemptd_Post($post, $meta);
    }

    return $wmag_posts;
}

/**
 * Function to get the post details of provide post id.
 *
 * @param int $btemptd_post_id post id.
 *
 * @return $meta
 */
function Btemptd_Get_Post_details( int $btemptd_post_id )
{

    $meta = get_post_meta($btemptd_post_id);

    return $meta;
}

/**
 * Function used to get primary key.
 *
 * @param int $post_id post id to fetch categories.
 *
 * @return array
 */
function Btemptd_Get_Primary_category( $post_id )
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
  * @param string $url URL.
  *
  * @return string Return the URL.
  */
function Btemptd_Reconstruct_url( $url )
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
function Btemptd_Get_image( $image, $width = null, $ratio = null )
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
function Btemptd_Paging_nav()
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
    printf('<div class="pagination-box--btn prev"><a href="%s"><img class="lazyload" data-src="'.esc_url(THEMEURI).'/assets/images/pagination-left-arrow.svg"></a></div>' . "\n", esc_url(get_previous_posts_page_link()));
    echo '<ul class="pagination-box--numbers">';
    /**
     * Link to first page, plus ellipses if necessary
    */
    if (! in_array(1, $links) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li class="nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1'); // phpcs:ignore

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
        printf('<li class="nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), esc_attr($link)); // phpcs:ignore
    }

    /**
     * Link to last page, plus ellipses if necessary
    */
    if (! in_array($max, $links) ) {
        if (! in_array($max - 1, $links) ) {
            echo '<li class="nav-links">…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li class="nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), esc_attr($max)); // phpcs:ignore
    }
    echo '</ul>';
    /**
     * Next Post Link
    */
    if (get_next_posts_link() ) {
        printf('<div class="pagination-box--btn next"><a href="%s"><img class="lazyload" data-src="'.esc_url(THEMEURI).'/assets/images/pagination-right-arrow.svg"></a></div>' . "\n", esc_url(get_next_posts_page_link()));
    }

    echo '</div></div></section>' . "\n";
}

/**
 * Function used to create block category
 *
 * @param $categories $array
 * @param $post       post type
 *
 * @return void
 */
function Btemptd_Block_categories( $categories, $post )
{
    if ($post->post_type !== 'post' ) {
        return $categories;
    }
    $temp = array(
        'slug' => 'btemptd',
        'title' => __('Btemptd category', 'btemptd'),
        'icon'  => 'wordpress',
    );
    $newCategories = array();
    $newCategories[0] = $temp;

    foreach ($categories as $category) {
        $newCategories[] = $category;
    }

    return $newCategories;

}
add_filter('block_categories', 'Btemptd_Block_categories', 10, 2);

/**
 * Function to remove 2 recent posts from post listing
 *
 * @param array $query wp_query array
 *
 * @return array $query wp_query array
 */
function Btemp_Exclude_Posts_From_Specific_category( $query )
{

    if (is_admin() || ! $query->is_main_query() ) {
        return;
    }

    if ($query->is_archive() ) {

        $get_cat_ID = get_term_by('slug', $query->query_vars['category_name'], 'category');
        $cat_ID     = $get_cat_ID->term_id;
        $featured_posts= get_field('featured_posts', 'category_'.$cat_ID);
        $slider_posts= get_field('slider_posts', 'category_'.$cat_ID);

        foreach ( $featured_posts as $featured_post ) {
            $posts_to_exclude[]    = $featured_post;
        }
        foreach ( $slider_posts as $slider_post ) {
            array_push($posts_to_exclude, $slider_post);
        }
        $query->set('post__not_in', $posts_to_exclude);
    }

}
  add_action('pre_get_posts', 'Btemp_Exclude_Posts_From_Specific_category');

/**
 * Function to remove pages from search result
 *
 * @param array $query wp_query array
 *
 * @return array $query wp_query array
 */
function Btemp_Search_filter($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'Btemp_Search_filter');


/**
 * Function for  pagination
 *
 * @return html Return the pagination html.
 */
function Btemptd_Search_Paging_nav()
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

    echo '<div class="search-pagination--wrapper">' . "\n";

    /**
     * Previous Post Link
    */
    if($paged != 1) {
        printf('<div class="search-pagination-box--btn sprev"><a href="%s"><img class="lazyload" data-src="'.esc_url(THEMEURI).'/assets/images/pagination-left-arrow.svg"></a></div>' . "\n", esc_url(get_previous_posts_page_link()));
    }
    echo '<ul class="search-pagination--numbers">';
    /**
     * Link to first page, plus ellipses if necessary
    */
    if (! in_array(1, $links) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li class="search-nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1'); // phpcs:ignore

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
        printf('<li class="search-nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), esc_attr($link)); // phpcs:ignore
    }

    /**
     * Link to last page, plus ellipses if necessary
    */
    if (! in_array($max, $links) ) {
        if (! in_array($max - 1, $links) ) {
            echo '<li class="search-nav-links">…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li class="search-nav-links"><a %s href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), esc_attr($max)); // phpcs:ignore
    }
    echo '</ul>';
    /**
     * Next Post Link
    */
    if (get_next_posts_link() ) {
        printf('<div class="search-pagination-box--btn snext"><a href="%s"><img class="lazyload" data-src="'.esc_url(THEMEURI).'/assets/images/pagination-right-arrow.svg"></a></div>' . "\n", esc_url(get_next_posts_page_link()));
    }

    echo '</div>' . "\n";
}

/**
 * Function to change the serach size.
 *
 * @param array $queryVars query
 *
 * @return html Return the pagination html.
 */
function Btemp_Change_Search_size($queryVars)
{
    if (isset($_REQUEST['s']) ) { // Make sure it is a search page
        $queryVars['posts_per_page'] = 8; // Change 10 to the number of posts you would like to show
    }
    return $queryVars; // Return our modified query variables
}
add_filter('request', 'Btemp_Change_Search_size'); // Hook our custom function onto the request filter

/**
 * Function to off the password autocomplete
 *
 * @return html Return the pagination html.
 */
function Btemp_Login_form()
{
    echo '
<script>
    document.getElementById( "user_pass" ).autocomplete = "off";
    document.getElementById( "user_login" ).autocomplete = "off";
</script> ';

}

add_action('login_form', 'Btemp_Login_form');


/**
 * Btemptd Backend function.
 *
 * @param string $blockName block name.
 *
 * @return void.
 */
function Btemptd_WP_Backend_edit($blockName)
{
    ?>
    <div class="" style="border:2px solid #000">
        <h4 style="text-align:center">
            <u> Edit <?php echo $blockName ?></u>
        </h4>
    </div>
    <?php
}
