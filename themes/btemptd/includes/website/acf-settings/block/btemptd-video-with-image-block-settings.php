<?php
/**
 * Btemptd Video - Vertical block acf settings
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

acf_add_local_field_group(
    array(
    'key' => 'group_60bde3dc9b55f',
    'title' => 'Btemptd Video with Image Settings',
    'fields' => array(
        array(
            'key' => 'field_60d478d7d7ff0',
            'label' => 'Select Video Type',
            'name' => 'select_video_type',
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
                'video_with_image' => 'Video with Image',
                'only_video' => 'Only Video',
            ),
            'default_value' => 'video_with_image',
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_60bde3e60251c',
            'label' => 'Video Option',
            'name' => 'video_option',
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
            'key' => 'field_60bde44a0251d',
            'label' => 'Select or Add Video',
            'name' => 'select_or_add_video',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bde3e60251c',
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
            'key' => 'field_60bde46e0251e',
            'label' => 'Embed Video',
            'name' => 'embed_video',
            'type' => 'oembed',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bde3e60251c',
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
            'key' => 'field_60bde4900251f',
            'label' => 'Insert External Video URL',
            'name' => 'insert_external_video_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bde3e60251c',
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
            'key' => 'field_60bde4b502520',
            'label' => 'Video Caption',
            'name' => 'video_caption',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bde3e60251c',
                        'operator' => '!=',
                        'value' => 'select_option',
                    ),
                ),
            ),
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
            'key' => 'field_60bde4fb02521',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60d478d7d7ff0',
                        'operator' => '==',
                        'value' => 'video_with_image',
                    ),
                ),
            ),
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
            'key' => 'field_60bde52302522',
            'label' => 'Image Caption',
            'name' => 'image_caption',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bde4fb02521',
                        'operator' => '!=empty',
                    ),
                ),
                array(
                    array(
                        'field' => 'field_60d478d7d7ff0',
                        'operator' => '==',
                        'value' => 'video_with_image',
                    ),
                ),
            ),
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
            'key' => 'field_60bde55a02523',
            'label' => 'Image Link',
            'name' => 'image_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bde4fb02521',
                        'operator' => '!=empty',
                    ),
                ),
                array(
                    array(
                        'field' => 'field_60d478d7d7ff0',
                        'operator' => '==',
                        'value' => 'video_with_image',
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
            'key' => 'field_60bde57102524',
            'label' => 'Open Link in New Tab',
            'name' => 'open_link_in_new_tab',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60d478d7d7ff0',
                        'operator' => '==',
                        'value' => 'video_with_image',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/btemptd-video-with-image',
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
