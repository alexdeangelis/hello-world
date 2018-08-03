<?php

function publishfox_customizer_css_font_size() {
    if( get_theme_mod( 'publishfox_customizer_settings_font_size' ) == 'theme_font_size_1' ) { ?>

    <style type="text/css">
        h2 { font-size:30px; }
        h3 { font-size:24px; }
    </style>

    <?php } ?>


    <?php if( get_theme_mod( 'publishfox_customizer_settings_font_size' ) == 'theme_font_size_2' ) { ?>

    <style type="text/css">
        h2 { font-size:35px; }
        h3 { font-size:28px; text-decoration: underline; }
    </style>

    <?php } ?>


    <?php if( get_theme_mod( 'publishfox_customizer_settings_font_size' ) == 'theme_font_size_3' ) { ?>

    <style type="text/css">
        h2 { font-size:40px; }
        h3 { font-size:34px; text-decoration: line-through;}
    </style>

    <?php } ?>


    <?php if( get_theme_mod( 'publishfox_customizer_settings_font_size' ) == 'theme_font_size_4' ) { ?>

    <style type="text/css">
        h2 { font-size:45px; }
        h3 { font-size:40px; text-decoration:overline;}
    </style>

    <?php }
}

add_action( 'wp_head', 'publishfox_customizer_css_font_size');