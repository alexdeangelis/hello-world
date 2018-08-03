<?php

//Register the videos custom post type
function register_videos_post_type() {

    $labels = array(
        'name'               => 'Videos',
        'singular_name'      => 'Video',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Video',
        'edit_item'          => 'Edit Video',
        'new_item'           => 'New Video',
        'all_items'          => 'All Videos',
        'view_item'          => 'View Video',
        'search_items'       => 'Search Videos',
        'not_found'          => 'No videos found',
        'not_found_in_trash' => 'No videos found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Videos'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'videos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-video',
        'supports'           => array( 'title' )
    );

    register_post_type( 'videos', $args );

}
add_action( 'init', 'register_videos_post_type' );