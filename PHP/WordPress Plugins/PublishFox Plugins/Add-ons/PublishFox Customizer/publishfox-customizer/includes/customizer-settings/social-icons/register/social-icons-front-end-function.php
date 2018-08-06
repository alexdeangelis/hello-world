<?php

// Get user input from the Customizer and output the linked social media icons
function publishfox_show_social_icons() {
 
     $social_sites = publishfox_get_social_sites();
 
     // Any inputs that aren't empty are stored in $active_sites array
     foreach( $social_sites as $social_site ) {
         if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
             $active_sites[] = $social_site;
         }
     }
 
     // For each active social site, add it as a list item
     if ( !empty( $active_sites ) ) {
         echo "<ul class='social-media-icons'>";
 
         foreach ( $active_sites as $active_site ) { ?>

             <li>
             <a href="<?php echo get_theme_mod( $active_site ); ?>" target="_blank">
             <?php if( $active_site == 'vimeo' ) { ?>
                 <i class="fa fa-<?php echo $active_site; ?>-square"></i> <?php
             } else if( $active_site == 'email' ) { ?>
                 <i class="fa fa-envelope"></i> <?php
             } else { ?>
                 <i class="fa fa-<?php echo $active_site; ?>"></i> <?php
             } ?>
             </a>
             </li> <?php
         }
         echo "</ul>";
     }
}