<?php


acf_add_local_field_group(array(
    'key' => 'group_5ae04962b792',
    'title' => 'Extra Facts Fields',
    'fields' => array(
        array(
            'key' => 'field_5ae04c1971c2d',
            'label' => 'Extra Facts',
            'name' => 'gfbp_extra_facts',
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
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ae04c4171c2e',
                    'label' => 'Extra Facts: Text',
                    'name' => 'gfbp_extra_facts_text',
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
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'book',
            ),
        ),
    ),
    'menu_order' => 95,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));