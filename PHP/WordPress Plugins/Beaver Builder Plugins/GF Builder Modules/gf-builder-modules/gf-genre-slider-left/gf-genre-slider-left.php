<?php 

class GenreSliderLeft extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Genre Slider - Left', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-genre-slider-left/',
            'url'             => MY_MODULES_URL . 'gf-genre-slider-left/',
            'icon'            => 'slides.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
        
        /** 
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         */
        
        // Register and enqueue your own
        $this->add_css('owl_css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
        $this->add_css('owl_theme_css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
        $this->add_js('owl_js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '', true);
        
    }
}



FLBuilder::register_module( 'GenreSliderLeft', array(
    'gf_genre_slider_left_text'      => array(
        'title'         => __( 'Text', 'fl-builder' ),
        'sections'      => array(
            'gf_genre_slider_left_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_genre_slider_left_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                    ),
                    'gf_genre_slider_left_editor'     => array(
                        'type'          => 'editor',
                        'media_buttons' => true,
                        'wpautop'       => true,
                        'label'         => __( 'Text Editor', 'fl-builder' ),
                    )
                )
            )
        )
    ),
	'gf_genre_slider_left_slides_repeat'       => array(
		'title'         => __( 'Image Slides', 'fl-builder' ),
		'sections'      => array(
			'general'       => array(
				'title'         => '',
				'fields'        => array(
					'gf_genre_slider_left_slide_repeater'        => array(
						'type'          => 'form',
						'label'         => __( 'Slide', 'fl-builder' ),
						'form'          => 'gf_genre_slider_left_slide_repeat', // ID from registered form below
						'preview_text'  => 'label', // Name of a field to use for the preview text
						'multiple'      => true,
					),
				),
			),
		),
	),
    'gf_genre_slider_left_image'      => array(
        'title'         => __( 'Small Icon', 'fl-builder' ),
        'sections'      => array(
            'gf_genre_slider_left_section2'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_genre_slider_left_small_image'     => array(
                        'type'          => 'photo',
                        'label'         => __('Small Icon', 'fl-builder'),
                        'show_remove'   => true,
                    )
                )
            )
        )
    ),
    'gf_genre_slider_left_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_genre_slider_left_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_genre_slider_left_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_genre_slider_left_bg_toggle_color',
                        'options'       => array(
                            'gf_genre_slider_left_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_genre_slider_left_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_genre_slider_left_bg_toggle_color'      => array(
                                'fields'        => array('gf_genre_slider_left_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_genre_slider_left_bg_toggle_image'      => array(
                                'fields'        => array('gf_genre_slider_left_bg_image','gf_genre_slider_left_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_genre_slider_left_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_genre_slider_left_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    
                    
                    'gf_genre_slider_left_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_genre_slider_left_overlay_toggle_no',
                        'options'       => array(
                            'gf_genre_slider_left_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_genre_slider_left_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        ),
                    )
                )
            )
        )
    )
) );


/**
 * Register the slide settings form.
 */
FLBuilder::register_settings_form('gf_genre_slider_left_slide_repeat', array(
	'title' => __( 'Slide Settings', 'fl-builder' ),
	'tabs'  => array(
		'general'        => array( // Tab
			'title'         => __( 'General', 'fl-builder' ), // Tab title
			'sections'      => array( // Tab Sections
				'gf_general_slide'       => array(
					'title'     => '',
					'fields'    => array(
						'gf_genre_slider_left_slide_repeat_image' => array(
                            'type'          => 'photo',
                            'label'         => __('Slide Image', 'fl-builder'),
                            'show_remove'   => true,
                        ),
                        'gf_genre_slider_left_slide_repeat_link' => array(
                            'type'          => 'link',
                            'label'         => __('Slide Link', 'fl-builder'),
                        )
					),
				),
			),
		),
	),
) );