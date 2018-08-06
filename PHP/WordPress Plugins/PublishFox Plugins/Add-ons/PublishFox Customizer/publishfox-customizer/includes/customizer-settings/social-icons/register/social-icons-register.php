<?php

function customize_register_social( $wp_customize ) {
    
    /**
    * Social site icons for Quick Menu bar
    * 
    * @link: https://www.competethemes.com/social-icons-wordpress-menu-theme-customizer/
    */
    $wp_customize->add_section( 'social_settings', array(
        'title' => __( 'PublishFox: Social Media', 'publishfox' ),
        'priority' => 100,
    ));

    $social_sites = publishfox_get_social_sites();
    $priority = 5;

    foreach( $social_sites as $social_site ) {

        $wp_customize->add_setting( "$social_site", array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control( $social_site, array(
            'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
            'section' => 'social_settings',
            'type' => 'text',
            'priority' => $priority,
        ));

        $priority += 5;
    }

}


add_action( 'customize_register', 'customize_register_social' );

//Link to the social icons array file
require_once plugin_dir_path( __FILE__ ) . 'social-icons-array.php';

//Link to the function to show social icons
require_once plugin_dir_path( __FILE__ ) . 'social-icons-front-end-function.php';