<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b605dc55f961',
	'title' => 'Book Extract',
	'fields' => array(
		array(
			'key' => 'field_5b605f9cf9e84',
			'label' => 'Show Book Extract',
			'name' => 'tfpf_show_book_extract',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5b60608cf9e88',
			'label' => 'Column 1',
			'name' => '',
			'type' => 'column',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'column-type' => '1_2',
		),
		array(
			'key' => 'field_5b605fd0f9e85',
			'label' => 'Book Extract Type',
			'name' => 'tfpf_book_extract_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5b605f9cf9e84',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'PDF File' => 'PDF File',
				'Text' => 'Text',
			),
			'default_value' => array(
				0 => 'PDF File',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5b606096f9e89',
			'label' => 'Column 2',
			'name' => '',
			'type' => 'column',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'column-type' => '1_2',
		),
		array(
			'key' => 'field_5b605ffcf9e86',
			'label' => 'Book Extract File',
			'name' => 'tfpf_book_extract_file',
			'type' => 'file',
			'instructions' => 'Please upload the book extract as a PDF file',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5b605fd0f9e85',
						'operator' => '==',
						'value' => 'PDF File',
					),
					array(
						'field' => 'field_5b605f9cf9e84',
						'operator' => '==',
						'value' => '1',
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
			'mime_types' => '.pdf',
		),
		array(
			'key' => 'field_5b60605df9e87',
			'label' => 'Book Extract Text',
			'name' => 'tfpf_book_extract_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5b605fd0f9e85',
						'operator' => '==',
						'value' => 'Text',
					),
					array(
						'field' => 'field_5b605f9cf9e84',
						'operator' => '==',
						'value' => '1',
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'books',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;