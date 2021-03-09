<?php
	/** CSS associated with customizer style settings  */


	function load_customizer_css() {

		$css_1 = '';
		$default = '';

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
		$slider2_bg					    = get_theme_mod('slider2_bg', $default);
		$slider2_title_color		= get_theme_mod('slider2_title_color', $default);
		$slider2_text_color			= get_theme_mod('slider2_text_color', $default);
		$slider2_btn_text_color	= get_theme_mod('slider2_btn_text_color', $default);
		$slider2_btn_color			= get_theme_mod('slider2_btn_color', $default);

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
		$slider3_bg					    = get_theme_mod('slider3_bg', $default);
		$slider3_title_color		= get_theme_mod('slider3_title_color', $default);
		$slider3_text_color			= get_theme_mod('slider3_text_color', $default);
		$slider3_btn_text_color	= get_theme_mod('slider3_btn_text_color', $default);
		$slider3_btn_color			= get_theme_mod('slider3_btn_color', $default);

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










		$opensans_domine    = get_theme_mod('fontSelector') == 'openSans-domine-font';
		$roboto_raleway     = get_theme_mod('fontSelector') == 'roboto-raleway-font';
		$montserrat_oswald  = get_theme_mod('fontSelector') == 'montserrat-oswald-font';

		if($opensans_domine) {
			$css_1 .='
			@import url("https://fonts.googleapis.com/css2?family=Domine&family=Open+Sans&display=swap");
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
			@import url("https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap");
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
			@import url("https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald&display=swap");
			h1,h2,h3,h4,h5 {
			 font-family: "Oswald", sans-serif;
			}
			body, body p, p {
			 font-family: "Montserrat", sans-serif;
			}
			';
		}
		return $css_1;
	}
