<?php
/**
 * Wacoal reminder block acf settings
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
    'key' => 'group_5fc9fd3cacb45',
    'title' => 'Wacoal Reminder Block Settings',
    'fields' => array(
        array(
            'key' => 'field_5fc9fdb79badc',
            'label' => 'Add Reminder Symbol',
            'name' => 'add_reminder_symbol',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_5fc9fe179badd',
            'label' => 'Add Reminder Text',
            'name' => 'add_reminder_text',
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
                'value' => 'acf/wacoal-reminder-block',
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
