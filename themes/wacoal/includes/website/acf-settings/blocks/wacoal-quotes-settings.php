<?php
/**
 * Wacoal quotes acf settings
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
    'key' => 'group_5f74801fd9ad1',
    'title' => 'Wacoal Quotes Settings',
    'fields' => array(
        array(
            'key' => 'field_5fca05d6b271b',
            'label' => 'Select Quotes Type',
            'name' => 'select_quotes_type',
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
                'quotes_with_image' => 'Quotes with image',
                'quotes_with_text' => 'Quotes with text',
                'quotes_with_progress_bar' => 'Quotes with progress bar',
            ),
            'default_value' => 'quotes_with_image',
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_5f74802bd8869',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'instructions' => 'Select image',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5fca05d6b271b',
                        'operator' => '==',
                        'value' => 'quotes_with_image',
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
            'key' => 'field_5f9fd5b63775c',
            'label' => 'Image Link',
            'name' => 'image_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5fca05d6b271b',
                        'operator' => '==',
                        'value' => 'quotes_with_image',
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
            'key' => 'field_5f74806cd886a',
            'label' => 'Quote Text',
            'name' => 'quote_text',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5fca05d6b271b',
                        'operator' => '==',
                        'value' => 'quotes_with_image',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => 'quotes_content',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'content_toolbar',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_5fd8735e592f4',
            'label' => 'Person Name',
            'name' => 'person_name',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => 'quotes_content',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_5fca08621aab3',
            'label' => 'Quotes with text',
            'name' => 'quotes_with_text',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5fca05d6b271b',
                        'operator' => '==',
                        'value' => 'quotes_with_text',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_5fca08791aab4',
                    'label' => 'Quotes Block Title',
                    'name' => 'quotes_block_title',
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
                    'key' => 'field_5fca089b1aab5',
                    'label' => 'Quotes Block Content',
                    'name' => 'quotes_block_content',
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
                    'key' => 'field_5fca08c11aab6',
                    'label' => 'Quotes Text',
                    'name' => 'quotes_text',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => 'quotes_content',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'content_toolbar',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_5fd873c8592f5',
                    'label' => 'Person Name',
                    'name' => 'person_name',
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
            ),
        ),
        array(
            'key' => 'field_5fca09651aab7',
            'label' => 'Quotes with Progress Bar',
            'name' => 'quotes_with_progress_bar',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5fca05d6b271b',
                        'operator' => '==',
                        'value' => 'quotes_with_progress_bar',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_5fca098b1aab8',
                    'label' => 'Quotes Block Title',
                    'name' => 'quotes_block_title',
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
                    'key' => 'field_5fca0a0e1aaba',
                    'label' => 'Quotes Block Paragraph Content',
                    'name' => 'quotes_block_paragraph_content',
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
                    'key' => 'field_5fca09db1aab9',
                    'label' => 'Quotes Text 1',
                    'name' => 'quotes_text_1',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => 'quotes_content',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'content_toolbar',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_5fd8742a592f6',
                    'label' => 'Quote 1 Person Name',
                    'name' => 'quote_1_person_name',
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
                    'key' => 'field_5fca0a491aabb',
                    'label' => 'Progress Bar',
                    'name' => 'progress_bar',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5fca0a941aabc',
                            'label' => 'Progress Bar Text',
                            'name' => 'progress_bar_text',
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
                ),
                array(
                    'key' => 'field_5fca0ad11aabd',
                    'label' => 'Quotes Text 2',
                    'name' => 'quotes_text_2',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => 'quotes_content',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'content_toolbar',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_5fd87447592f7',
                    'label' => 'Quote 2 Person Name',
                    'name' => 'quote_1_person_name',
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
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/wacoal-quotes',
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

