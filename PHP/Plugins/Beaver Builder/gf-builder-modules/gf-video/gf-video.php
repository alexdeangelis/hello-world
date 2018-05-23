<?php 

class VideoRow extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Video Row', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-video/',
            'url'             => MY_MODULES_URL . 'gf-video/',
            'icon'            => 'format-video.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}



FLBuilder::register_module( 'VideoRow', array(
    'gf_video_tab'      => array(
        'title'         => __( 'Video Details', 'fl-builder' ),
        'sections'      => array(
            'gf_video_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_video_type_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Video Type', 'fl-builder'),
                        'default'       => 'gf_video_type_toggle_library',
                        'options'       => array(
                            'gf_video_type_toggle_library'      => __('Media Library', 'fl-builder'),
                            'gf_video_type_toggle_youtube'      => __('YouTube/Vimeo Link', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_video_type_toggle_library'      => array(
                                'fields'        => array('gf_video_type_library'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_video_type_toggle_youtube'      => array(
                                'fields'        => array('gf_video_type_youtube'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_video_type_library'   => array(
                        'type'          => 'video',
                        'label'         => __( 'Media Library', 'fl-builder' ),
                    ),
                    'gf_video_type_youtube'   => array(
                        'type'          => 'link',
                        'label'         => __('YouTube/Vimeo Link', 'fl-builder'),
                        'help'          => 'For YouTube, please use the embed link, which starts youtube.com/embed. For Vimeo, please use the embed link, which starts player.vimeo.com.',
                    ),
                )
            )
        )
    ),
    'gf_video_bg_tab'      => array(
        'title'         => __( 'Background Style', 'fl-builder' ),
        'sections'      => array(
            'gf_video_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_video_bg_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Type', 'fl-builder'),
                        'default'       => 'gf_video_bg_toggle_color',
                        'options'       => array(
                            'gf_video_bg_toggle_color'      => __('Background Colour', 'fl-builder'),
                            'gf_video_bg_toggle_image'      => __('Background Image', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'gf_video_bg_toggle_color'      => array(
                                'fields'        => array('gf_video_bg_color'),
                                'sections'      => array('toggle_section')
                            ),
                            'gf_video_bg_toggle_image'      => array(
                                'fields'        => array('gf_video_bg_image','gf_video_overlay_toggle'),
                                'sections'      => array('toggle_section')
                            ),
                        )
                    ),
                    'gf_video_bg_color'   => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'show_alpha'    => true
                    ),
                    'gf_video_bg_image'   => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'fl-builder'),
                        'show_remove'   => true,
                    ),
                    
                    
                    'gf_video_overlay_toggle'     => array(
                        'type'          => 'select',
                        'label'         => __('Background Image Overlay', 'fl-builder'),
                        'default'       => 'gf_video_overlay_toggle_no',
                        'options'       => array(
                            'gf_video_overlay_toggle_no'      => __('No', 'fl-builder'),
                            'gf_video_overlay_toggle_yes'      => __('Yes', 'fl-builder')
                        )
                    ),
                )
            )
        )
    )
) );