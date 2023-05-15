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
  'key' => 'group_63c6661c2d9bc',
  'title' => 'Btemptd To',
  'fields' => array(
   array(
    'key' => 'field_63c669c91acf2',
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
    'key' => 'field_63c669d11acf3',
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
  'location' => array(
   array(
    array(
     'param' => 'block',
     'operator' => '==',
     'value' => 'acf/btemptd-to',
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
