<?php
/**
 * Custom header settings
 *
 * @package Btemptd
 */
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5f843c8fba133',
        'title' => 'Header Settings',
        'fields' => array(
            array(
                'key' => 'field_5f843cb267c5a',
                'label' => 'Header Logo',
                'name' => 'header_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
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
            // array(
            //     'key' => 'field_5f843e6367c5d',
            //     'label' => 'Header headline',
            //     'name' => 'header_headline',
            //     'type' => 'text',
            //     'instructions' => '',
            //     'required' => 0,
            //     'conditional_logic' => 0,
            //     'wrapper' => array(
            //         'width' => '',
            //         'class' => '',
            //         'id' => '',
            //     ),
            //     'default_value' => '',
            //     'placeholder' => '',
            //     'prepend' => '',
            //     'append' => '',
            //     'maxlength' => '',
            // ),
            array(
                'key' => 'field_5f843e0467c5b',
                'label' => 'Header button text',
                'name' => 'header_button_text',
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
                'placeholder' => 'Enter header button text',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f843e2967c5c',
                'label' => 'Header button link',
                'name' => 'header_button_link',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Enter button link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-header',
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
    ));

    endif;