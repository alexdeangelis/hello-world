<?php

//Register the layouts custom post type
function register_layout_post_type() {

    $labels = array(
        'name'               => 'Layouts',
        'singular_name'      => 'Layout',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Layout',
        'edit_item'          => 'Edit Layout',
        'new_item'           => 'New Layout',
        'all_items'          => 'All Layouts',
        'view_item'          => 'View Layout',
        'search_items'       => 'Search Layouts',
        'not_found'          =>  'No layouts found',
        'not_found_in_trash' => 'No layouts found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Layouts'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'layout' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-layout',
        'supports'           => array( 'title' )
    );

    register_post_type( 'layout', $args ); 

}
add_action( 'init', 'register_layout_post_type' );

?>