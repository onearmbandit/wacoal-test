<?php
/**
 * ACF settings for subhead with description settings
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
    'key' => 'group_5f757fe698d71',
    'title' => 'Wacoal Subhead with Description Settings',
    'fields' => array(
        array(
            'key' => 'field_5f757ff68e119',
            'label' => 'Title or Subhead',
            'name' => 'title_or_subhead',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => 'paragraph_content',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'content_toolbar',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_5f7580988e11a',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => 'paragraph_content',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'content_toolbar',
            'media_upload' => 1,
            'delay' => 0,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/wacoal-subhead-description',
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
