<?php

//Register the downloads custom post type
function register_downloads_post_type() {

    $labels = array(
        'name'               => 'Downloads',
        'singular_name'      => 'Download',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Download',
        'edit_item'          => 'Edit Download',
        'new_item'           => 'New Download',
        'all_items'          => 'All Downloads',
        'view_item'          => 'View Download',
        'search_items'       => 'Search Downloads',
        'not_found'          => 'No downloads found',
        'not_found_in_trash' => 'No downloads found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Downloads'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'downloads' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-download',
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'downloads', $args );

}
add_action( 'init', 'register_downloads_post_type' );