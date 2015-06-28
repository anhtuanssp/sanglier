<?php
add_action('init', 'header_slider_register');

function header_slider_register() {
    $labels = array(
        'name' => _x('Header Slider', 'post type general name'),
        'singular_name' => _x('Header Slider', 'post type singular name'),
        'add_new' => _x('Add New', '"Header Slider" item'),
        'add_new_item' => __('Add "Header Slider" Item'),
        'edit_item' => __('Edit "Header Slider" Item'),
        'new_item' => __('New "Header Slider" Item'),
        'view_item' => __('View "Header Slider" Item'),
        'search_items' => __('Search "Header Slider"'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => '',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        // 'menu_icon' => get_stylesheet_directory_uri() . '/images/support.png',
        'rewrite' => array(
            'slug' => 'header_slider',
            'with_front' => false
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail','comments')
    );

    register_post_type('header_slider', $args);
    flush_rewrite_rules();
}


add_action("manage_posts_custom_column", "headerslider_custom_columns");
add_filter("manage_edit-header_slider_columns", "headerslider_edit_columns");

function headerslider_edit_columns($columns) {
    $columns = array(
        "cb" => "&lt;input type='checkbox' /&gt;",
        "title" => __('Title'),
        "thumbnail" => __('Thumbnail slider'),

    );

    return $columns;
}

function headerslider_custom_columns($column) {
    global $post;
    switch ($column) {

        case "thumbnail" : 
            if (has_post_thumbnail($post->ID))
                echo get_the_post_thumbnail($post->ID, array(50, 50));

            break;
    }
}
?>
