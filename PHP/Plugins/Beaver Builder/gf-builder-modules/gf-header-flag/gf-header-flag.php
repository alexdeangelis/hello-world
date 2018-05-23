<?php 

class HeaderFlag extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Header Flag', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            //'group'           => __( 'Goodman Fox Modules', 'fl-builder' ),
            'category'        => __( 'Goodman Fox', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'gf-header-flag/',
            'url'             => MY_MODULES_URL . 'gf-header-flag/',
            'icon'            => 'star-filled.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}



FLBuilder::register_module( 'HeaderFlag', array(
    'gf_header_flag'      => array(
        'title'         => __( 'Header Flag', 'fl-builder' ),
        'sections'      => array(
            'gf_header_flag_section'  => array(
                'title'         => __( 'Section', 'fl-builder' ),
                'fields'        => array(
                    'gf_header_flag_image'     => array(
                        'type'          => 'photo',
                        'label'         => __( 'Header Flag Image', 'fl-builder' ),
                        'show_remove'   => true,
                        'help'          => 'Please use only one Header Flag module per page.',
                    )
                )
            )
        )
    ),
) );