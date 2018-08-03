<?php

function publishfox_customizer_css_colours() {
    if( get_theme_mod( 'publishfox_customizer_settings_colours' ) == 'theme_colours_1' ) { ?>

    <style type="text/css">
         body { background-color: white; }
        /*.btn-default { background-color:#FFFFFF; }*/
     </style>

    <?php } ?>


    <?php if( get_theme_mod( 'publishfox_customizer_settings_colours' ) == 'theme_colours_2' ) { ?>

    <style type="text/css">
         body { background-color: blue; }
        /*.btn-default { background-color:green; }*/
        a {color:#ffffff}
     </style>

    <?php } ?>


    <?php if( get_theme_mod( 'publishfox_customizer_settings_colours' ) == 'theme_colours_3' ) { ?>

    <style type="text/css">
         body { background-color: red; }
        /*.btn-default { background-color:yellow; }*/
        a {color:green}
     </style>

    <?php } ?>


    <?php if( get_theme_mod( 'publishfox_customizer_settings_colours' ) == 'theme_colours_4' ) { ?>

    <style type="text/css">
         body { background-color: green; }
        /*.btn-default { background-color:purple; }*/
        a {color:black}
     </style>

    <?php }
}

add_action( 'wp_head', 'publishfox_customizer_css_colours');