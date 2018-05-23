<?php 

class TextThreeImages extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Text & Three Images', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-text-three-images/',
            'url'             => MY_MODULES_URL . 'gf-text-three-images/',
            'icon'            => 'text.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}



FLBuilder::register_module( 'TextThreeImages', array(
    'gf_text_three_images_text'      => array(
        'title'         => __( 'Text', 'fl-builder' ),
        'sections'      => array(
            'gf_text_three_images_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_text_three_images_editor'     => array(
                        'type'          => 'editor',
                        'label'         => __( 'Text', 'fl-builder' ),
                    )
                )
            )
        )
    ),
    'gf_text_three_images_image'      => array(
        'title'         => __( 'Images & Links', 'fl-builder' ),
        'sections'      => array(
            'gf_text_three_images_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_text_three_images_image_1'     => array(
                        'type'          => 'photo',
                        'label'         => __('Image 1', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_link_1'     => array(
                        'type'          => 'link',
                        'label'         => __('Link for Image 1', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_image_2'     => array(
                        'type'          => 'photo',
                        'label'         => __('Image 2', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_link_2'     => array(
                        'type'          => 'link',
                        'label'         => __('Link for Image 2', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_image_3'     => array(
                        'type'          => 'photo',
                        'label'         => __('Image 3', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_link_3'     => array(
                        'type'          => 'link',
                        'label'         => __('Link for Image 3', 'fl-builder'),
                        'show_remove'   => true,
                    )
                )
            )
        )
    ),
    'gf_text_three_images_url'      => array(
        'title'         => __( 'Extra Link', 'fl-builder' ),
        'sections'      => array(
            'gf_text_three_images_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_text_three_images_extra_url'     => array(
                        'type'          => 'link',
                        'label'         => __('Extra Link URL', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_extra_url_text'     => array(
                        'type'          => 'text',
                        'label'         => __('Text for extra link', 'fl-builder'),
                    )
                )
            )
        )
    ),
    'gf_text_three_images_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_text_three_images_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_text_three_images_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_text_three_images_bg_toggle_color',
                        'options'       => array(
                            'gf_text_three_images_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_text_three_images_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_text_three_images_bg_toggle_color'      => array(
                                'fields'        => array('gf_text_three_images_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_text_three_images_bg_toggle_image'      => array(
                                'fields'        => array('gf_text_three_images_bg_image','gf_text_three_images_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_text_three_images_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_text_three_images_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_text_three_images_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_text_three_images_overlay_toggle_no',
                        'options'       => array(
                            'gf_text_three_images_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_text_three_images_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    )
                )
            )
        )
    )
) );