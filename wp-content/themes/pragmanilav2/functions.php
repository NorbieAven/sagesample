<?php

// set up
add_theme_support('menus');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','gallery'));
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
add_theme_support( 'custom-header', $chargs );
//includes
include( get_template_directory() .'/includes/front/enqueue.php');
include( get_template_directory() .'/includes/setup.php');
include( get_template_directory() .'/includes/front/blogpost.php');
include( get_template_directory() .'/includes/front/widgets.php');
include( get_template_directory() .'/includes/widgets/widget-news.php');
include( get_template_directory() .'/includes/front/nav.php');

//actions & filter hooks
add_action( 'wp_enqueue_scripts', 'psi_enqueue' );
add_action('init', 'psi_setup_theme');
add_filter('excerpt_length', 'set_excerpt_length');
add_action('widgets_init','wp_init_widgets');
add_action('customize_register','wpb_customize_register');
add_action( 'customize_register' , array( 'MyTheme_Customize' , 'register' ) );
add_action( 'wp_head' , array( 'MyTheme_Customize' , 'header_output' ) );
add_action( 'customize_preview_init' , array( 'MyTheme_Customize' , 'live_preview' ) );
add_action('Sydney_Latest_News extends WP_Widget','wp_init_widgets');

//require
require get_template_directory() . "/includes/front/customizer.php";
require get_template_directory() . "/includes/front/customizer-theme.php";


