<?php

function publishfox_customize_icons( $wp_customize ) {

$wp_customize->add_section( 'publishfox_customizer_icons', array(
    'title'          => __( 'PublishFox: Social Media', 'understrap' )
) );

$wp_customize->add_setting( 'o2_fa_icon_picker', array(
    'default' => 'fa-facebook',
    'capability' => 'edit_theme_options'
));

$wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker', array(
    'label' => __('Icons', 'textdomain'),
    'description' => __('Choose an icon', 'textdomain'),
    'iconset' => 'fa',
    'section' => 'publishfox_customizer_icons',
    'priority' => 5,
    'settings' => 'o2_fa_icon_picker',
    'choices' => array(
        'fa-facebook' => __('Facebook', 'textdomain'),
        'fa-twitter' => __('Twitter', 'textdomain'),
        'fa-dribbble' => __('Dribbble', 'textdomain'),
        'fa-wordpress' => __('WordPress', 'textdomain'),
        'fa-github' => __('Github', 'textdomain'),
    )
)));
    
}
add_action( 'customize_register', 'publishfox_customize_icons' );

?>