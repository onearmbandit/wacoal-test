<?php
/**
 * Frontend Website common functions
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

/**
 * Frontend Website common functions
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */
class btemptd_Post
{

    /**
     * Constructor which call on each newly-created object
     *
     * @param WP_Post $btemptd_post      wp post array.
     * @param array   $btemptd_post_meta wp post meta.
     */
    public function __construct( $btemptd_post, $btemptd_post_meta )
    {
        $this->btemptd_post      = $btemptd_post;
        $this->btemptd_post_meta = $btemptd_post_meta;
        $this->data              = array();
    }

    /**
     * Magic post data function
     *
     * @return mixed
     */
    public function get_primary_category()
    {
        $primary_category = null;

        if (! isset($this->data['primary_category']) ) {
            $wpseo_primary_term = get_post_meta($this->btemptd_post->ID, '_yoast_wpseo_primary_btemptd-category', true);
            $primary_category   = get_term($wpseo_primary_term);

            if (! is_wp_error($primary_category) ) {
                $this->data['primary_category'] = $primary_category;
            }
        } else {
            $primary_category = $this->data['primary_category'];
        }

        return $primary_category;
    }

    /**
     * Magic post data function
     *
     * @param  string $field name of property called on object.
     * @return mixed
     */
    public function __get( $field )
    {

        $post_properties        = [ 'ID', 'post_title', 'post_name', 'post_type', 'post_date', 'post_status', 'post_excerpt' ];
        $post_meta_text_fields  = [ 'tag_line' ];
        $post_meta_image_fields = [ 'promo_image', ];

        $field_value = null;

        if (in_array($field, $post_properties) ) {
            $field_value = $this->btemptd_post->{$field};
        }

        if (in_array($field, $post_meta_text_fields)
            && array_key_exists($field, $this->btemptd_post_meta)
            && ! empty($this->btemptd_post_meta[ $field ])
        ) {
            $field_value = get_field($field, $this->btemptd_post->ID);
        }

        if (in_array($field, $post_meta_image_fields)
            && array_key_exists($field, $this->btemptd_post_meta)
            && ! empty($this->btemptd_post_meta[ $field ])
        ) {
            $field_value = $this->btemptd_post_meta[ $field ][0];
        }

        if ('primary_category' === $field ) {
            $primany_category = $this->get_primary_category();

            if (! empty($primany_category) ) {
                $field_value = $primany_category->name;
            }
        }

        if ('post_date' === $field ) {
            $field_value = btemptd_post_date($this->btemptd_post->ID);
        }

        return $field_value;
    }

}
