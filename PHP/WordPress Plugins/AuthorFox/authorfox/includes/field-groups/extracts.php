<?php


acf_add_local_field_group(array(
    'key' => 'group_5ae04962b795',
    'title' => 'Extract Fields',
    'fields' => array(
        array(
            'key' => 'field_5ae04c9571c2f',
            'label' => 'Extract Type',
            'name' => 'authorfox_extract_type',
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
            'default_value' => '',
            'layout' => 'vertical',
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_5ae04de48faf3',
            'label' => 'Extract Type: PDF',
            'name' => 'authorfox_extract_type_pdf',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ae04c9571c2f',
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
            'key' => 'field_5ae04e058faf4',
            'label' => 'Extract Type: Text',
            'name' => 'authorfox_extract_type_text',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ae04c9571c2f',
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
            'key' => 'field_5ae09aa00e614',
            'label' => 'Extract Type: Link',
            'name' => 'authorfox_extract_type_link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ae04c9571c2f',
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
    'menu_order' => 96,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));