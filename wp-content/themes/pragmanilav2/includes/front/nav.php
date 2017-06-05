<?php 

/**
 * Registers a new setting for 'Link Color' in the WordPress Theme Customizer
 * that will allow users to change the color of their anchors across the
 * entire site
 *
 * Note that functions prefixed with 'tmx' stand for 'Tom McFarlin Example.'
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    tmx
 */
function tmx_register_theme_customizer( $wp_customize ) {

	/**
   	 * Adds the setting with the unique id of 'tmx_link_color'. 
   	 *
   	 * Also defines the transport method to 'postMessage' so that 
   	 * we can use JavaScript to dynamically change the color without 
   	 * using the default method of 'refresh.'
   	 */
	$wp_customize->add_setting(
		'tmx_content_color',
		array(
		   'default'           => $defaults['menu_items_color'], // change this to default color
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
		)
  	);

	/**
   	 * Introduces a new color control to the Theme Customizer in the
	 * 'Colors' section. This is the actual control that will allow
	 * a user to pick a color.
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tmx_content_color',
			array(
		       'label' 	=> __('Content color', 'norbie'),
                'section' 	=> 'colors',
                'priority' 	=> 13
			)
		)
	);

	$wp_customize->add_setting( 'link-hover-color', array(
        'default'        => '#777',
        'type'           => 'theme_mod',
        'transport'      => 'postMessage',
        'capability'     => 'edit_theme_options',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link-hover-color', array(
        'label'   => __( 'Link Color (hover)' ),
        'section' => 'colors',
        'settings'   => 'link-hover-color',
    ) ) );


  $wp_customize->add_setting(
        'site_header_color',
        array(
            'default'           => $defaults['site_header_color'], //chnage this to default color
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'site_header_color',
            array(
                'label' 	=> __('Header (menu background)', 'norbie'),
                'section' 	=> 'colors',
                'priority' 	=> 14
            )
        )
    ); 
       $wp_customize->add_setting(
        'menu_items_color',
        array(
            'default'           => $defaults['menu_items_color'], // change this to default color
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_items_color',
            array(
                'label' 	=> __('Menu items', 'norbie'),
                'section' 	=> 'colors',
                'priority' 	=> 15
            )
        )
    );

     $wp_customize->add_setting(
        'footer_bg_color',
        array(
            'default'           => $defaults['footer_bg_color'],//change this to deafult color
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_bg_color',
            array(
                'label'     => __('Footer background', 'talon'),
                'section'   => 'colors',
                'priority'  => 18
            )
        )
    );
        $wp_customize->add_setting(
        'footer_color',
        array(
            'default'           => $defaults['footer_color'], //change this to default color
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_color',
            array(
                'label'     => __('Footer text color', 'talon'),
                'section'   => 'colors',
                'priority'  => 19
            )
        )
    );
    //Menu style
    $wp_customize->add_section(
        'talon_menu_style',
        array(
            'title'         => __('Menu style', 'talon'),
            'priority'      => 16,
            'panel'         => 'talon_header_panel', 
        )
    );
    //Sticky menu
    $wp_customize->add_setting(
        'sticky_menu',
        array(
            'default'           =>  $defaults['sticky_menu'],
            'sanitize_callback' => 'talon_sanitize_sticky',
        )
    );
    $wp_customize->add_control(
        'sticky_menu',
        array(
            'type' => 'radio',
            'priority'    => 10,
            'label' => __('Sticky menu', 'talon'),
            'section' => 'talon_menu_style',
            'choices' => array(
                'sticky'   => __('Sticky', 'talon'),
                'static'   => __('Static', 'talon'),
            ),
        )
    );
    //Menu style
    $wp_customize->add_setting(
        'menu_style',
        array(
            'default'           => $defaults['menu_style'],
            'sanitize_callback' => 'talon_sanitize_menu_style',
            //'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'menu_style',
        array(
            'type'      => 'radio',
            'priority'  => 11,
            'label'     => __('Menu style', 'talon'),
            'section'   => 'talon_menu_style',
            'choices'   => array(
                'inline'     => __('Inline', 'talon'),
                'centered'   => __('Centered', 'talon'),
            ),
        )
    );

} // end tcx_register_theme_customizer
add_action( 'customize_register', 'tmx_register_theme_customizer' );

/**
 * Registers the Theme Customizer Preview JavaScript with WordPress.
 *
 * @package    tmx
 */
function tmx_customizer_live_preview() {

	wp_enqueue_script(
		'tmx-theme-customizer',
		get_template_directory_uri() . '/js/theme-customizer.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);

} // end tcx_customizer_live_preview
add_action( 'customize_preview_init', 'tmx_customizer_live_preview' );

//Menu style
function talon_sanitize_menu_style( $input ) {
    if ( in_array( $input, array( 'inline', 'centered' ), true ) ) {
        return $input;
    }
}
//Menu style
function talon_sanitize_sticky( $input ) {
    if ( in_array( $input, array( 'sticky', 'static' ), true ) ) {
        return $input;
    }
}