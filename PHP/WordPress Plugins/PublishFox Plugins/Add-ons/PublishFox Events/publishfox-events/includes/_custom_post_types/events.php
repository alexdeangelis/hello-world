<?php


//Register the authors custom post type
function register_events_post_type() {

    $labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'edit_item'          => 'Edit Event',
        'new_item'           => 'New Event',
        'all_items'          => 'All Events',
        'view_item'          => 'View Event',
        'search_items'       => 'Search Events',
        'not_found'          => 'No events found',
        'not_found_in_trash' => 'No events found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Events'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-location-alt',
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'events', $args );

}
add_action( 'init', 'register_events_post_type' );