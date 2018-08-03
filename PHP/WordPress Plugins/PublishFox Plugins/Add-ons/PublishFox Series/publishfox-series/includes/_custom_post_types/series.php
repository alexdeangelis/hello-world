<?php

//Register the series custom post type
function register_series_post_type() {

    $labels = array(
        'name'               => 'Series',
        'singular_name'      => 'Series',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Series',
        'edit_item'          => 'Edit Series',
        'new_item'           => 'New Series',
        'all_items'          => 'All Series',
        'view_item'          => 'View Series',
        'search_items'       => 'Search Series',
        'not_found'          => 'No series found',
        'not_found_in_trash' => 'No series found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Series'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'series' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-networking',
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'series', $args );

}
add_action( 'init', 'register_series_post_type' );