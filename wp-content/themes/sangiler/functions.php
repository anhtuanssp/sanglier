<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   // wp_deregister_script('jquery');
	   // wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   // wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Footer info widget',
            'id'   => 'footer-info-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Footer coppy right info widget',
            'id'   => 'footer-copy-right',
            'description'   => 'These are widgets for coppy right label.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Footer block widget',
            'id'   => 'footer-block-right',
            'description'   => 'These are widgets',
            'before_widget' => '<div id="%1$s" class="footer-block">',
            'after_widget'  => '</div>',
            'before_title'  => '<span class="lb-footer">',
            'after_title'   => '</span>'
        ));
    }

    // support thumbnail
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    //Main Menu
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'primary_menu' => 'HEADER MENU'
            )
        );
    }
    // POSTTYPE
    include(TEMPLATEPATH.'/posttype/header-slider.php');
    include(TEMPLATEPATH.'/posttype/sponsor.php');
    include(TEMPLATEPATH.'/inc/theme_option.php');

?>