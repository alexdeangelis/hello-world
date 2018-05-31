<?php 

class TextLink extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Text & Link', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-text-link/',
            'url'             => MY_MODULES_URL . 'gf-text-link/',
            'icon'            => 'text.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}



FLBuilder::register_module( 'TextLink', array(
    'gf_text_link_text'      => array(
        'title'         => __( 'Text', 'fl-builder' ),
        'sections'      => array(
            'gf_text_link_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_text_link_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                    ),
                    'gf_text_link_editor'     => array(
                        'type'          => 'editor',
                        'media_buttons' => true,
                        'wpautop'       => true,
                        'label'         => __( 'Text Editor', 'fl-builder' ),
                    ),
                    'gf_text_link_url'     => array(
                        'type'          => 'link',
                        'label'         => __('Link URL', 'fl-builder')
                    ),
                    'gf_text_link_url_text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Link Text', 'fl-builder' ),
                    )
                )
            )
        )
    ),
    'gf_text_link_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_text_link_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_text_link_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_text_link_bg_toggle_color',
                        'options'       => array(
                            'gf_text_link_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_text_link_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_text_link_bg_toggle_color'      => array(
                                'fields'        => array('gf_text_link_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_text_link_bg_toggle_image'      => array(
                                'fields'        => array('gf_text_link_bg_image','gf_text_link_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_text_link_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_text_link_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    
                    
                    'gf_text_link_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_text_link_overlay_toggle_no',
                        'options'       => array(
                            'gf_text_link_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_text_link_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    ),
                )
            )
        )
    )
) );