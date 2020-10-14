<?php
/**
 * Frontend Website common functions
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

/**
 * Frontend Website common functions
 */
class Wacoal_Post
{

    /**
     * Constructor which call on each newly-created object
     *
     * @param WP_Post $wacoal_post      wp post array.
     * @param array   $wacoal_post_meta wp post meta.
     */
    public function __construct( $wacoal_post, $wacoal_post_meta )
    {
        $this->wacoal_post      = $wacoal_post;
        $this->wacoal_post_meta = $wacoal_post_meta;
        $this->data           = array();
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
            $wpseo_primary_term = get_post_meta($this->wacoal_post->ID, '_yoast_wpseo_primary_wacoal-category', true);
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
            $field_value = $this->wacoal_post->{$field};
        }

        if (in_array($field, $post_meta_text_fields)
            && array_key_exists($field, $this->wacoal_post_meta)
            && ! empty($this->wacoal_post_meta[ $field ])
        ) {
            $field_value = get_field($field, $this->wacoal_post->ID);
        }

        if (in_array($field, $post_meta_image_fields)
            && array_key_exists($field, $this->wacoal_post_meta)
            && ! empty($this->wacoal_post_meta[ $field ])
        ) {
            $field_value = $this->wacoal_post_meta[ $field ][0];
        }

        if ('primary_category' === $field ) {
            $primany_category = $this->get_primary_category();

            if (! empty($primany_category) ) {
                $field_value = $primany_category->name;
            }
        }

        if ('post_date' === $field ) {
            $field_value = Wacoal_Post_date($this->wacoal_post->ID);
        }

        return $field_value;
    }

}
