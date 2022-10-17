<?php

if ( ! defined( 'ABSPATH' ) ) exit;


function create_wct() {

    // Labels
    $labels = array(
        'name'               => _x( "Winner Comparison Tables", "Winner Comparison Tables" ),
        'singular_name'      => _x( "Winner Comparison Table", "Winner Comparison Table" ),
        'menu_name'          => 'WCT',
        'add_new'            => _x( "Add New Table", "Winner Comparison Table" ),
        'add_new_item'       => __( "Add New Table" ),
        'edit_item'          => __( "Edit Table" ),
        'new_item'           => __( "New Table" ),
        'view_item'          => __( "View Tables" ),
        'search_items'       => __( "Search Tables" ),
        'not_found'          => __( "No Table Found" ),
        'not_found_in_trash' => __( "No Table Found in Trash" ),
        'parent_item_colon'  => ''
    );

    // Register post type
    register_post_type( 'wct_tables', array(
        'labels'             => $labels,
        'public'             => true,
        'menu_position'      => 3,
        'has_archive'        => false,
        'hierarchical'       => false,
        'publicly_queryable' => false,
        'menu_icon'          => 'dashicons-editor-table',
        'rewrite'            => array( 'slug' => '', 'with_front' => false ),
        'supports'           => array( 'title' )
    ) );
}

add_action( 'init', 'create_wct', 0 );