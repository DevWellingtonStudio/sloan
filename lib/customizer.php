<?php
	/**
	 * Customizer
	 *
	 * @package      Bootstrap for Sloan
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/sloan
	 * @author       Wellington Studio & ParsonsHosting
	 * @copyright    Copyright (c) 2021, Wellington Studdio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */

	add_action( 'customize_register', function( $wp_customize ) {

		include 'customizer-sections/fp-hero-video-options.php';
		include 'customizer-sections/fp-hero-slider-options.php';
		include 'customizer-sections/portrait-slider-options.php';
		include 'customizer-sections/dark-solar-customizer.php';

		$transport = ( $wp_customize->selective_refresh ? 'postMessage' : 'refresh');

		// Add Default Settings
		$wp_customize->add_setting( 'wellington-studio', array(
			'capability' => 'edit_theme_options',
			'type' => 'theme_mod'
		) );

		// Add Panel
		$wp_customize->add_panel( 'wellington', array(
			'title' => __( 'Sloan Theme Settings', 'wellington-studio' ),
			'priority' => 100
		) );

		// Add Style Section
		$wp_customize->add_section( 'style', array(
			'title' => __( 'Theme Style', 'wellington-studio' ),
			'priority'  => 10,
			'panel' =>  'wellington'
		));

		//* Add Font Selector
		$wp_customize->add_setting( 'fontSelector', array(
			'default' => ''
		) );

		$wp_customize->add_control( 'fontSelector', array(
			'type' => 'select',
			'priority' => 10,
			'label' => __( 'Font Selection', 'wellington-studio' ),
			'section' => 'style',
			'choices' => array(
				'default-font'              => __( 'Default', 'wellington-studio' ),
				'montserrat-oswald-font'    => __( 'Montserrat/Oswald', 'wellington-studio' ),
				'montserrat-garamond'       => __( 'Cormorant-Garamond/Montserrat', 'wellington-studio' ),
				'roboto-raleway-font'       => __( 'Roboto/Raleway', 'wellington-studio' ),
				'anton-barlow-font'         => __( 'Anton/Barlow', 'wellington-studio' ),
				'roboto-condensed-font'     => __( 'Roboto/Cabin', 'wellington-studio' ),
				'mark-poppins'              => __( 'Mark Script/Poppins', 'wellington-studio' ),
				'blackstone-lato-crimson'   => __( 'Blackstone/Lato/Crimson', 'wellington-studio' ),
				'anisha-poppins'            => __( 'Anisha/Poppins', 'wellington-studio' ),
				'new-wellington'            => __( 'New Wellington', 'wellington-studio' ),
				'poppins-playfair'          => __( 'Poppins/Playfair', 'wellington-studio' ),
				'oswald-roboto'             => __( 'Oswald/Roboto', 'wellington-studio' ),
				'forum-work'                => __( 'Forum/Work', 'wellington-studio' ),
				'nunito'                    => __( 'Nunito', 'wellington-studio'),
				'lato'                      => __( 'Lato', 'wellington-studio')
			)
		) );

		//* Add Color Palette
		$wp_customize->add_setting( 'colorPalette', array(
			'default' => ''
		));
		$wp_customize->add_control( 'colorPalette', array(
			'type' => 'select',
			'priority' => 10,
			'label' => __( 'Color Palette', 'wellington-studio' ),
			'section' => 'style',
			'choices' => array(
				'' => __( 'Default', 'wellington-studio' ),
				'dark-solar' => __( 'Dark Solar', 'wellington-studio' )
			)
		) );

		// Add Navigation Section
		$wp_customize->add_section( 'navigation', array(
			'title' => __( 'Navigation Settings', 'wellington-studio' ),
			'priority' => 10,
			'panel' => 'wellington'
		) );

		//* Add Navigation Controls
		$wp_customize->add_setting( 'navposition', array(
			'default' => ''
		) );

		$wp_customize->add_control( 'navposition', array(
			'type' => 'select',
			'priority' => 10,
			'label' => __( 'Navigation Position', 'wellington-studio' ),
			'section' => 'navigation',
			'choices' => array(
				'' => __( 'Default', 'wellington-studio' ),
				'sticky-top'   => __( 'Sticky Top', 'wellington-studio' ),
				'fixed-top'    => __( 'Fixed Top', 'wellington-studio' ),
				'fixed-bottom' => __( 'Fixed Bottom', 'wellington-studio' )
			)
		) );

		$wp_customize->add_setting( 'navcontainer', array(
			'default' => 'lg'
		) );

		// Navigation Container
		$wp_customize->add_control( 'navcontainer', array(
			'type' => 'select',
			'priority' => 20,
			'label' => __( 'Navigation Container', 'wellington-studio' ),
			'section' => 'navigation',
			'choices' => array(
				'sm' => __( 'Small', 'wellington-studio' ),
				'md' => __( 'Medium', 'wellington-studio' ),
				'lg' => __( 'Large', 'wellington-studio' ),
				'xl' => __( 'Extra Large', 'wellington-studio' )
			)
		) );

		// Navigation Color
		$wp_customize->add_setting( 'navcolor', array(
			'default' => 'dark'
		) );

		$wp_customize->add_control( 'navcolor', array(
			'type' => 'select',
			'priority' => 30,
			'label' => __( 'Navigation Background', 'wellington-studio' ),
			'section' => 'navigation',
			'choices' => array(
				'light' => __( 'Light', 'wellington-studio' ),
				'dark' => __( 'Dark', 'wellington-studio' ),
				'primary' => __( 'Primary', 'wellington-studio' ),
				'dark-solar' => __( 'Dark Solar', 'wellington-studio' )
			)
		) );

		// Navigation Color Picker
		$wp_customize->add_setting('navcolor-picker', array(
			'default' => '',
		));
		// Navigation Background Color Picker
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'diwp_theme_color', array(
				'label' => 'Navigation Background Color',
				'section' => 'navigation',
				'settings' => 'navcolor-picker'
				)
			)
		);
		// Navigation Font Color
		$wp_customize->add_setting('navfont-color', array(
			'default' => ''
		));
		// Navigation Font Color Control
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'navfont-color', array(
					'label' => 'Navigation Font Color',
					'section' => 'navigation',
					'settings' => 'navfont-color'
				)
			)
		);
		// Navigation Font Color
		$wp_customize->add_setting('navfont-active-color', array(
			'default' => ''
		));
		// Navigation Font Color Control
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'navfont-active-color', array(
					'label' => __('Navigation Active Color', 'wellington-studio'),
					'section' => 'navigation',
					'settings' => 'navfont-active-color'
				)
			)
		);
		// Nav Font Size
		$wp_customize->add_setting('navfont-size', array(
			'default' => ''
		));
		// Nav Font Size
		$wp_customize -> add_control (
			new WP_Customize_Control (
				$wp_customize,
				'navfont-size', array (
					'label'			=> __( 'Top Nav Font Size', 'wellington-studio' ),
					'description'   => __('Font size is in "rem" value. Do not add px, em, rem after the number. Only enter a number from 1 to any number. Generally, numbers greater than 1 will be too large. try .9 or less.  ', 'wellington-studio'),
					'section'		=> 'navigation',
					'settings'	=> 'navfont-size',
					'type'			=> 'text'
				)
			)
		);
		// Navigation Extras
		$wp_customize->add_setting( 'navextra', array(
			'default' => 'search'
		) );

		$wp_customize->add_control( 'navextra', array(
			'type' => 'select',
			'priority' => 40,
			'label' => __( 'Navigation Extras', 'wellington-studio' ),
			'section' => 'navigation',
			'choices' => array(
				'' => __( 'None', 'wellington-studio' ),
				'date' => __( 'Date', 'wellington-studio' ),
				'search' => __( 'Search Form', 'wellington-studio' ),
				'widget' => __( 'Widget Area', 'wellington-studio' )
			)
		) );

		// Container Layout
		$wp_customize->add_section( 'container-layout', array(
			'title' => __( 'Container Layout', 'wellington-studio' ),
			'priority' => 40,
			'panel' => 'wellington'
		) );

		$wp_customize->add_setting( 'container', array(
			'default' => 'boxed',
		) );

		$wp_customize->add_control( 'container', array(
			'type' => 'select',
			'priority' => 30,
			'label' => __( 'Container Settings', 'wellington-studio' ),
			'section' => 'container-layout',
			'choices' => array(
				'fluid' => __( 'Fluid Layout', 'wellington-studio' ),
				'boxed' => __( 'Boxed Layout', 'wellington-studio' )
			)
		) );

		// Footer Section
		$wp_customize->add_section( 'footer', array(
			'title' => __( 'Footer Section', 'wellington-studio' ),
			'priority' => 40,
			'panel' => 'wellington'
		) );

		$wp_customize->add_setting( 'footerwidgetbg', array(
			'default' => 'dark'
		) );

		$wp_customize->add_control( 'footerwidgetbg', array(
			'type' => 'select',
			'priority' => 30,
			'label' => __( 'Footer Widget Background', 'wellington-studio' ),
			'section' => 'footer',
			'choices' => array(
				'light' => __( 'Light', 'wellington-studio' ),
				'dark' => __( 'Dark', 'wellington-studio' ),
				'primary' => __( 'Primary', 'wellington-studio' ),
				'dark-solar' => __('Dark Solar', 'wellington-studio' )
			)
		) );

		$wp_customize->add_setting( 'footerbg', array(
			'default' => 'dark'
		) );

		$wp_customize->add_control( 'footerbg', array(
			'type' => 'select',
			'priority' => 30,
			'label' => __( 'Footer Background', 'wellington-studio' ),
			'section' => 'footer',
			'choices' => array(
				'light' => __( 'Light', 'wellington-studio' ),
				'dark' => __( 'Dark', 'wellington-studio' ),
				'primary' => __( 'Primary', 'wellington-studio' ),
				'dark-solar' => __('Dark Solar', 'wellington-studio' )
			)
		) );

		// Footer Color Picker
		$wp_customize->add_setting('footer-picker', array(
			'default' => '',
		));
		// Footer Background Color Picker
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'footer-picker', array(
					'label' => 'Footer Background Color',
					'section' => 'footer',
					'settings' => 'footer-picker'
				)
			)
		);
		// Footer Widget Title Picker
		$wp_customize->add_setting('footer-title-picker', array(
			'default' => '',
		));
		// Footer Widget Title Picker
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'footer-title-picker', array(
					'label' => 'Footer Title Color',
					'section' => 'footer',
					'settings' => 'footer-title-picker'
				)
			)
		);
		// Footer Widget Text Color Picker
		$wp_customize->add_setting('footer-text-picker', array(
			'default' => '',
		));
		// Footer Widget Text Color Picker
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'footer-text-picker', array(
					'label' => 'Footer Text Color',
					'section' => 'footer',
					'settings' => 'footer-text-picker'
				)
			)
		);
		// Footer Widget Link Color Picker
		$wp_customize->add_setting('footer-link-picker', array(
			'default' => '',
		));
		// Footer Widget Link Color Picker
		$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize, 'footer-link-picker', array(
					'label' => 'Footer Link Color',
					'section' => 'footer',
					'settings' => 'footer-link-picker'
				)
			)
		);
	} );


