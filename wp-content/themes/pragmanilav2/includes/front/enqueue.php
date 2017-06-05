<?php 

  function psi_enqueue() {
  	//register_style
  	wp_register_style( 'psi_bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');
  	wp_register_style( 'psi_css', get_template_directory_uri() .'/css/template.css');

  	//enqueue_style
  	wp_enqueue_style('psi_bootstrap');
  	wp_enqueue_style('psi_css');

  	//register_script
 	wp_register_script('psi_js_bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', array(), false, true); 
  wp_register_script('psi_js_navshrink', get_template_directory_uri() .'/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), '20160909', true );
    wp_register_script('psi_navbar', get_template_directory_uri() .'/js/navbar.js', array(), false, true);
  	//enqueue_script
  	wp_enqueue_script('psi_js_bootstrap');
    wp_enqueue_script('psi_js_navshrink');
  	wp_enqueue_script('psi_js_ajax_googleapis');
  	wp_enqueue_script('jquery');
    wp_enqueue_script('psi_navbar');


    //enqueue_shortcode
    wp_enqueue_media();
  }