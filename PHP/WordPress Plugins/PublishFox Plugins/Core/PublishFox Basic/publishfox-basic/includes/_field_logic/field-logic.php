<?php

//This finds whihc plugins are currently active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );



//If both PublishFox Books & PublishFox Author plugins are active, do this...

if (
    is_plugin_active( 'publishfox-books/publishfox-books.php' ) && 
    is_plugin_active( 'publishfox-author/publishfox-author.php' ) ) {
    
    //Creates the Featured Book & Author Detail fields for the Layout 'Home Page Layout'
    require_once plugin_dir_path( __FILE__ ) . '../../includes/_acf_fields/layouts/home-page/featured-book_author-details.php';
}



//If PublishFox Books plugin is active, do this...

elseif (
    is_plugin_active( 'publishfox-books/publishfox-books.php' ) ) {
    
    //Creates the Featured Book fields for the Layout 'Home Page Layout'
    require_once plugin_dir_path( __FILE__ ) . '../../includes/_acf_fields/layouts/home-page/featured-book.php';
    
} 



//If PublishFox Author plugin is active, do this...

elseif (
    is_plugin_active( 'publishfox-author/publishfox-author.php' ) ) {
    
    //Creates the Author Details fields for the Layout 'Home Page Layout'
    require_once plugin_dir_path( __FILE__ ) . '../../includes/_acf_fields/layouts/home-page/author-details.php';
    
}

else {}