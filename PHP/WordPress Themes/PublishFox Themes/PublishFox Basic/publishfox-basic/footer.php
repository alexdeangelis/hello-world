<footer class="block__footer">
            
    <div class="container">
        
        <div class="footer__container">

            <!-- Static navbar -->
            <nav class="navbar navbar-default footer__navbar">

                <?php

                if ( function_exists( 'the_custom_logo' ) ) {

                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    ?>

                <div class="navbar-footer">

                    <div class="footer__navbar__logo">
                        <a href="/">
                            <img class="footer__logo__image" src="<?php echo $image[0]; ?>"/>
                        </a>
                    </div>

                </div>

                <?php

                }

                ?>


                <div class="footer__navbar__social-icons">
                    <?php
                        if ( function_exists( 'publishfox_show_social_icons' ) ) {
                            publishfox_show_social_icons();
                        }
                    ?>
                </div>

            </nav>

        </div>


    </div> <!-- /container -->
    
    <div class="container">
        
        <div class="footer__container">
        
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer__publishfox-bar">
                        <div class="footer__publishfox-bar__author">
                            <p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?></p>
                        </div>
                        <div class="footer__publishfox-bar__powered">
                            <p><a href="#">Powered by PublishFox</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

</footer>

</div>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>