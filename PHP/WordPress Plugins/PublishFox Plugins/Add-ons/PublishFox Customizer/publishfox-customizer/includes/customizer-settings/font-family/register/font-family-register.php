<?php

function customize_register_font_family( $wp_customize ) {

    // Load the radio image control class.
    require_once( trailingslashit( plugin_dir_path( __FILE__ ) ). '../control-font-family.php' );

    // Register the radio image control class as a JS control type.
    $wp_customize->register_control_type( 'JT_Customize_Control_Font_Family' );

    // Add a custom layout section.
    $wp_customize->add_section( 'font-family', array( 'title' => esc_html__( 'PublishFox: Font Family', 'jt' ) ) );

    // Add the layout setting.
    $wp_customize->add_setting(
        'font-family',
        array(
            'type' => 'option', // or 'option'
            'default'           => 'test1',
            'sanitize_callback' => 'sanitize_key',
            'capability' => 'manage_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage'
        )
    );

    // Add the layout control.
    $wp_customize->add_control(
        new JT_Customize_Control_Font_Family(
            $wp_customize,
            'font-family',
            array(
                'label'    => esc_html__( 'Font Family', 'jt' ),
                'section'  => 'font-family',
                'choices'  => array(
                    'amatic' => array(
                        'label' => esc_html__( 'Amatic', 'jt' ),
                        'url'   => '%s/img/fonts_amatic_sc_b_open_sans_r.png'
                    ),
                    'julius' => array(
                        'label' => esc_html__( 'Julius', 'jt' ),
                        'url'   => '%s/img/fonts_julius_sans_one_volkorn_r.png'
                    ),
                    'montserrat' => array(
                        'label' => esc_html__( 'Montserrat', 'jt' ),
                        'url'   => '%s/img/fonts_montserrat_sb_quattrocento_sans_r.png'
                    ),
                    'nixie' => array(
                        'label' => esc_html__( 'Nixie', 'jt' ),
                        'url'   => '%s/img/fonts_nixie_one_libre_baskerville_r.png'
                    ),
                    'oswald' => array(
                        'label' => esc_html__( 'Oswald', 'jt' ),
                        'url'   => '%s/img/fonts_oswald_r_crimson_text_r.png'
                    ),
                    'pacifico' => array(
                        'label' => esc_html__( 'Pacifico', 'jt' ),
                        'url'   => '%s/img/fonts_pacifico_merriweather_sans_l.png'
                    ),
                    'playfair' => array(
                        'label' => esc_html__( 'Playfair', 'jt' ),
                        'url'   => '%s/img/fonts_playfair_display_b_roboto_l.png'
                    )
                )
            )
        )
    );
}

add_action( 'customize_register', 'customize_register_font_family' );