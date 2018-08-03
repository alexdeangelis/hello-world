<?php

//Register the characters custom post type
function register_characters_post_type() {

    $labels = array(
        'name'               => 'Characters',
        'singular_name'      => 'Character',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Character',
        'edit_item'          => 'Edit Character',
        'new_item'           => 'New Character',
        'all_items'          => 'All Characters',
        'view_item'          => 'View Character',
        'search_items'       => 'Search Characters',
        'not_found'          => 'No characters found',
        'not_found_in_trash' => 'No characters found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Characters'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'characters' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'characters', $args );

}
add_action( 'init', 'register_characters_post_type' );