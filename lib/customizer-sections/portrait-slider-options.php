<?php
// Add portrait slider section
	$wp_customize->add_section( 'portrait-slider', array(
		'title' => __( 'Portrait Slider', 'wellington-studio' ),
		'priority' => 10,
		'panel' =>  'wellington',
		'active_callback'  =>  function() { return is_front_page() || is_home(); }
	));

	// Portrait Slider #1 Image
	$wp_customize -> add_setting ( 'port_slider1', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'refresh'
	));
	$wp_customize -> add_control (
		new WP_Customize_Image_Control (
			$wp_customize,
			'port_slider1',
			array (
				'label'             => __('Portrait #1 Slider Image'),
				'section'           => 'portrait-slider',
				'settings'          => 'port_slider1',
				'priority'          => 10,
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'port_slider1', array(
			'selector'  =>  '#portrait-item-one .card .row .portrait-image',
			'settings'  =>  'port_slider1',
			'render_callback' => function() {
				return get_theme_mod('port_slider1');
			}
		)
	);

	// Portrait Slider #1 Background Color
	$wp_customize->add_setting ( 'slider1_bg', array(
		'default'						=>  '#000',
		'type'							=>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color'
	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider1_bg', array(
				'label'			=> __('Slider #1 Background Color', 'wellington-studio' ),
				'priority'		=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider1_bg'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider1_bg', array(
			'selector'  =>  '#portrait-item-one .card .row .card-body-wrapper',
			'settings'  =>  'slider1_bg',
			'render_callback' => function() {
				return self::css('#portrait-item-one .card .row .card-body-wrapper', 'background-color', 'slider1_bg');
			}
		)
	);
	// Portrait Slider #1 Title Color
	$wp_customize->add_setting ( 'slider1_title_color', array(
		'default'						=>  '#fff',
		'type'							=>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color',
	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider1_title_color', array(
				'label'			=> __('Slider #1 Title Color', 'wellington-studio' ),
				'priority'		=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider1_title_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider1_title_color', array(
			'selector'  =>  '.slider-one-title-color',
			'settings'  =>  'slider1_title_color',
			'render_callback' => function() {
				return self::css('#portrait-item-one .card .row .card-body-wrapper .card-body h1', 'color', 'slider1_title_color');
			}
		)
	);
	// Portrait Slider #1 Text Color
	$wp_customize->add_setting ( 'slider1_text_color', array(
		'default'						=>  '#fff',
		'type'							=>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color',

	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider1_text_color', array(
				'label'			=> __('Slider #1 Text Color', 'wellington-studio' ),
				'priority'	=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider1_text_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider1_text_color', array(
			'selector'  =>  '#portrait-item-one',
			'settings'  =>  'slider1_text_color',
			'render_callback' => function() {
				return self::css('#portrait-item-one', 'color', 'slider1_text_color');
			}
		)
	);
	// Portrait Slider #1 Button Text Color
	$wp_customize->add_setting ( 'slider1_btn_text_color', array(
		'default'						=> '#fff',
		'type'							=> 'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider1_btn_text_color', array(
				'label'			=> __('Slider #1 Button Text Color', 'wellington-studio' ),
				'priority'	=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider1_btn_text_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider1_btn_text_color', array(
			'selector'        =>  '.btn-1 h5',
			'settings'        =>  'slider1_btn_text_color',
			'render_callback' => function() {
				echo self::css('.btn-1 h5', 'color', 'slider1_btn_text_color');
			}
		)
	);
	// Portrait Slider #1 Button Color
	$wp_customize->add_setting ( 'slider1_btn_color', array(
		'default'						=>  '#000',
		'type'							=>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color',
	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider1_btn_color', array(
				'label'			=> __('Slider #1 Button Color', 'wellington-studio' ),
				'priority'	=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider1_btn_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider1_btn_color', array(
			'selector'  =>  '#btn-one-link',
			'settings'  =>  'slider1_btn_color',
			'render_callback' => function() {
				return self::css('#btn-one-link', 'background-color', 'slider1_btn_color');
			}
		)
	);
	// Portrait Slider #1 Title
	$wp_customize->add_setting( 'p-slider-title1', array(
		'default'	          =>	__('Portrait Slider #1 Title', 'wellington-studio'),
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'p-slider-title1', array(
		'label'	=>	__('Portrait Slider #1 Title', 'wellington-studio' ),
		'section'	=>	'portrait-slider',
		'settings'	=>	'p-slider-title1',
		'type'	=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'p-slider-title1', array(
			'selector'  =>  '#portrait-one-slider-title',
			'settings'  =>  'p-slider-title1',
			'render_callback' => function() {
				return get_theme_mod('p-slider-title1');
			}
		)
	);
	// Portrait Slider #1 Text Area
	$wp_customize->add_setting( 'p-slider-text1', array(
		'default'	          =>	__('Portrait Slider # Text Area', 'wellington-studio'),
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'p-slider-text1', array(
		'label'	=>	__('Portrait Slider #1 Text Area ', 'wellington-studio' ),
		'section'	=>	'portrait-slider',
		'settings'	=>	'p-slider-text1',
		'type'	=> 'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'p-slider-text1', array(
			'selector'  =>  '#portrait-one-slider-text',
			'settings'  =>  'p-slider-text1',
			'render_callback' => function() {
				return get_theme_mod('p-slider-text1');
			}
		)
	);
	// Portrait #1 Button Link
	$wp_customize->add_setting ( 'port1_btn_url', array(
		'default'	=> __('#', 'wellington-studio'),
		'type'		=> 'theme_mod',
		'sanitize_callback' => 'esc_url',
	));
	$wp_customize->add_control ( 'port1_btn_url' , array(
		'type'	=>	'url',
		'section'	=>	'portrait-slider',
		'label'	=>	__( 'Portrait #1 Button Link', 'wellington-studio' ),
		'settings'	=> 'port1_btn_url',
		'description'	=>	__('Add Button Link'),
	));
	$wp_customize->selective_refresh->add_partial( 'port1_btn_url', array(
			'selector'  =>  '.btn-1-link',
			'settings'  =>  'port1_btn_url',
			'render_callback' => function() {
				return get_theme_mod('port1_btn_url');
			}
		)
	);

	/** Portrait Slider #2
	 *
	 */

	// Portrait Slider #2 Image
	$wp_customize -> add_setting ( 'port_slider2', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'postMessage'
	));
	$wp_customize -> add_control (
		new WP_Customize_Image_Control (
			$wp_customize,
			'port_slider2',
			array (
				'label'             => __('Portrait #2 Slider Image'),
				'section'           => 'portrait-slider',
				'settings'          => 'port_slider2',
				'priority'          => 10,
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'port_slider2', array(
			'selector'  =>  '#portrait-item-two .card .row .portrait-image',
			'settings'  =>  'port_slider2',
			'render_callback' => function() {
				return get_theme_mod('port_slider2');
			}
		)
	);
	// Portrait Slider #2 Background Color
	$wp_customize->add_setting ( 'slider2_bg', array(
		'default'						=>  '#000',
		'type'							=>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color',

	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider2_bg', array(
				'label'			=> __('Slider #2 Background Color', 'wellington-studio' ),
				'priority'	=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider2_bg'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider2_bg', array(
			'selector'  =>  '#portrait-item-two .card .row .card-body-wrapper',
			'settings'  =>  'slider2_bg',
			'render_callback' => function() {
				return self::css('#portrait-item-two .card .row .card-body-wrapper', 'background-color', 'slider2_bg');
			}
		)
	);
	// Portrait Slider #2 Title Color
	$wp_customize->add_setting ( 'slider2_title_color', array(
		'default'						=> '#fff',
		'type'							=> 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback'	=> 'sanitize_hex_color',

	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider2_title_color', array(
				'label'			=> __('Slider #2 Title Color', 'wellington-studio' ),
				'priority'	=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider2_title_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider2_title_color', array(
			'selector'        =>  '.slider-two-title-color',
			'settings'        =>  'slider2_title_color',
			'render_callback' => function() {
				return self::css('#portrait-item-two .card .row .card-body-wrapper .card-body h1', 'color', 'slider2_title_color');
			}
		)
	);
	// Portrait Slider #2 Text Color
	$wp_customize->add_setting ( 'slider2_text_color', array(
		'default'						=>  '#fff',
		'type'							=>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color',

	));
// Portrait Slider #2 Text Color
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider2_text_color', array(
				'label'			=> __('Slider #2 Text Color', 'wellington-studio' ),
				'priority'		=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider2_text_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider2_text_color', array(
			'selector'  =>  '#portrait-item-two',
			'settings'  =>  'slider2_text_color',
			'render_callback' => function() {
				return self::css('#portrait-item-two .card .row .card-body-wrapper .card-body p', 'color', 'slider2_text_color');
			}
		)
	);
	// Portrait Slider #2 Button Text Color
	$wp_customize->add_setting ( 'slider2_btn_text_color', array(
		'default'						=> '#fff',
		'type'								=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',

	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider2_btn_text_color', array(
				'label'			=> __('Slider #2 Button Text Color', 'wellington-studio' ),
				'priority'		=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider2_btn_text_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider2_btn_text_color', array(
			'selector'        =>  '.btn-2 h5',
			'settings'        =>  'slider2_btn_text_color',
			'render_callback' => function() {
				echo self::css('.btn-2 h5', 'color', 'slider2_btn_text_color');
			}
		)
	);
	// Portrait Slider #2 Button Color
	$wp_customize->add_setting ( 'slider2_btn_color', array(
		'default'						=>  '#000',
		'type'							=>  'theme_mod',
		'tranport'          =>  'postMessage',
		'sanitize_callback'	=>  'sanitize_hex_color',

	));
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider2_btn_color', array(
				'label'			=> __('Slider #2 Button Color', 'wellington-studio' ),
				'priority'	=>  10,
				'section'		=> 'portrait-slider',
				'settings'	=> 'slider2_btn_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider2_btn_color', array(
			'selector'  =>  '#btn-two-link',
			'settings'  =>  'slider2_btn_color',
			'render_callback' => function() {
				return self::css('#btn-two-link', 'background-color', 'slider2_btn_color');
			}
		)
	);
	// Portrait Slider #2 Title
	$wp_customize->add_setting( 'p-slider-title2', array(
		'default'	          =>	__('Slider #2 Title', 'wellington-studio'),
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'p-slider-title2', array(
		'label'	    =>	__('Portrait Slider #2 Title', 'wellington-studio' ),
		'section'	  =>	'portrait-slider',
		'settings'	=>	'p-slider-title2',
		'type'	    => 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'p-slider-title2', array(
			'selector'  =>  '#portrait-two-slider-title',
			'settings'  =>  'p-slider-title2',
			'render_callback' => function() {
				return get_theme_mod('p-slider-title2');
			}
		)
	);
	// Portrait Slider #2 Text Area
	$wp_customize->add_setting( 'p-slider-text2', array(
		'default'	          =>	__('Slider #2 text area','wellington-studio'),
		'type'	            =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback'	=>	'sanitize_text_field'
	));
	$wp_customize->add_control( 'p-slider-text2', array(
		'label'	=>	__('Portrait Slider #2 Text Area ', 'wellington-studio' ),
		'section'	=>	'portrait-slider',
		'settings'	=>	'p-slider-text2',
		'type'	=> 'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'p-slider-text2', array(
			'selector'  =>  '#portrait-two-slider-text',
			'settings'  =>  'p-slider-text2',
			'render_callback' => function() {
				return get_theme_mod('p-slider-text2');
			}
		)
	);
	// Portrait #2 Button Link
	$wp_customize->add_setting ( 'port2_btn_url', array(
		'default'	          =>  __('#', 'wellington-studio'),
		'type'		          =>  'theme_mod',
		'transport'         =>  'refresh',
		'sanitize_callback' =>  'esc_url',
	));
	$wp_customize->add_control ( 'port2_btn_url' , array(
		'type'	=>	'url',
		'section'	=>	'portrait-slider',
		'label'	=>	__( 'Portrait #2 Button Link', 'wellington-studio' ),
		'settings'	=> 'port2_btn_url',
		'description'	=>	__('Add Button Link'),
	));
	$wp_customize->selective_refresh->add_partial( 'port2_btn_url', array(
			'selector'  =>  '.btn-2-link',
			'settings'  =>  'port2_btn_url',
			'render_callback' => function() {
				return get_theme_mod('port2_btn_url');
			}
		)
	);

	/**
	 * Portrait Slider #3
	 * */

	// Portrait Slider #3 Image
	$wp_customize->add_setting( 'port_slider3', array(
		'default'   => '',
		'type'      => 'theme_mod',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control (
			$wp_customize,
			'port_slider3',
			array(
				'label'             => __( 'Portrait #3 Slider Image' ),
				'section'           => 'portrait-slider',
				'settings'          => 'port_slider3',
				'priority'          => 10,
				'sanitize_callback' => 'esc_url_raw',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'port_slider3', array(
			'selector'  =>  '#portrait-item-three .card .row .portrait-image',
			'settings'  =>  'port_slider3',
			'render_callback' => function() {
				return get_theme_mod('port_slider3');
			}
		)
	);
	// Portrait Slider #3 Background Color
	$wp_customize->add_setting( 'slider3_bg', array(
		'default'           =>  '#000',
		'type'              =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback' =>  'sanitize_hex_color',

	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider3_bg', array(
				'label'    => __( 'Slider #3 Background Color', 'wellington-studio' ),
				'priority' => 10,
				'section'  => 'portrait-slider',
				'settings' => 'slider3_bg'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider3_bg', array(
			'selector'  =>  '#portrait-item-three .card .row .card-body-wrapper',
			'settings'  =>  'slider3_bg',
			'render_callback' => function() {
				return self::css('#portrait-item-three .card .row .card-body-wrapper', 'background-color', 'slider3_bg');
			}
		)
	);
	// Portrait Slider #3 Title Color
	$wp_customize->add_setting( 'slider3_title_color', array(
		'default'           => '#fff',
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider3_title_color', array(
				'label'    => __( 'Slider #3 Title Color', 'wellington-studio' ),
				'priority' => 10,
				'section'  => 'portrait-slider',
				'settings' => 'slider3_title_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider3_title_color', array(
			'selector'        =>  '.slider-three-title-color',
			'settings'        =>  'slider3_title_color',
			'render_callback' => function() {
				echo self::css('#portrait-item-three .card .row .card-body-wrapper .card-body h1', 'color', 'slider3_title_color');
			}
		)
	);
	// Portrait Slider #3 Text Color
	$wp_customize->add_setting( 'slider3_text_color', array(
		'default'           =>  '#fff',
		'type'              =>  'theme_mod',
		'transport'         =>  'refresh',
		'sanitize_callback' =>  'sanitize_hex_color',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider3_text_color', array(
				'label'    =>   __( 'Slider #3 Text Color', 'wellington-studio' ),
				'priority' =>   10,
				'section'  =>   'portrait-slider',
				'settings' =>   'slider3_text_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider3_text_color', array(
			'selector'  =>  '#portrait-item-three',
			'settings'  =>  'slider3_text_color',
			'render_callback' => function() {
				return self::css('#portrait-item-three .card .row .card-body-wrapper .card-body p', 'color', 'slider3_text_color');
			}
		)
	);
	// Portrait Slider #3 Button Text Color
	$wp_customize->add_setting( 'slider3_btn_text_color', array(
		'default'           => '#fff',
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',

	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider3_btn_text_color', array(
				'label'    => __( 'Slider #3 Button Text Color', 'wellington-studio' ),
				'priority' => 10,
				'section'  => 'portrait-slider',
				'settings' => 'slider3_btn_text_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider3_btn_text_color', array(
			'selector'        =>  '.btn-3 h5',
			'settings'        =>  'slider3_btn_text_color',
			'render_callback' => function() {
				echo self::css('.btn-3 h5', 'color', 'slider3_btn_text_color');
			}
		)
	);
	// Portrait Slider #3 Button Color
	$wp_customize->add_setting( 'slider3_btn_color', array(
		'default'           => '#000',
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',

	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control (
			$wp_customize,
			'slider3_btn_color', array(
				'label'    => __( 'Slider #3 Button Color', 'wellington-studio' ),
				'priority' => 10,
				'section'  => 'portrait-slider',
				'settings' => 'slider3_btn_color'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slider3_btn_color', array(
			'selector'  =>  '#btn-three-link',
			'settings'  =>  'slider3_btn_color',
			'render_callback' => function() {
				return self::css('#btn-three-link', 'background-color', 'slider3_btn_color');
			}
		)
	);
	// Portrait Slider #3 Title
	$wp_customize->add_setting( 'p-slider-title3', array(
		'default'           =>  __('Portrait Slider Title #3', 'wellington-studio'),
		'type'              =>  'theme_mod',
		'transport'         =>  'postMessage',
		'sanitize_callback' =>  'sanitize_text_field'
	) );
	$wp_customize->add_control( 'p-slider-title3', array(
		'label'    => __( 'Portrait Slider #3 Title', 'wellington-studio' ),
		'section'  => 'portrait-slider',
		'settings' => 'p-slider-title3',
		'type'     => 'text'
	) );
	$wp_customize->selective_refresh->add_partial( 'p-slider-title3', array(
			'selector'  =>  '#portrait-three-slider-title',
			'settings'  =>  'p-slider-title3',
			'render_callback' => function() {
				return get_theme_mod('p-slider-title3');
			}
		)
	);
	// Portrait Slider #3 Text Area
	$wp_customize->add_setting( 'p-slider-text3', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'p-slider-text3', array(
		'label'    => __( 'Portrait Slider #3 Text Area ', 'wellington-studio' ),
		'section'  => 'portrait-slider',
		'settings' => 'p-slider-text3',
		'type'     => 'textarea'
	) );
	$wp_customize->selective_refresh->add_partial( 'p-slider-text3', array(
			'selector'  =>  '#portrait-three-slider-text',
			'settings'  =>  'p-slider-text3',
			'render_callback' => function() {
				return get_theme_mod('p-slider-text3');
			}
		)
	);
	// Portrait #3 Button Link
	$wp_customize->add_setting( 'port3_btn_url', array(
		'default'           => __('#', 'wellington-studio'),
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control( 'port3_btn_url', array(
		'type'        => 'url',
		'section'     => 'portrait-slider',
		'label'       => __( 'Portrait #3 Button Link', 'wellington-studio' ),
		'settings'    => 'port3_btn_url',
		'description' => __( 'Add Button Link' ),
	) );
	$wp_customize->selective_refresh->add_partial( 'port3_btn_url', array(
			'selector'  =>  '.btn-3-link',
			'settings'  =>  'port3_btn_url',
			'render_callback' => function() {
				return get_theme_mod('port3_btn_url');
			}
		)
	);
