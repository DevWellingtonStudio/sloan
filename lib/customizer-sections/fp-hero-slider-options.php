<?php

	/* Hero Slider Customizer options */

	// Add Hero Slider Section
	$wp_customize->add_section( 'hero-slider', array(
		'title' => __( 'Hero Slider', 'wellington-studio' ),
		'priority' => 10,
		'panel' =>  'wellington',
		'active_callback'  =>  function() { return is_front_page() || is_home(); }
	));
	// Hero Slider Image #1
	$wp_customize -> add_setting ( 'wst_slider1', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'refresh'
	));
	$wp_customize -> add_control (
		new WP_Customize_Image_Control (
			$wp_customize,
			'wst_slider1',
			array (
				'label'             => __('Slider Image, One'),
				'section'           => 'hero-slider',
				'settings'          => 'wst_slider1',
				'priority'          => 10,
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Slider #1 Title
	$wp_customize->add_setting( 'slider1title', array(
		'default' 	        =>	'',
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'slider1title', array(
		'label'	    =>	__('Slider 1 Title', 'wellington-studio' ),
		'section'	  =>	'hero-slider',
		'settings'	=>	'slider1title',
		'type'	    =>  'text'
	));
	$wp_customize->selective_refresh->add_partial( 'slider1title', array(
			'selector'        =>  '#slider-one .carousel-caption .slider-one-title',
			'settings'        =>  'slider1title',
			'render_callback' => function() {
				return get_theme_mod('slider1title');
			}
		)
	);
	// Slider #1 Text Area
	$wp_customize->add_setting( 'slider1text', array(
		'default'	          =>	'',
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'wp_kses_post'
	));
	$wp_customize->add_control( 'slider1text', array(
		'label'	    =>	__('Slider 1 Text Area', 'wellington-studio' ),
		'section'	  =>	'hero-slider',
		'settings'	=>	'slider1text',
		'type'	    =>  'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'slider1text', array(
			'selector'  =>  '#slider-one .carousel-caption .slider-one-text',
			'settings'  =>  'slider1text',
			'render_callback' => function() {
				return get_theme_mod('slider1text');
			}
		)
	);
	// Hero Slider Image #2
	$wp_customize -> add_setting ( 'wst_slider2', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'refresh'
	));
	$wp_customize -> add_control (
		new WP_Customize_Image_Control (
			$wp_customize,
			'wst_slider2',
			array (
				'label'             => __('Slider Image, Two'),
				'section'           => 'hero-slider',
				'settings'          => 'wst_slider2',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Slider #2 Title
	$wp_customize->add_setting( 'slider2title', array(
		'default'	          =>	'',
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'slider2title', array(
		'label'	    =>	__('Slider 2 Title', 'wellington-studio' ),
		'section'	  =>	'hero-slider',
		'settings'	=>	'slider2title',
		'type'	    =>  'text'
	));
	$wp_customize->selective_refresh->add_partial( 'slider2title', array(
			'selector'  =>  '#slider-two .carousel-caption .slider-two-title',
			'settings'  =>  'slider2title',
			'render_callback' => function() {
				return get_theme_mod('slider2title');
			}
		)
	);
	// Slider #2 text area
	$wp_customize->add_setting( 'slider2text', array(
		'default'	          =>	'',
		'type'	            => 'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'wp_kses_post'
	));
	$wp_customize->add_control( 'slider2text', array(
		'label'	    =>	__('Slider 2 Text Area', 'wellington-studio' ),
		'section'	  =>	'hero-slider',
		'settings'	=>	'slider2text',
		'type'	    =>  'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'slider2text', array(
			'selector'  =>  '#slider-two .carousel-caption .slider-two-text',
			'settings'  =>  'slider2text',
			'render_callback' => function() {
				return get_theme_mod('slider2text');
			}
		)
	);
	// Hero slider image #3
	$wp_customize -> add_setting ( 'wst_slider3', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'refresh'
	));
	$wp_customize -> add_control (
		new WP_Customize_Image_Control (
			$wp_customize,
			'wst_slider3',
			array (
				'label'             => __('Slider Image, Three'),
				'section'           => 'hero-slider',
				'settings'          => 'wst_slider3',
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	// Slider #3 title
	$wp_customize->add_setting( 'slider3title', array(
		'default'	          =>	'',
		'type'	            => 'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'slider3title', array(
		'label'	    =>	__('Slider 3 Title', 'wellington-studio' ),
		'section'	  =>	'hero-slider',
		'settings'	=>	'slider3title',
		'type'	    => 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'slider3title', array(
			'selector'        =>  '#slider-three .carousel-caption .slider-three-title',
			'settings'        =>  'slider3title',
			'render_callback' =>  function() {
				return get_theme_mod('slider3title');
			}
		)
	);
// Slider #3 Text Area
	$wp_customize->add_setting( 'slider3text', array(
		'default'         	=>	'',
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'wp_kses_post'
	));
	$wp_customize->add_control( 'slider3text', array(
		'label'	    =>	__('Slider 3 Text Area', 'wellington-studio' ),
		'section'	  =>	'hero-slider',
		'settings'	=>	'slider3text',
		'type'	    => 'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'slider3text', array(
			'selector'  =>  '#slider-three .carousel-caption .slider-three-text',
			'settings'  =>  'slider3text',
			'render_callback' => function() {
				return get_theme_mod('slider3text');
			}
		)
	);
