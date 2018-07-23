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
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css" rel="stylesheet">
        
        <!--Favicons-->
        
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $themeURL; ?>/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $themeURL; ?>/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $themeURL; ?>/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $themeURL; ?>/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $themeURL; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <?php wp_head(); ?>

    </head>
    
    <body <?php body_class(); ?>>
        
        <!--Here's a standard nav, modified from the Bootstrap example-->
        
        <div class="container">

                <!-- Static navbar -->
                <nav class="navbar navbar-default">


                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            
                            
                            
                            
                            <div class="logo">
                                <a href="/">
                                                                        
                                    <img src="https://dcnetworks.ie/wp/wp-content/uploads/2017/11/placeholder-logo-2.png"/>
                                                                        
                                </a>
                            </div>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">

                            <div class="menu-main-menu-container">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                            </div>
                        </div><!--/.nav-collapse -->
                </nav>



            </div> <!-- /container -->