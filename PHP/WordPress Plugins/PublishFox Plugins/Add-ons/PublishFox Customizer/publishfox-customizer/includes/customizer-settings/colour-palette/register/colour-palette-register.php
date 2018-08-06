<?php

function customize_register_color_palette( $wp_customize ) {

    // Load the radio image control class.
    require_once( trailingslashit( plugin_dir_path( __FILE__ ) ). '../control-colour-palette.php' );

    // Register the radio image control class as a JS control type.
    $wp_customize->register_control_type( 'JT_Customize_Control_Colour_Palette' );

    // Add a custom layout section.
    $wp_customize->add_section( 'colour-palette', array( 'title' => esc_html__( 'PublishFox: Colour Palette', 'jt' ) ) );

    // Add the layout setting.
    $wp_customize->add_setting(
        'colour-palette',
        array(
            'type' => 'option', // or 'option'
            'default'           => 'fun',
            'sanitize_callback' => 'sanitize_key',
            'capability' => 'manage_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage'
        )
    );

    // Add the layout control.
    $wp_customize->add_control(
        new JT_Customize_Control_Colour_Palette(
            $wp_customize,
            'colour-palette',
            array(
                'label'    => esc_html__( 'Colour Palette', 'jt' ),
                'section'  => 'colour-palette',
                'choices'  => array(
                    'fun' => array(
                        'label' => esc_html__( 'Fun', 'jt' ),
                        'url'   => '%s/img/fun.png'
                    ),
                    'art' => array(
                        'label' => esc_html__( 'Art', 'jt' ),
                        'url'   => '%s/img/art.png'
                    ),
                    'muted' => array(
                        'label' => esc_html__( 'Muted', 'jt' ),
                        'url'   => '%s/img/muted.png'
                    ),
                    'modern' => array(
                        'label' => esc_html__( 'Modern', 'jt' ),
                        'url'   => '%s/img/modern.png'
                    ),
                    'clean' => array(
                        'label' => esc_html__( 'Clean', 'jt' ),
                        'url'   => '%s/img/clean.png'
                    ),
                    'fresh' => array(
                        'label' => esc_html__( 'Fresh', 'jt' ),
                        'url'   => '%s/img/fresh.png'
                    ),
                    'grape' => array(
                        'label' => esc_html__( 'Grape', 'jt' ),
                        'url'   => '%s/img/grape.png'
                    ),
                    'jewel' => array(
                        'label' => esc_html__( 'Jewel', 'jt' ),
                        'url'   => '%s/img/jewel.png'
                    ),
                    'pastel' => array(
                        'label' => esc_html__( 'Pastel', 'jt' ),
                        'url'   => '%s/img/pastel.png'
                    ),
                    'sleek' => array(
                        'label' => esc_html__( 'Sleek', 'jt' ),
                        'url'   => '%s/img/sleek.png'
                    )
                )
            )
        )
    );
}

add_action( 'customize_register', 'customize_register_color_palette' );
