<?php

// Gets the ID of the Home Page Layout in the Layouts post type.
//This is used so that their following ACF fields are only shown on the post with the slug ''
$pagecheck = get_page_by_path('home-page-layout', OBJECT, 'layout');
$pageid = $pagecheck->ID;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b5f0845b1c35',
	'title' => 'Layout: Home Page',
	'fields' => array(
		array(
			'key' => 'field_5b5f088cd0780',
			'label' => 'Page Layout',
			'name' => 'tfpf_layout_home',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'5b5f095b47cfb' => array(
					'key' => '5b5f095b47cfb',
					'name' => 'tfpf_featured_book',
					'label' => 'Featured Book',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b5f09b7d0781',
							'label' => 'How to...',
							'name' => '',
							'type' => 'message',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => 'This is the featured book row. On the basic PublishFox plan, the featured book row will allow you to promote your book.',
							'new_lines' => 'wpautop',
							'esc_html' => 0,
						),
						array(
							'key' => 'field_5b5f1096fc4cf',
							'label' => 'Background Column 1',
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
							'key' => 'field_5b5f0fd64e8e0',
							'label' => 'Background Type',
							'name' => 'background_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'Colour' => 'Colour',
								'Image' => 'Image',
							),
							'default_value' => array(
								0 => 'Colour',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
						array(
							'key' => 'field_5b5f10abfc4d0',
							'label' => 'Background Column 2',
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
							'key' => 'field_5b5f0fa14e8df',
							'label' => 'Background Colour',
							'name' => 'background_colour',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_5b5f0fd64e8e0',
										'operator' => '==',
										'value' => 'Colour',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#ffffff',
						),
						array(
							'key' => 'field_5b5f102a4e8e1',
							'label' => 'Background Image',
							'name' => 'background_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_5b5f0fd64e8e0',
										'operator' => '==',
										'value' => 'Image',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5b5f3b1d19087',
							'label' => 'Column 3',
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
							'column-type' => '1_1',
						),
						array(
							'key' => 'field_5b5f0c00d0783',
							'label' => 'Content Order',
							'name' => 'content_order',
							'type' => 'select',
							'instructions' => 'Select which way you want your content to flow. Either the text on the left of the row & image on the right, or image on the left & text on the right.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'Text - Image' => 'Text - Image',
								'Image - Text' => 'Image - Text',
							),
							'default_value' => array(
								0 => 'Text - Image',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'layout',
			),
			array(
                'param' => 'page',
                'operator' => '==',
                'value' => $pageid,
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