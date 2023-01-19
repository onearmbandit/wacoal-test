<?php
/**
 * Btemptd Questions B acf settings
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
  'key' => 'group_63c654ed53f83',
  'title' => 'Btemptd Questions B',
  'fields' => array(
   array(
    'key' => 'field_63c65517fca28',
    'label' => 'List',
    'name' => 'list_data',
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
    'layout' => 'row',
    'button_label' => '',
    'sub_fields' => array(
     array(
      'key' => 'field_63c6553c9be5f',
      'label' => 'Title',
      'name' => 'title',
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
      'key' => 'field_63c655479be60',
      'label' => 'Description',
      'name' => 'description',
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
   ),
   array(
    'key' => 'field_63c661dac6224',
    'label' => 'Image Position',
    'name' => 'image_position',
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
     'left' => 'Image Left',
     'right' => 'Image Right',
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
    'key' => 'field_63c66211c6225',
    'label' => 'Image',
    'name' => 'image',
    'type' => 'image',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
     'width' => '',
     'class' => '',
     'id' => '',
    ),
    'return_format' => 'array',
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
  ),
  'location' => array(
   array(
    array(
     'param' => 'block',
     'operator' => '==',
     'value' => 'acf/btemptd-question-b',
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
  'show_in_rest' => 0,
 )
);
