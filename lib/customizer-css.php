<?php
	/** CSS associated with customizer style settings  */


	function load_customizer_css() {

		$css_1 = '';
		$default = '';

		$navcolor_picker = get_theme_mod('navcolor-picker');
		if(navcolor_picker !== $default) {
			$css_1 .= '
			.nav-primary {
			background-color: '. $navcolor_picker .' !important;
			}
			';
		}

		$port_slider1           = get_theme_mod('port_slider1', $default);
		$slider1_bg					    = get_theme_mod('slider1_bg');
		$slider1_title_color		= get_theme_mod('slider1_title_color');
		$slider1_text_color			= get_theme_mod('slider1_text_color');
		$slider1_btn_text_color	= get_theme_mod('slider1_btn_text_color');
		$slider1_btn_color			= get_theme_mod('slider1_btn_color');

		if($port_slider1 !== $default) {
			$css_1 .= '
			#portrait-item-one .card .row .card-body-wrapper {
				background-color: ' . $slider1_bg . ';
			}
			#portrait-item-one .card .row .card-body-wrapper .card-body h1 {
				color: ' . $slider1_title_color . ';
			}
			#portrait-item-one .card .row .card-body-wrapper .card-body p {
				color: ' . $slider1_text_color . ';
			}
			.btn-1 h5 {
				color: ' . $slider1_btn_text_color . ';
			}
			.btn-1 {
				background-color: ' . $slider1_btn_color . ';
			}
			';
		}

		$port_slider2           = get_theme_mod('port_slider2', $default);
		$slider2_bg			    = get_theme_mod('slider2_bg', $default);
		$slider2_title_color	= get_theme_mod('slider2_title_color', $default);
		$slider2_text_color		= get_theme_mod('slider2_text_color', $default);
		$slider2_btn_text_color	= get_theme_mod('slider2_btn_text_color', $default);
		$slider2_btn_color		= get_theme_mod('slider2_btn_color', $default);

		if($port_slider2 !== $default) {
			$css_1 .= '
			#portrait-item-two .card .row .card-body-wrapper {
				background-color: ' . $slider2_bg . ';
			}
			#portrait-item-two .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider2_title_color .';
			}
			#portrait-item-two .card .row .card-body-wrapper .card-body p {
			color: '. $slider2_text_color .';
			}
			.btn-2 h5 {
			color: '. $slider2_btn_text_color .';
			}
			.btn-2 {
			background-color: '. $slider2_btn_color .';
			}
			';
		}

		$port_slider3           = get_theme_mod('port_slider3', $default);
		$slider3_bg				= get_theme_mod('slider3_bg', $default);
		$slider3_title_color	= get_theme_mod('slider3_title_color', $default);
		$slider3_text_color		= get_theme_mod('slider3_text_color', $default);
		$slider3_btn_text_color	= get_theme_mod('slider3_btn_text_color', $default);
		$slider3_btn_color		= get_theme_mod('slider3_btn_color', $default);

		if($port_slider3 !== $default){
			$css_1 .= '
			#portrait-item-three .card .row .card-body-wrapper {
				background-color: ' . $slider3_bg . ';
			}
			#portrait-item-three .card .row .card-body-wrapper .card-body h1 {
				color: '. $slider3_title_color .';
			}
			#portrait-item-three .card .row .card-body-wrapper .card-body p {
				color: '. $slider3_text_color .';
			}
			.btn-3 h5 {
				color: '. $slider3_btn_text_color .';
			}
			.btn-3 {
				background-color: '. $slider3_btn_color .';
			}
			';
		}

		$top_setting_row = get_theme_mod('top_setting_row', $default);

		$css_1 .= '
			#dark-solar-feature-row {
				background-color:'. $top_setting_row .';
			}
		';

		$default_font               = get_theme_mod('fontSelector') == 'default-font';
		$roboto_raleway             = get_theme_mod('fontSelector') == 'roboto-raleway-font';
		$montserrat_oswald          = get_theme_mod('fontSelector') == 'montserrat-oswald-font';
		$anton_barlow               = get_theme_mod('fontSelector') == 'anton-barlow-font';
		$roboto_condensed           = get_theme_mod('fontSelector') == 'roboto-condensed-font';
		$mark_poppins               = get_theme_mod('fontSelector') == 'mark-poppins';
		$blackstone_lato_crimson    = get_theme_mod('fontSelector') == 'blackstone-lato-crimson';
		$anisha_poppins             = get_theme_mod('fontSelector') == 'anisha-poppins';

		if($default_font) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Open Sans", sans-serif;
			}
			body, body p, p {
			 font-family: "Domine", serif;
			}
			';
		}
		if($roboto_raleway) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Roboto", sans-serif;
			}
			body, body p, p {
			 font-family: "Raleway", sans-serif;
			}
			';
		}
		if($montserrat_oswald) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Oswald", sans-serif;
			}
			body, body p, p {
			 font-family: "Montserrat", sans-serif;
			}
			';
		}
		if($anton_barlow) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Anton", sans-serif;
			}
			body, body p, p {
			 font-family: "Barlow Condensed", sans-serif;
			}
			';
		}
		if($roboto_condensed) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Roboto Condensed", sans-serif;
			}
			body, body p, p {
			 font-family: "Cabin", sans-serif;
			}
			';
		}
		if($mark_poppins) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Marck Script", cursive;
			}
			body, body p, p {
			 font-family: "Poppins", sans-serif;
			}
			';
		}
		if($blackstone_lato_crimson) {
			$css_1 .='
			h1,h2,h3 {
			 font-family: "Blackstone", sans-serif;
			}
			h4,h5,h6 {
			 font-family: "Lato", sans-serif;
			}
			body, body p, p {
			 font-family: "Crimson Text", serif;
			}
			';
		}
		if($anisha_poppins) {
			$css_1 .='
			h1,h2,h3 {
			 font-family: "anisha", cursive;
			}
			h4,h5,h6 {
			 font-family: "Poppins", sans-serif;
			 font-weight: 700;
			}
			body, body p, p {
			 font-family: "Poppins", sans-serif;
			 font-weight: 300;
			}
			';
		}
		return $css_1;
	}

	add_action( 'wp_enqueue_scripts', 'load_fonts_conditionally' );
	function load_fonts_conditionally() {
		wp_register_style( 'default-font', 'https://fonts.googleapis.com/css2?family=Domine&family=Open+Sans:wght@700&display=swap', [], null );

		wp_register_style( 'roboto-raleway', 'https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@700&display=swap', [], null );

		wp_register_style( 'montserrat-oswald', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@700&display=swap', [], null );

		wp_register_style( 'barlow-anton', 'https://fonts.googleapis.com/css2?family=Anton&family=Barlow+Condensed&display=swap', [], null );

		wp_register_style( 'roboto-cabin', 'https://fonts.googleapis.com/css2?family=Cabin&family=Roboto+Condensed:wght@700&display=swap', [], null );

		wp_register_style('mark-poppins', 'https://fonts.googleapis.com/css2?family=Marck+Script&family=Poppins&display=swap', [], null );

		wp_register_style('blackstone', get_stylesheet_directory_uri() . '/assets/fonts/blackstone.css', array(), '', all );

		wp_register_style('lato-crimson', 'https://fonts.googleapis.com/css2?family=Crimson+Text&family=Lato:wght@700&display=swap', [], null );

		wp_register_style('anisha-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap', [], null );

		wp_register_style('anisha', get_stylesheet_directory_uri() . '/assets/fonts/anisha.css', array(), '', all );

		$default_font               = get_theme_mod('fontSelector') == 'default-font';
		$roboto_raleway             = get_theme_mod('fontSelector') == 'roboto-raleway-font';
		$montserrat_oswald          = get_theme_mod('fontSelector') == 'montserrat-oswald-font';
		$anton_barlow               = get_theme_mod('fontSelector') == 'anton-barlow-font';
		$roboto_condensed           = get_theme_mod('fontSelector') == 'roboto-condensed-font';
		$mark_poppins               = get_theme_mod('fontSelector') == 'mark-poppins';
		$blackstone_lato_crimson    = get_theme_mod('fontSelector') == 'blackstone-lato-crimson';
		$anisha_poppins             = get_theme_mod('fontSelector') == 'anisha-poppins';

		if($default_font) {
			wp_enqueue_style('default-font');
		}
		if($roboto_raleway) {
			wp_enqueue_style('roboto-raleway');
		}
		if($montserrat_oswald) {
			wp_enqueue_style('montserrat-oswald-font');
		}
		if($anton_barlow) {
			wp_enqueue_style('barlow-anton');
		}
		if($roboto_condensed) {
			wp_enqueue_style('roboto-cabin');
		}
		if($mark_poppins) {
			wp_enqueue_style('mark-poppins');
		}
		if($blackstone_lato_crimson) {
			wp_enqueue_style('blackstone');
			wp_enqueue_style('lato-crimson');
		}
		if($anisha_poppins) {
			wp_enqueue_style('anisha-poppins');
			wp_enqueue_style('anisha');
		}
	}
