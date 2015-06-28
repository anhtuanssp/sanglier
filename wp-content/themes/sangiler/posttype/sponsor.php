<?php
add_action('init', 'sponsor_register');

function sponsor_register() {
    $labels = array(
        'name' => _x('Sponsor', 'post type general name'),
        'singular_name' => _x('Sponsors', 'post type singular name'),
        'add_new' => _x('Add New', '"Sponsor" item'),
        'add_new_item' => __('Add "Sponsor" Item'),
        'edit_item' => __('Edit "Sponsor" Item'),
        'new_item' => __('New "Sponsor" Item'),
        'view_item' => __('View "Sponsor" Item'),
        'search_items' => __('Search "Sponsor"'),
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
            'slug' => 'sponsor',
            'with_front' => false
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail','comments')
    );

    register_post_type('sponsor', $args);
    flush_rewrite_rules();
}


add_action("manage_posts_custom_column", "sponsor_custom_columns");
add_filter("manage_edit-sponsor_columns", "sponsorr_edit_columns");

function sponsorr_edit_columns($columns) {
    $columns = array(
        "cb" => "&lt;input type='checkbox' /&gt;",
        "title" => __('Title'),
        "thumbnail" => __('Thumbnail sponsor'),

    );

    return $columns;
}

function sponsor_custom_columns($column) {
    global $post;
    switch ($column) {

        case "thumbnail" : 
            if (has_post_thumbnail($post->ID))
                // echo get_the_post_thumbnail($post->ID, array(50, 50));
            // else
            //     echo '<em>no thumbnail</em>';
            break;
    }
}


add_action("admin_init", "admin_init_custom_sponsor_field");

function admin_init_custom_sponsor_field() {
    add_meta_box('sponsor-meta', 'Link ', 'sponsor_item', 'sponsor', 'side', 'low');
}

function sponsor_item() {
    global $post;
    $custom = get_post_custom($post->ID);
    $sponsor_link_item = $custom["sponsor_link_item"][0];
    ?>
    <label>LINK :</label></br>
    <input name="sponsor_link_item" value="<?php echo $sponsor_link_item; ?>" /></br>
    <?php
}

// save 
add_action('save_post', 'save_details_sponsor');

function save_details_sponsor() {
    global $post;
    update_post_meta($post->ID, "sponsor_link_item", $_POST["sponsor_link_item"]);
}
?>
