<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/resources/imgs/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/resources/imgs/favicon.ico"  type="image/x-icon">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/themes/general.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/themes/default/default.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/libs/bxslider/jquery.bxslider.css">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

    <!-- HEADER -->
    <div id="header" class="block block-full blue-bg">

        <div class="header-slider block block-wrapper">

            <div class="header-slider-wrapper">
                
                <ul>
                    <?php
                        /*
                         * GET HEADER SLIDER
                         *
                         */
                        global $post;
                        $argsHeaderSlider = array('numberposts' => 3, 'post_type' => 'header_slider','orderby' => 'DESC');
                        $custom_postsHeaderSlider = get_posts($argsHeaderSlider);
                        foreach ($custom_postsHeaderSlider as $post) : setup_postdata($post);
                    ?>
                        <li>
                           <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                        </li>
                    <?php 
                        endforeach;
                        /*
                         * GET HEADER SLIDER
                         *
                         */
                    ?>
                </ul>
                
            </div>
            
            <div class="block-ct">
                <div class="logo-wrapper">
                    <img src="<?php echo get_option('logo_src'); ?>" height="504" width="546" alt="" class="logo-site">
                </div>
                <div class="date-countdown-header">
                    <span class="lb-header-cd">26 & 27</span>
                    <span class="lb-header-cd september">SEPTEMPER, 2015</span>

                    <span class="pontalier">PONTALIER</span>
                </div>
            </div>


        </div>

        <!-- MENU -->
        <div class="menu-wrapper">
            <div class="menu-content-wp block-ct">
                <ul>                
                <!-- PRIMARY MENU -->
                <?php
                    wp_nav_menu(array('theme_location'=>'primary_menu','menu' => 'Main Menu', 'container' => '',
                        'menu_class' => ''
                    ));
                ?> 
                <!-- PRIMARY MENU -->
                </ul>
            </div>
        </div>
        <!-- MENU -->
    </div>
    <!-- END HEADER -->
