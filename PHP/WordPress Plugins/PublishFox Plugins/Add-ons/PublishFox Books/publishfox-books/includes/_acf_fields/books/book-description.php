<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b681f9fb5408',
	'title' => 'Book Description',
	'fields' => array(
		array(
			'key' => 'field_5b681faa56bef',
			'label' => 'Book Summary',
			'name' => 'tfpf_book_summary',
			'type' => 'textarea',
			'instructions' => 'The book summary has a 250 character limit',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => 250,
			'rows' => '',
			'new_lines' => 'wpautop',
		),
		array(
			'key' => 'field_5b681fd456bf0',
			'label' => 'Book Description',
			'name' => 'tfpf_book_description',
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

?>