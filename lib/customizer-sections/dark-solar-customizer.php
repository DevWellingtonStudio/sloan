<?php
	/** Dark Solar Customizer Settings */

	// Add Hero Slider Section
	$wp_customize->add_section( 'dark-solar', array(
		'title' => __( 'Dark Solar Template', 'wellington-studio' ),
		'priority' => 10,
		'panel' =>  'wellington',
		'active_callback'		=> function() { return is_page_template('templates/dark-solar.php');}
	));

	// Color selector for top feature row
	$wp_customize->add_setting('top_setting_row', array(
		'default'   =>  '#000',
		'transport' =>  'postMessage',
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'top_setting_row', array(
				'label'     =>  __('Background Color For Top Feature Row', 'wellington-studio'),
				'section'   =>  'dark-solar',
				'settings'  =>  'top_setting_row'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'top_setting_row', array(
			'selector'  =>  '#dark-solar-feature-row',
			'settings'  =>  'top_setting_row',
			'render_callback' => function() {
				return self::css('#dark-solar-feature-row', 'background-color', 'top_setting_row');
			}
		)
	);
