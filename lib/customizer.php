<?php
/**
 * Customizer
 *
 * @package      Bootstrap for Genesis
 * @since        1.0
 * @link         http://webdevsuperfast.github.io
 * @author       Rotsen Mark Acob <webdevsuperfast.github.io>
 * @copyright    Copyright (c) 2017, Rotsen Mark Acob
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
        'title' => __( 'Wellington Studio Settings', 'wellington-studio' ),
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
				'' => __( 'Default', 'wellington-studio' ),
				'openSans-domine-font' => __( 'Open Sans/Domine', 'wellington-studio' ),
				'montserrat-oswald-font' => __( 'Montserrat/Oswald', 'wellington-studio' ),
				'roboto-raleway-font' => __( 'Roboto/Raleway', 'wellington-studio' ),
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
            'sticky-top' => __( 'Sticky Top', 'wellington-studio' ),
            'fixed-top' => __( 'Fixed Top', 'wellington-studio' ),
            'fixed-bottom' => __( 'Fixed Bottom', 'wellington-studio' ),
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
} );
