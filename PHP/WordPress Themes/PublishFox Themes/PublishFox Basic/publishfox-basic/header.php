<?php 

$themeURL = get_template_directory_uri();

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title><?php echo get_bloginfo( 'name' );?> - <?php echo get_bloginfo( 'description' ); ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
        
        <!--Favicons-->
        <!--
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $themeURL; ?>/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $themeURL; ?>/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $themeURL; ?>/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $themeURL; ?>/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $themeURL; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">-->

        <?php wp_head(); ?>

    </head>
    
    <body <?php body_class(); ?>>
        
        <div class="wrapper">
        
        <!--Here's a standard nav, modified from the Bootstrap example-->
        
        <header class="block__header">
            
            <div class="container">
                
                <div class="header__container">

                    <!-- Static navbar -->
                    <nav class="navbar navbar-default header__navbar">

                        <?php

                        if ( function_exists( 'the_custom_logo' ) ) {

                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                            ?>

                        <div class="navbar-header">

                            <div class="header__navbar__logo">
                                <a href="/">
                                    <img class="header__logo__image" src="<?php echo $image[0]; ?>"/>
                                </a>
                            </div>

                        </div>

                        <?php

                        }

                        ?>

                        <div class="header__navbar__social-icons">
                            <?php
                                if ( function_exists( 'publishfox_show_social_icons' ) ) {
                                    publishfox_show_social_icons();
                                }
                            ?>
                        </div>

                    </nav>

                </div>

            </div> <!-- /container -->
        
        </header>
        
        