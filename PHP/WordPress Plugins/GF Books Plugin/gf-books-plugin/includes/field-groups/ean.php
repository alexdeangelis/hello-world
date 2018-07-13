<?php

acf_add_local_field_group(array(
    'key' => 'group_5ae04962b7864',
    'title' => 'EAN Fields',
    'fields' => array(
        array(
            'key' => 'field_5ae04a9171c26',
            'label' => 'EAN',
            'name' => 'gfbp_ean',
            'type' => 'number',
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
            'min' => '',
            'max' => '',
            'step' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'book',
            ),
        ),
    ),
    'menu_order' => 98,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));