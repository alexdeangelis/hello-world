<?php 

class Icon extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Icon', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-icon/',
            'url'             => MY_MODULES_URL . 'gf-icon/',
            'icon'            => 'star-filled.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}



FLBuilder::register_module( 'Icon', array(
    'gf_icon_1_tab'      => array(
        'title'         => __( 'Icon 1 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_1_section'  => array(
                'title'         => __( 'Icon 1', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_1_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Icon Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_icon_1_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Title', 'fl-builder' ),
                    ),
                    'gf_icon_1_legend'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Legend', 'fl-builder' ),
                    ),
                )
            )
        ),
    ),
    'gf_icon_2_tab'      => array(
        'title'         => __( 'Icon Circle 2 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_2_section'  => array(
                'title'         => __( 'Icon 2', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_2_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Icon Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_icon_2_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Title', 'fl-builder' ),
                    ),
                    'gf_icon_2_legend'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Legend', 'fl-builder' ),
                    ),
                )
            )
        ),
    ),
    'gf_icon_3_tab'      => array(
        'title'         => __( 'Icon Circle 3 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_3_section'  => array(
                'title'         => __( 'Icon 3', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_3_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Icon Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_icon_3_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Title', 'fl-builder' ),
                    ),
                    'gf_icon_3_legend'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Legend', 'fl-builder' ),
                    ),
                    
                )
            )
        ),
    ),
    'gf_icon_separator_tab'      => array(
        'title'         => __( 'Separator', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_separator_tab'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_separator_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Show separator?', 'fl-builder'),
                        'default'       => 'gf_icon_separator_toggle_no',
                        'options'       => array(
                            'gf_icon_separator_toggle_no'      => __('No', 'fl-builder'),
                            'gf_icon_separator_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    )
                )
            )
        )
    ),
    'gf_icon_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_icon_bg_toggle_color',
                        'options'       => array(
                            'gf_icon_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_icon_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_icon_bg_toggle_color'      => array(
                                'fields'        => array('gf_icon_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_icon_bg_toggle_image'      => array(
                                'fields'        => array('gf_icon_bg_image','gf_icon_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_icon_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_icon_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    
                    
                    'gf_icon_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_icon_overlay_toggle_no',
                        'options'       => array(
                            'gf_icon_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_icon_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    ),
                )
            )
        )
    )
) );