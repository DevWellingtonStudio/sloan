<?php
/**
 * Scripts
 *
 * @package      Bootstrap for Sloan
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/sloan
 * @author       Wellington Studio & ParsonsHosting
 * @copyright    Copyright (c) 2021, Wellington Studdio
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Theme Scripts & Stylesheet
add_action( 'wp_enqueue_scripts', 'bfg_theme_scripts' );
function bfg_theme_scripts() {
	$version = wp_get_theme()->Version;
	if ( !is_admin() ) {
		wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all' );

		wp_register_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '', 'all');
		wp_enqueue_style('animate-css');


		if(function_exists('load_customizer_css')) {
			wp_add_inline_style('custom-css', load_customizer_css());
		}

		// Disable the superfish script
		//wp_deregister_script( 'superfish' );
		//wp_deregister_script( 'superfish-args' );

		// Deregister jQuery and use Bootstrap supplied version
		//if(!is_customize_preview()) {
			//wp_deregister_script( 'jquery' );
		//}


		/** Remove jQuery and jQuery-ui scripts loading from header */

		//wp_deregister_script( 'jquery' );
		//wp_deregister_script( 'jquery-ui' );

		/*wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, 'true');
		//wp_add_inline_script( 'jquery', 'var jQuery3_5_1 = $.noConflict(true);' );
		wp_enqueue_script( 'jquery');

		wp_register_script( 'jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', false, null, 'true');
		wp_enqueue_script( 'jquery-ui'); */

		wp_register_script( 'bootstrap-jquery', BFG_THEME_JS . 'jquery.slim.min.js', array('jquery'), $version, 'false' );
		wp_add_inline_script( 'bootstrap-jquery', 'var jQuery_slim_js = $.noConflict(true);' );
		wp_enqueue_script( 'bootstrap-jquery' );

		// Register Popper JS and enqueue it
		wp_register_script( 'app-popper-js', BFG_THEME_JS . 'popper.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-popper-js' );

		// Register Bootstrap JS and enqueue it
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-bootstrap-js' );

		// Register theme JS and enqueue it
		wp_register_script( 'app-js', BFG_THEME_JS . 'app.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-js' );

		wp_register_script('font-awesome', 'https://kit.fontawesome.com/76342ff491.js', array(), '5.15.3', true );
		wp_enqueue_script('font-awesome');
	}
}

// Editor Styles
add_action( 'init', 'bfg_custom_editor_css' );
function bfg_custom_editor_css() {
	add_editor_style( get_stylesheet_uri() );
}
