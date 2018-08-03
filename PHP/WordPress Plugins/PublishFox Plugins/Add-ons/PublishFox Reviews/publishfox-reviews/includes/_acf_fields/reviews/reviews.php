<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b60385f6bc7f',
	'title' => 'Review Details',
	'fields' => array(
		array(
			'key' => 'field_5b6038698e691',
			'label' => 'Review Author',
			'name' => 'tfpf_review_author',
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
			'key' => 'field_5b60398f8e694',
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
			'key' => 'field_5b6038a28e692',
			'label' => 'Review Type',
			'name' => 'tfpf_review_type',
			'type' => 'select',
			'instructions' => 'Choose what type of review this is. You can select between a book review & an author review',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Book Review' => 'Book Review',
				'Author Review' => 'Author Review',
			),
			'default_value' => array(
				0 => 'Book Review',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5b6039988e695',
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
			'key' => 'field_5b6038ca8e693',
			'label' => 'Associated Book',
			'name' => 'tfpf_associated_book',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5b6038a28e692',
						'operator' => '==',
						'value' => 'Book Review',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'books',
			),
			'taxonomy' => array(
			),
			'filters' => array(
				0 => 'search',
			),
			'elements' => '',
			'min' => '',
			'max' => 1,
			'return_format' => 'object',
		),
		array(
			'key' => 'field_5b6055758b788',
			'label' => 'Associated Author',
			'name' => 'tfpf_associated_author',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5b6038a28e692',
						'operator' => '==',
						'value' => 'Author Review',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'authors',
			),
			'taxonomy' => array(
			),
			'filters' => array(
				0 => 'search',
			),
			'elements' => '',
			'min' => '',
			'max' => 1,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'reviews',
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