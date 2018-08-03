<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b618f9775438',
	'title' => 'Video Details',
	'fields' => array(
		array(
			'key' => 'field_5b61921a19d41',
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
			'key' => 'field_5b618f9fb2f79',
			'label' => 'Video Link',
			'name' => 'tfpf_video_link',
			'type' => 'oembed',
			'instructions' => 'Add a YouTube or Vimeo link here. A preview of the video will show below.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_5b61922319d42',
			'label' => 'Column 2',
			'name' => '_copy',
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
			'key' => 'field_5b6190bce155f',
			'label' => 'Link to Book',
			'name' => 'tfpf_link_to_book',
			'type' => 'true_false',
			'instructions' => 'Is this video related to a book?',
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
			'key' => 'field_5b6191bbe1560',
			'label' => 'Video to Book Selector',
			'name' => 'tfpf_video_to_book_selector',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5b6190bce155f',
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
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'videos',
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