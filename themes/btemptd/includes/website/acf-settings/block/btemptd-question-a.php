<?php
/**
 * Btemptd Questions A acf settings
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
     'key' => 'group_63c648188ade3',
     'title' => 'Btemptd Questions A',
     'fields' => array(
       array(
        'key' => 'field_63c648a5f8be0',
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
          'key' => 'field_63c648d8f8be1',
          'label' => 'List Title',
          'name' => 'list_title',
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
          'key' => 'field_63c648eff8be2',
          'label' => 'List Description',
          'name' => 'list_description',
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
     ),
     'location' => array(
       array(
        array(
         'param' => 'block',
         'operator' => '==',
         'value' => 'acf/btemptd-question-a',
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
