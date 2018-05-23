<?php 

class GraphsDemographics extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Graphs: Demographics', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-graphs-demographics/',
            'url'             => MY_MODULES_URL . 'gf-graphs-demographics/',
            'icon'            => 'gf-graphs-demographics.svg',
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
        if ( '' != $icon && file_exists( MY_MODULES_DIR . 'gf-graphs-demographics/icon/' . $icon ) ) {
            $path = MY_MODULES_DIR . 'gf-graphs-demographics/icon/' . $icon;
        }

        if ( file_exists( $path ) ) {
            return file_get_contents( $path );
        } else {
            return '';
        }
    }
}



FLBuilder::register_module( 'GraphsDemographics', array(
    'gf_graphs_demographics_1_tab'      => array(
        'title'         => __( 'Graph 1 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_graphs_demographics_1_section'  => array(
                'title'         => __( 'Graph 1', 'fl-builder' ),
                'fields'        => array(
                    'gf_graphs_demographics_1_shortcode'   => array(
                        'type'          => 'text',
                        'label'         => __('Graph 1 Shortcode', 'fl-builder'),
                    ),
                    'gf_graphs_demographics_1_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Graph 1 Title', 'fl-builder' ),
                    )
                )
            )
        ),
    ),
    'gf_graphs_demographics_2_tab'      => array(
        'title'         => __( 'Graph 2 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_graphs_demographics_2_section'  => array(
                'title'         => __( 'Graph 2', 'fl-builder' ),
                'fields'        => array(
                    'gf_graphs_demographics_2_shortcode'   => array(
                        'type'          => 'text',
                        'label'         => __('Graph 2 Shortcode', 'fl-builder'),
                    ),
                    'gf_graphs_demographics_2_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Graph 2 Title', 'fl-builder' ),
                    )
                )
            )
        ),
    ),
    'gf_graphs_demographics_3_tab'      => array(
        'title'         => __( 'Graph 3 Details', 'fl-builder' ),
        'sections'      => array(
            'gf_graphs_demographics_3_section'  => array(
                'title'         => __( 'Graph 3', 'fl-builder' ),
                'fields'        => array(
                    'gf_graphs_demographics_3_shortcode'   => array(
                        'type'          => 'text',
                        'label'         => __('Graph 3 Shortcode', 'fl-builder'),
                    ),
                    'gf_graphs_demographics_3_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Graph 3 Title', 'fl-builder' ),
                    )
                )
            )
        ),
    ),
    'gf_graphs_demographics_separator_tab'      => array(
        'title'         => __( 'Separator', 'fl-builder' ),
        'sections'      => array(
            'gf_graphs_demographics_separator_tab'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_graphs_demographics_separator_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Show separator?', 'fl-builder'),
                        'default'       => 'gf_graphs_demographics_separator_toggle_no',
                        'options'       => array(
                            'gf_graphs_demographics_separator_toggle_no'      => __('No', 'fl-builder'),
                            'gf_graphs_demographics_separator_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    )
                )
            )
        )
    ),
    'gf_graphs_demographics_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_graphs_demographics_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_graphs_demographics_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_graphs_demographics_bg_toggle_color',
                        'options'       => array(
                            'gf_graphs_demographics_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_graphs_demographics_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_graphs_demographics_bg_toggle_color'      => array(
                                'fields'        => array('gf_graphs_demographics_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_graphs_demographics_bg_toggle_image'      => array(
                                'fields'        => array('gf_graphs_demographics_bg_image','gf_graphs_demographics_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_graphs_demographics_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_graphs_demographics_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    
                    
                    'gf_graphs_demographics_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_graphs_demographics_overlay_toggle_no',
                        'options'       => array(
                            'gf_graphs_demographics_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_graphs_demographics_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    ),
                )
            )
        )
    )
) );