<?php 

class GFDownloads extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Downloads', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-downloads/',
            'url'             => MY_MODULES_URL . 'gf-downloads/',
            'icon'            => 'gf-downloads.svg',
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
        if ( '' != $icon && file_exists( MY_MODULES_DIR . 'gf-downloads/icon/' . $icon ) ) {
            $path = MY_MODULES_DIR . 'gf-downloads/icon/' . $icon;
        }

        if ( file_exists( $path ) ) {
            return file_get_contents( $path );
        } else {
            return '';
        }
    }
}



FLBuilder::register_module( 'GFDownloads', array(
    'gf_downloads_text'      => array(
        'title'         => __( 'Text', 'fl-builder' ),
        'sections'      => array(
            'gf_downloads_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_downloads_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                    ),
                    'gf_downloads_link_1_text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Download Link 1 Text', 'fl-builder' ),
                    ),
                    'gf_downloads_link_1_url'     => array(
                        'type'          => 'link',
                        'label'         => __( 'Download Link 1 URL', 'fl-builder' ),
                    ),
                    'gf_downloads_link_2_text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Download Link 2 Text', 'fl-builder' ),
                    ),
                    'gf_downloads_link_2_url'     => array(
                        'type'          => 'link',
                        'label'         => __( 'Download Link 2 URL', 'fl-builder' ),
                    ),
                    'gf_downloads_link_3_text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Download Link 3 Text', 'fl-builder' ),
                    ),
                    'gf_downloads_link_3_url'     => array(
                        'type'          => 'link',
                        'label'         => __( 'Download Link 3 URL', 'fl-builder' ),
                    ),
                    'gf_downloads_sm_image' => array(
                        'type'          => 'photo',
                        'label'         => __('Small Icon', 'fl-builder'),
                        'show_remove'   => false,
                    ),
                )
            )
        )
    ),
    'gf_downloads_image'      => array(
        'title'         => __( 'Image & Separator', 'fl-builder' ),
        'sections'      => array(
            'gf_downloads_section2'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_downloads_image'     => array(
                        'type'          => 'photo',
                        'label'         => __('Image Field', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_downloads_seperator_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Show seperator?', 'fl-builder'),
                        'default'       => 'gf_downloads_seperator_toggle_no',
                        'options'       => array(
                            'gf_downloads_seperator_toggle_no'      => __('No', 'fl-builder'),
                            'gf_downloads_seperator_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    )
                )
            )
        )
    ),
    'gf_downloads_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_downloads_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_downloads_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_downloads_bg_toggle_color',
                        'options'       => array(
                            'gf_downloads_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_downloads_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_downloads_bg_toggle_color'      => array(
                                'fields'        => array('gf_downloads_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_downloads_bg_toggle_image'      => array(
                                'fields'        => array('gf_downloads_bg_image','gf_downloads_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_downloads_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_downloads_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    'gf_downloads_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_downloads_overlay_toggle_no',
                        'options'       => array(
                            'gf_downloads_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_downloads_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    )
                )
            )
        )
    )
) );