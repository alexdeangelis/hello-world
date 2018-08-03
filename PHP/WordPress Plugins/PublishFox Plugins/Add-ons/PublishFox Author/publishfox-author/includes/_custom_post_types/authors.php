<?php
//Enable supprt for thumbnails
add_theme_support( 'post-thumbnails' );

//Register the authors custom post type
function register_authors_post_type() {

    $labels = array(
        'name'               => 'Authors',
        'singular_name'      => 'Author',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Author',
        'edit_item'          => 'Edit Author',
        'new_item'           => 'New Author',
        'all_items'          => 'All Authors',
        'view_item'          => 'View Author',
        'search_items'       => 'Search Authors',
        'not_found'          => 'No authors found',
        'not_found_in_trash' => 'No authors found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Authors'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'authors' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'authors', $args );

}
add_action( 'init', 'register_authors_post_type' );