<?php

//This finds whihc plugins are currently active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );



//If the PublishFox Books plugins is active, do this...

//if (
//    is_plugin_active( 'publishfox-books/publishfox-books.php' ) ) {
    
    //Creates the Review fields
    require_once plugin_dir_path( __FILE__ ) . '../../includes/_acf_fields/events/events.php';
//}
//
//
//else {}