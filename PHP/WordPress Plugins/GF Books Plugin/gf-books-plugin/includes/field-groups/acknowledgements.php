<?php

acf_add_local_field_group(array(
    'key' => 'group_5ae04962b796',
    'title' => 'Acknowledgement Fields',
    'fields' => array(
        array(
            'key' => 'field_5ae04d0071c30',
            'label' => 'Acknowledgements Type',
            'name' => 'gfbp_acknowledgements_type',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'PDF' => 'PDF',
                'Text' => 'Text',
                'Link' => 'Link',
            ),
            'allow_null' => 1,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'No',
            'layout' => 'vertical',
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_5ae04e3b8faf5',
            'label' => 'Acknowledgements Type: PDF',
            'name' => 'gfbp_acknowledgements_type_pdf',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ae04d0071c30',
                        'operator' => '==',
                        'value' => 'PDF',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_5ae04e518faf6',
            'label' => 'Acknowledgements Type: Text',
            'name' => 'gfbp_acknowledgements_type_text',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ae04d0071c30',
                        'operator' => '==',
                        'value' => 'Text',
                    ),
                ),
            ),
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
        array(
            'key' => 'field_5ae09ab20e615',
            'label' => 'Acknowledgements Type: Link',
            'name' => 'gfbp_acknowledgements_type_link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ae04d0071c30',
                        'operator' => '==',
                        'value' => 'Link',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
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
    'menu_order' => 97,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));