<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b6822e684761',
	'title' => 'Book Video',
	'fields' => array(
		array(
			'key' => 'field_5b6822ea93d33',
			'label' => 'Book Video Link',
			'name' => 'tfpf_book_video_link',
			'type' => 'oembed',
			'instructions' => 'Please paste your YouTube or Vimeo link here. A preview of your video will appear under the link.',
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