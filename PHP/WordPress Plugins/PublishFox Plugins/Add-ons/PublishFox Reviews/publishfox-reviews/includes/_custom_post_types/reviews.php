<?php

//Register the reviews custom post type
function register_reviews_post_type() {

    $labels = array(
        'name'               => 'Reviews',
        'singular_name'      => 'Review',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Review',
        'edit_item'          => 'Edit Review',
        'new_item'           => 'New Review',
        'all_items'          => 'All Reviews',
        'view_item'          => 'View Review',
        'search_items'       => 'Search Reviews',
        'not_found'          => 'No reviews found',
        'not_found_in_trash' => 'No reviews found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Reviews'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'reviews' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'reviews', $args );

}
add_action( 'init', 'register_reviews_post_type' );