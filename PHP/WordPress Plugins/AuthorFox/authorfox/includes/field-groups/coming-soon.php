<?php

acf_add_local_field_group(array(
    'key' => 'group_5ae04962b798',
    'title' => 'Coming Soon Fields',
    'fields' => array(
        array(
            'key' => 'field_5aeaf4d4f6d67',
            'label' => 'Coming Soon?',
            'name' => 'authorfox_coming_soon',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'Yes' => 'Yes',
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_5aeaf4ebf6d68',
            'label' => 'Release Date',
            'name' => 'authorfox_release_date',
            'type' => 'date_time_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5aeaf4d4f6d67',
                        'operator' => '==',
                        'value' => 'Yes',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'd/m/Y g:i a',
            'return_format' => 'Y-m-d H:i:s',
            'first_day' => 1,
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
    'menu_order' => 99,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));