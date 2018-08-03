<?php

function publishfox_customizer_css_font_family() {
    
    if ( get_option( 'font-family' ) == 'amatic' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Amatic SC', cursive";
        $text_font_family = "'Open Sans', sans-serif";
        
    }
    
    elseif ( get_option( 'font-family' ) == 'julius' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Vollkorn" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Julius Sans One', sans-serif";
        $text_font_family = "'Vollkorn', serif";
        
    }
    
    elseif ( get_option( 'font-family' ) == 'montserrat' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Montserrat|Quattrocento+Sans" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Montserrat', sans-serif";
        $text_font_family = "'Quattrocento Sans', sans-serif";
        
    }
    
    elseif ( get_option( 'font-family' ) == 'nixie' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Nixie+One|Libre+Baskerville" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Nixie One', cursive";
        $text_font_family = "'Libre Baskerville', serif";
        
    }
    
    elseif ( get_option( 'font-family' ) == 'oswald' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Oswald|Crimson+Text" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Oswald', sans-serif";
        $text_font_family = "'Crimson Text', serif";
        
    }
    
    elseif ( get_option( 'font-family' ) == 'pacifico' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Pacifico|Merriweather+Sans" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Pacifico', cursive";
        $text_font_family = "'Merriweather Sans', sans-serif";
        
    }
    
    elseif ( get_option( 'font-family' ) == 'playfair' ) {
        
        ?>

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto" rel="stylesheet">

    <?php
        
        $heading_font_family = "'Playfair Display', serif";
        $text_font_family = "'Roboto', sans-serif";
        
    }
    
    else {}
    
    ?>


    
    <style type="text/css">
        h1,
        h1 a,
        h2,
        h2 a,
        h3,
        h3 a,
        h4,
        h4 a,
        h5,
        h5 a,
        button {
            font-family:<?php echo $heading_font_family; ?>;
        }
        p,
        ul,
        li,
        label,
        span,
        input,
        a,
        footer,
        header {
            font-family:<?php echo $text_font_family; ?>;
        }
    </style>

    <?php
}

add_action( 'wp_head', 'publishfox_customizer_css_font_family');