<?php
/**
 * Custom customer review settings
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

acf_add_local_field_group(
    array(
    'key' => 'group_6088002759dce',
    'title' => 'Wacoal Customer Review Block Settings',
    'fields' => array(
        array(
            'key' => 'field_60880059ac488',
            'label' => 'Review Text',
            'name' => 'review_text',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_6088006aac489',
            'label' => 'Reviewer Name',
            'name' => 'reviewer_name',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_60880079ac48a',
            'label' => 'Star Rating Number',
            'name' => 'star_rating_number',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/wacoal-customer-review-format',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    )
);
