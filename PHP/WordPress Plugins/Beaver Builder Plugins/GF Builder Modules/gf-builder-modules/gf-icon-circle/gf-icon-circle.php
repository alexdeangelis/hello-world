<?php 

class IconCircle extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Icon Circle', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-icon-circle/',
            'url'             => MY_MODULES_URL . 'gf-icon-circle/',
            'icon'            => 'gf-icon-circle.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
    
    /**
     * @method get_icons
     */
    public function get_icon( $icon = '' ) {

        // check if $icon is referencing an included icon.
        if ( '' != $icon && file_exists( MY_MODULES_DIR . 'gf-icon-circle/icon/' . $icon ) ) {
            $path = MY_MODULES_DIR . 'gf-icon-circle/icon/' . $icon;
        }

        if ( file_exists( $path ) ) {
            return file_get_contents( $path );
        } else {
            return '';
        }
    }
    
}



FLBuilder::register_module( 'IconCircle', array(
    'gf_icon_circle_1_tab'      => array(
        'title'         => __( 'Icon Circle 1 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_circle_1_section'  => array(
                'title'         => __( 'Icon 1', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_circle_1_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Icon Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_icon_circle_1_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Title', 'fl-builder' ),
                    ),
                    'gf_icon_circle_1_legend'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Legend', 'fl-builder' ),
                    ),
                    'gf_icon_circle_1_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Circle Colour', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_icon_circle_1_border_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Circle Border', 'fl-builder'),
                        'default'       => 'gf_icon_circle_1_border_toggle_off',
                        'options'       => array(
                            'gf_icon_circle_1_border_toggle_off'      => __('Off', 'fl-builder'),
                            'gf_icon_circle_1_border_toggle_on'      => __('On', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_icon_circle_1_border_toggle_off'      => array(
                                'fields'        => array(),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_icon_circle_1_border_toggle_on'      => array(
                                'fields'        => array('gf_icon_circle_1_border_color'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_icon_circle_1_border_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Border Colour', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    )
                )
            )
        ),
    ),
    'gf_icon_circle_2_tab'      => array(
        'title'         => __( 'Icon Circle 2 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_circle_2_section'  => array(
                'title'         => __( 'Icon 2', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_circle_2_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Icon Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_icon_circle_2_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Title', 'fl-builder' ),
                    ),
                    'gf_icon_circle_2_legend'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Legend', 'fl-builder' ),
                    ),
                    'gf_icon_circle_2_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Circle Colour', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_icon_circle_2_border_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Circle Border', 'fl-builder'),
                        'default'       => 'gf_icon_circle_2_border_toggle_off',
                        'options'       => array(
                            'gf_icon_circle_2_border_toggle_off'      => __('Off', 'fl-builder'),
                            'gf_icon_circle_2_border_toggle_on'      => __('On', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_icon_circle_2_border_toggle_off'      => array(
                                'fields'        => array(),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_icon_circle_2_border_toggle_on'      => array(
                                'fields'        => array('gf_icon_circle_2_border_color'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_icon_circle_2_border_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Border Colour', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    )
                )
            )
        ),
    ),
    'gf_icon_circle_3_tab'      => array(
        'title'         => __( 'Icon Circle 3 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_circle_3_section'  => array(
                'title'         => __( 'Icon 3', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_circle_3_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Icon Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_icon_circle_3_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Title', 'fl-builder' ),
                    ),
                    'gf_icon_circle_3_legend'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Legend', 'fl-builder' ),
                    ),
                    'gf_icon_circle_3_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Circle Colour', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_icon_circle_3_border_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Circle Border', 'fl-builder'),
                        'default'       => 'gf_icon_circle_3_border_toggle_off',
                        'options'       => array(
                            'gf_icon_circle_3_border_toggle_off'      => __('Off', 'fl-builder'),
                            'gf_icon_circle_3_border_toggle_on'      => __('On', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_icon_circle_3_border_toggle_off'      => array(
                                'fields'        => array(),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_icon_circle_3_border_toggle_on'      => array(
                                'fields'        => array('gf_icon_circle_3_border_color'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_icon_circle_3_border_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Border Colour', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    )
                )
            )
        ),
    ),
    'gf_icon_circle_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_icon_circle_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_icon_circle_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_icon_circle_bg_toggle_color',
                        'options'       => array(
                            'gf_icon_circle_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_icon_circle_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_icon_circle_bg_toggle_color'      => array(
                                'fields'        => array('gf_icon_circle_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_icon_circle_bg_toggle_image'      => array(
                                'fields'        => array('gf_icon_circle_bg_image','gf_icon_circle_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_icon_circle_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_icon_circle_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    
                    
                    'gf_icon_circle_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_icon_circle_overlay_toggle_no',
                        'options'       => array(
                            'gf_icon_circle_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_icon_circle_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    ),
                )
            )
        )
    )
) );