<?php
/**
 * Btemptd video block acf settings
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
    'key' => 'group_60bdda94d3988',
    'title' => 'Btemptd Video Settings',
    'fields' => array(
        array(
            'key' => 'field_60bddab45900a',
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
            'key' => 'field_60bddb1c5900b',
            'label' => 'Select or Add Video',
            'name' => 'select_or_add_video',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bddab45900a',
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
            'key' => 'field_60bddb675900c',
            'label' => 'Embed Video',
            'name' => 'embed_video',
            'type' => 'oembed',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bddab45900a',
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
            'key' => 'field_60bddb8b5900d',
            'label' => 'Insert External Video URL',
            'name' => 'insert_external_video_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_60bddab45900a',
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
            'key' => 'field_60bddbb25900e',
            'label' => 'Video Caption',
            'name' => 'video_caption',
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
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/btemptd-video',
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
