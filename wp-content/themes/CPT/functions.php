<?php

function CPT_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'CPT_setup');

/**
 * THEME SUPPORT
 */

 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support('post-thumbnails');

 add_theme_support('post-formats',['aside', 'image', 'video']);


function foods_post_type()
{
    $labels = [
        'name' => 'Foods',
        'singular_name' => 'Foods',
        'add_new' => 'Add Food Item',
        'all_items' => 'All Foods',
        'add_new_item' => 'Edit Item',
        'new_item' => 'New Items',
        'search_item' => 'Search Foods',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent_Item',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability' => 'post',
        'hierarchical' => false,
        
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ],
        'thumbnail_support' => true,
        'taxonomies' => [
            'category',
            'post_tag',
            'menu_position' => 5,
            'exclude_from_search' => false
        ]
    ];

    register_post_type('foods', $args);
}

add_action('init', 'foods_post_type');
