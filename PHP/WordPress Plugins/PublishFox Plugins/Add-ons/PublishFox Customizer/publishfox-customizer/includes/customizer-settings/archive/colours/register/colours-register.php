<?php

function publishfox_customize_colours_register( $wp_customize ) {
    
    
    $wp_customize->add_section( 'publishfox_customizer_section', array(
        'title'          => __( 'PublishFox Options', 'understrap' )
    ) );
    
    $wp_customize->add_setting( 'publishfox_customizer_settings_colours', array(
        'default'     => 'theme_colours_1',
        'transport'   => 'refresh',
    ) );
    
    $wp_customize->add_control( 'publishfox_control_colours', array(
        'label' => 'Theme Colours',
        'section' => 'publishfox_customizer_section',
        'settings' => 'publishfox_customizer_settings_colours',
        'type' => 'radio',
        'choices' => array(
            'theme_colours_1' => 'Theme Colours 1',
            'theme_colours_2' => 'Theme Colours 2',
            'theme_colours_3' => 'Theme Colours 3',
            'theme_colours_4' => 'Theme Colours 4',
        ),
    ) );
    

}
add_action( 'customize_register', 'publishfox_customize_colours_register' );









