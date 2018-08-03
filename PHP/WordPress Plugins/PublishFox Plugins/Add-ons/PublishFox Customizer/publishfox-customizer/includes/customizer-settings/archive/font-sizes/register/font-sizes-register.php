<?php

function publishfox_customize_font_sizes_register( $wp_customize ) {

$wp_customize->add_setting( 'publishfox_customizer_settings_font_size', array(
        'default'     => 'theme_font_size_1',
        'transport'   => 'refresh',
    ) );
    
    $wp_customize->add_control( 'publishfox_control_font_size', array(
        'label' => 'Theme Font Size',
        'section' => 'publishfox_customizer_section',
        'settings' => 'publishfox_customizer_settings_font_size',
        'type' => 'radio',
        'choices' => array(
            'theme_font_size_1' => 'Theme Font Size 1',
            'theme_font_size_2' => 'Theme Font Size 2',
            'theme_font_size_3' => 'Theme Font Size 3',
            'theme_font_size_4' => 'Theme Font Size 4',
        ),
    ) );

}
add_action( 'customize_register', 'publishfox_customize_font_sizes_register' );