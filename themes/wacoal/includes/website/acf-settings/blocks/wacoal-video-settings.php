<?php
/**
 * Wacoal video acf settings
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
    'key' => 'group_5f80011db448a',
    'title' => 'Wacoal Video Settings',
    'fields' => array(
        array(
            'key' => 'field_5f800127f135d',
            'label' => 'Video Option',
            'name' => 'video',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'select_option' => 'Select Option',
                'video_file' => 'Select or Add Video',
                'embed_video' => 'Embed Video',
                'external_url' => 'External Video URL',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_5f800151f135e',
            'label' => 'Select or Add Video',
            'name' => 'select_or_add_video',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f800127f135d',
                        'operator' => '==',
                        'value' => 'video_file',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_5f80019df135f',
            'label' => 'Embed Video',
            'name' => 'embed_video',
            'type' => 'oembed',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f800127f135d',
                        'operator' => '==',
                        'value' => 'embed_video',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'width' => '',
            'height' => '',
        ),
        array(
            'key' => 'field_5f8001c0f1360',
            'label' => 'Insert External Video URL',
            'name' => 'insert_external_video_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f800127f135d',
                        'operator' => '==',
                        'value' => 'external_url',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_5f8001e8f1361',
            'label' => 'Video Caption',
            'name' => 'video_caption',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f800127f135d',
                        'operator' => '!=',
                        'value' => 'select_option',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => 'video_cap',
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
                'value' => 'acf/wacoal-video',
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


