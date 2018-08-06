<?php

function publishfox_customizer_css_colour_palette() {
    
    $white = '#FFFFFF';
    $black = '#000000';
    
    if ( get_option( 'colour-palette' ) == 'fun' ) {
        
        $primary_color = '#6ABBAC';
        $secondary_color = '#E95732';
        $tertiary_color = '#EEB950';
        $quaternary_color = '#DFDCE3';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'art' ) {
        
        $primary_color = '#F8CF46';
        $secondary_color = '#3274AF';
        $tertiary_color = '#33754D';
        $quaternary_color = '#262328';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'muted' ) {
        
        $primary_color = '#BEB288';
        $secondary_color = '#DAD0C2';
        $tertiary_color = '#F4F4F4';
        $quaternary_color = '#373737';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'modern' ) {
        
        $primary_color = '#D57738';
        $secondary_color = '#3C8698';
        $tertiary_color = '#7AB7BE';
        $quaternary_color = '#E4AC82';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'clean' ) {
        
        $primary_color = '#D0EAF1';
        $secondary_color = '#A9A9A9';
        $tertiary_color = '#EB4D48';
        $quaternary_color = '#EFEFEF';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'fresh' ) {
        
        $primary_color = '#8AC7D2';
        $secondary_color = '#71B993';
        $tertiary_color = '#215049';
        $quaternary_color = '#F2F2F3';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'grape' ) {
        
        $primary_color = '#8C648B';
        $secondary_color = '#442A48';
        $tertiary_color = '#F0DFCD';
        $quaternary_color = '#F6EEE8';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'jewel' ) {
        
        $primary_color = '#77ADC7';
        $secondary_color = '#64577F';
        $tertiary_color = '#57194B';
        $quaternary_color = '#D33F6F';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'pastel' ) {
        
        $primary_color = '#C4D7D2';
        $secondary_color = '#F9DDD4';
        $tertiary_color = '#D27953';
        $quaternary_color = '#D6B351';
        
    }
    
    elseif ( get_option( 'colour-palette' ) == 'sleek' ) {
        
        $primary_color = '#F7F5E8';
        $secondary_color = '#343A54';
        $tertiary_color = '#55658B';
        $quaternary_color = '#E8E8E8';
        
    }
    
    else {}


    ?>


    <style type="text/css">
        body {
            background-color:<?php echo $primary_color; ?>;
        }
        
        p,
        a,
        ul,
        li,
        label,
        span,
        footer {
            color:<?php echo $black; ?>;
        }
        
        
        
        h1,
        h2,
        h3,
        h4 {
            color:<?php echo $primary_color; ?>;
        }
        
        .navbar-default .navbar-nav>li>a,
        .fa-inverse
        {
            color:<?php echo $white; ?>;
        }
        
        header,
        footer {
            background-color:<?php echo $secondary_color; ?>;
        }
        
        .navbar-default {
            background-color:transparent;
            border:none;
        }
        .input-group-btn .btn-primary {
            background-color:<?php echo $tertiary_color; ?>;
            border-color:<?php echo $tertiary_color; ?>;
        }
        a,
        button {
            transition:all 0.5s;
        }
        a:hover,
        button:hover,
        button.btn-default:hover {
            color:<?php echo $tertiary_color; ?>;
            text-decoration: none;
        }
        .btn-default {
            background-color:<?php echo $tertiary_color; ?>;
            color:<?php echo $white; ?>;
            border-color: <?php echo $tertiary_color; ?>;
        }
    </style>

    <?php 
    
}

add_action( 'wp_head', 'publishfox_customizer_css_colour_palette');