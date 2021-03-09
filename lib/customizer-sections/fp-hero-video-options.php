<?php

	/* Hero Video Customizer options */

	// Add hero section on front page only
	$wp_customize->add_section( 'hero-section', array(
		'title' => __( 'Hero Video', 'wellington-studio' ),
		'priority'  => 0,
		'panel' =>  'wellington',
		'active_callback'  =>  function() { return is_front_page() || is_home(); }
	));
	// Hero URL setting
	$wp_customize -> add_setting ( 'hero_url', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'transport'						=> 'refresh',
		'sanitize_callback'   => 'esc_url'
	));
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'hero_url', array (
				'label'			  => __( 'Hero Video URL', 'wellington-studio' ),
				'description' => __('Recommend a Google Cloud based video source. YouTube will produce a blurry display.', 'wellington-studio'),
				'section'		  => 'hero-section',
				'settings'	  => 'hero_url',
				'type'			  => 'url',
				'priority'	  => 10,
			)
		)
	);
	// Hero Video Title
	$wp_customize->add_setting('hero_video_title', array(
		'default'   =>  '',
		'type'			=> 'theme_mod',
		'transport' => 'postMessage'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control (
			$wp_customize,
		'hero_video_title', array(
				'label'     => __('Title', 'wellington-studio'),
				'section'   => 'hero-section',
				'settings'  => 'hero_video_title',
				'type'      => 'text',
				'priority'	  => 10
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'hero_video_title', array(
			'selector'  =>  '#hero-video-text .display-3',
			'settings'  =>  'hero_video_title',
			'render_callback' => function() {
				return get_theme_mod('hero_video_title');
			}
		)
	);
	// Hero video text area
	$wp_customize->add_setting('hero_video_text', array(
			'default'   =>  '',
			'type'			=> 'theme_mod',
			'transport' => 'postMessage'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control (
			$wp_customize,
			'hero_video_text', array(
				'label'     => __('Text Area', 'wellington-studio'),
				'section'   => 'hero-section',
				'settings'  => 'hero_video_text',
				'type'      => 'textarea',
				'priority'	  => 10
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'hero_video_text', array(
			'selector'  =>  '#hero-video-text .lead',
			'settings'  =>  'hero_video_text',
			'render_callback' => function() {
				return get_theme_mod('hero_video_text');
			}
		)
	);
