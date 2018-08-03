<?php

function add_home_page_page() {
    
    $home_test = get_page_by_title( 'Home Page' );
    
    //If 'Home Page' doesn't exist, do this... 
    if (!$home_test) {

        // Create home page object
        $my_page = array(
          'post_title'    => wp_strip_all_tags( 'Home Page' ),
          'post_status'   => 'publish',
          'post_author'   => 1,
          'post_type'     => 'page',
        );

        // Insert the post into the database
        wp_insert_post( $my_page );

        // Use a static front page
        $home = get_page_by_title( 'Home Page' );
        update_option( 'page_on_front', $home->ID );
        update_option( 'show_on_front', 'page' );

    }
    
}

