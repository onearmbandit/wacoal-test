<?php
/**
 * Wacoal video image acf settings
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
    'key' => 'group_5f7eff023f3f8',
    'title' => 'Wacoal Video with image Settings',
    'fields' => array(
        array(
            'key' => 'field_5f7f0618e8e62',
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
            'key' => 'field_5f7f06b4e8e63',
            'label' => 'Select or Add Video',
            'name' => 'select_or_add_video',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f7f0618e8e62',
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
            'key' => 'field_5f7f0727e8e64',
            'label' => 'Embed Video',
            'name' => 'embed_video',
            'type' => 'oembed',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f7f0618e8e62',
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
            'key' => 'field_5f80009ae0f21',
            'label' => 'Insert External Video URL',
            'name' => 'insert_external_video_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f7f0618e8e62',
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
            'key' => 'field_5f7f20249dc95',
            'label' => 'Video Caption',
            'name' => 'video_caption',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f7f0618e8e62',
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
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_5f7f08842a46e',
            'label' => 'Add Image',
            'name' => 'add_image',
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
            'key' => 'field_5f7f14156c5c1',
            'label' => 'Image Caption',
            'name' => 'image_caption',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5f7f08842a46e',
                        'operator' => '!=empty',
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
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/wacoal-video-with-image',
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
