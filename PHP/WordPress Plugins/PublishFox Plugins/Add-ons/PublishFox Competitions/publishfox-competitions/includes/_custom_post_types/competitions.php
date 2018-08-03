<?php

//Register the competitions custom post type
function register_competitions_post_type() {

    $labels = array(
        'name'               => 'Competitions',
        'singular_name'      => 'Competition',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Competition',
        'edit_item'          => 'Edit Competition',
        'new_item'           => 'New Competition',
        'all_items'          => 'All Competitions',
        'view_item'          => 'View Competition',
        'search_items'       => 'Search Competitions',
        'not_found'          => 'No competitions found',
        'not_found_in_trash' => 'No competitions found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Competitions'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'competitions' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-awards',
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'competitions', $args );

}
add_action( 'init', 'register_competitions_post_type' );