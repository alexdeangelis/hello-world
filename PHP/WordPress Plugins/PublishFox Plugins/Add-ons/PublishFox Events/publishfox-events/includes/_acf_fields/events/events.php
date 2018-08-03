<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b619483dd7ac',
	'title' => 'Event Details',
	'fields' => array(
		array(
			'key' => 'field_5b619536a0dd7',
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
			'key' => 'field_5b61948d908c6',
			'label' => 'Event Date & Time',
			'name' => 'tfpf_event_date_&_time',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'Y-m-d H:i:s',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5b6197803f7f2',
			'label' => 'Event City',
			'name' => 'tfpf_event_city',
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
			'key' => 'field_5b619640af681',
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
			'key' => 'field_5b6196c4af682',
			'label' => 'Event Link',
			'name' => 'tfpf_event_link',
			'type' => 'link',
			'instructions' => 'Add in a link to give more information about the event',
			'required' => 0,
			'conditional_logic' => 0,
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
				'value' => 'events',
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