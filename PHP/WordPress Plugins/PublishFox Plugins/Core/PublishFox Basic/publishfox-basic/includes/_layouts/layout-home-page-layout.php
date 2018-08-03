<?php

function add_home_page_layout() {
    
    $layoutcheck = get_page_by_path('home-page-layout', OBJECT, 'layout');
    $layoutid = $layoutcheck->ID;
    
    //If 'Home Page Layout' doesn't exist in the 'Layout' custom post type, do this...
    if (!$layoutid) {
    
        // Create home page layout object
        $my_post = array(
          'post_title'    => wp_strip_all_tags( 'Home Page Layout' ),
          'post_status'   => 'publish',
          'post_author'   => 1,
          'post_type'     => 'layout',
        );

        // Insert the post into the database
        wp_insert_post( $my_post );

    }
    
}