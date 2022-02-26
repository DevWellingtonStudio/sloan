<?php
	/** CSS associated with customizer style settings  */


	function load_customizer_css() {

		$css_1 = '';
		$default = '';

		$navcolor_picker = get_theme_mod('navcolor-picker');
		if($navcolor_picker !== $default) {
			$css_1 .= '
			.nav-primary {
			background-color: '. $navcolor_picker .' !important;
			}
			';
		}
		$footer_picker = get_theme_mod('footer-picker');
		if($footer_picker !== $default) {
			$css_1 .='
			#genesis-footer-widgets {
			background-color:'. $footer_picker .' !important;
			}
			';
		}
		$footer_text_picker = get_theme_mod('footer-text-picker');
		if($footer_text_picker !== $default) {
			$css_1 .='
			#genesis-footer-widgets .widget-wrap {
			color:'. $footer_text_picker .' !important;
			}
			';
		}
		$footer_link_picker = get_theme_mod('footer-link-picker');
		if($footer_link_picker !== $default) {
			$css_1 .='
			#genesis-footer-widgets a {
			color:'. $footer_link_picker .' !important;
			}
			';
		}
		$footer_title_picker = get_theme_mod('footer-title-picker');
		if($footer_title_picker !== $default) {
			$css_1 .='
			#genesis-footer-widgets .widgettitle {
			color:'. $footer_title_picker .' !important;
			}
			';
		}
		$navfont_color = get_theme_mod('navfont-color');
		if($navfont_color !== $default) {
			$css_1 .= '
			.navbar-brand, .navbar-text,
			.navbar-nav .nav-link {
			 color:'. $navfont_color .' !important;
			 }
			';
		}
		$navfont_active_color = get_theme_mod('navfont-active-color');
		if($navfont_active_color !== $default) {
			$css_1 .= '
			.navbar-nav .nav-link:hover,
			.navbar-nav .nav-link:active,
			.navbar-nav .active .nav-link {
			 color:'. $navfont_active_color .' !important;
			 }
			';
		}
		$navfont_size = get_theme_mod('navfont-size');
		if($navfont_size !== $default) {
			$css_1 .='
			#nav-primary ul li {
			 font-size: '. $navfont_size .'rem;
			 }
			';
		}

		$port_slider1           = get_theme_mod('port_slider1', $default);
		$slider1_bg							= get_theme_mod('slider1_bg');
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
		$slider2_bg			    		= get_theme_mod('slider2_bg', $default);
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
		$slider3_bg							= get_theme_mod('slider3_bg', $default);
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

		$default_font               = get_theme_mod('fontSelector') == 'default-font';
		$roboto_raleway             = get_theme_mod('fontSelector') == 'roboto-raleway-font';
		$montserrat_oswald          = get_theme_mod('fontSelector') == 'montserrat-oswald-font';
		$montserrat_garamond        = get_theme_mod('fontSelector') == 'montserrat-garamond';
		$anton_barlow               = get_theme_mod('fontSelector') == 'anton-barlow-font';
		$roboto_condensed           = get_theme_mod('fontSelector') == 'roboto-condensed-font';
		$mark_poppins               = get_theme_mod('fontSelector') == 'mark-poppins';
		$blackstone_lato_crimson    = get_theme_mod('fontSelector') == 'blackstone-lato-crimson';
		$anisha_poppins             = get_theme_mod('fontSelector') == 'anisha-poppins';
		$new_wellington             = get_theme_mod('fontSelector') == 'new-wellington';
		$poppins_playfair           = get_theme_mod('fontSelector') == 'poppins-playfair';
		$oswald_roboto              = get_theme_mod('fontSelector') == 'oswald-roboto';
		$forum_work                 = get_theme_mod('fontSelector') == 'forum-work';
		$nunito                     = get_theme_mod('fontSelector') == 'nunito';
		$lato                       = get_theme_mod('fontSelector') == 'lato';
		$overpass                   = get_theme_mod('fontSelector') == 'overpass';
		$mangueira                  = get_theme_mod('fontSelector') == 'mangueira';

		if($mangueira) {
			$css_1 .='
			h1,h2,h3,h4 {
			font-family: "Mangueira", sans-serif;
			}
			body, body p, p, h5, h6 {
			font-family: "Mangueira", sans-serif;
			}
			';
		}

		if($overpass) {
			$css_1 .='
			h1,h2,h3,h4 {
			font-family: "Overpass", sans-serif;
			}
			body, body p, p, h5, h6 {
			font-family: "Overpass", sans-serif;
			}
			';
		}

		if($lato) {
		  $css_1 .='
		  h1,h2,h3,h4 {
			font-family: "Lato", sans-serif;
			}
			body, body p, p, h5, h6 {
			font-family: "Lato", sans-serif;
			}
		  ';
		}
		if($new_wellington) {
			$css_1 .='
			h1,h2,h3,h4 {
			font-family:"Cormorant Garamnond", serif;
			}
			body, body p, p, h5, h6 {
			font-family:"Montserrat", sans-serif;
			}
			';
		}
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
		if($montserrat_garamond) {
			$css_1 .='
			h1,h2,h3,h4 {
			 font-family: "Montserrat", sans-serif;
			}
			body, body p, p, h5, h6 {
			 font-family: "Cormorant Garamond", serif;
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
		if($poppins_playfair) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Poppins", sans-serif;
			}
			body. body p, p {
			 font-family: "Playfair Display", serif;
			}
			#menu-primary-navigation-menu li.menu-item {
			 font-family: "Poppins", sans-serif;
			}
			';
		}
		if($oswald_roboto) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Oswald", sans-serif;
			}
			body. body p, p {
			 font-family: "Roboto", sans-serif;
			}
			#menu-primary-navigation-menu li.menu-item {
			 font-family: "Roboto", sans-serif;
			}
			';
		}
		if($forum_work) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Forum", cursive;
			}
			body. body p, p {
			 font-family: "Work Sans", sans-serif;
			}
			#menu-primary-navigation-menu li.menu-item {
			 font-family: "Work Sans", sans-serif;
			}
			';
		}
		if($nunito) {
			$css_1 .='
			h1,h2,h3,h4 {
			font-family: "Nunito", sans-serif;
			}
			';
		}
		return $css_1;
	}

	add_action( 'wp_enqueue_scripts', 'load_fonts_conditionally' );
	function load_fonts_conditionally() {

		wp_register_style('forum-work', 'https://fonts.googleapis.com/css2?family=Forum&family=Work+Sans&display=swap', [], null );

		wp_register_style( 'default-font', 'https://fonts.googleapis.com/css2?family=Domine&family=Open+Sans:wght@700&display=swap', [], null );

		wp_register_style( 'roboto-raleway', 'https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@700&display=swap', [], null );

		wp_register_style( 'montserrat-oswald', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@700&display=swap', [], null );

		wp_register_style( 'garamond-montserrat', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&family=Montserrat&display=swap', [], null );

		wp_register_style( 'barlow-anton', 'https://fonts.googleapis.com/css2?family=Anton&family=Barlow+Condensed&display=swap', [], null );

		wp_register_style( 'roboto-cabin', 'https://fonts.googleapis.com/css2?family=Cabin&family=Roboto+Condensed:wght@700&display=swap', [], null );

		wp_register_style('mark-poppins', 'https://fonts.googleapis.com/css2?family=Marck+Script&family=Poppins&display=swap', [], null );

		wp_register_style('blackstone', get_stylesheet_directory_uri() . '/assets/fonts/blackstone.css', array(), '' );

		wp_register_style('mangueira', get_stylesheet_directory_uri() . '/assets/fonts/Mangueira/mangueira.css', array(), '' );

		wp_register_style('lato-crimson', 'https://fonts.googleapis.com/css2?family=Crimson+Text&family=Lato:wght@700&display=swap', [], null );

		wp_register_style('anisha-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap', [], null );

		wp_register_style('anisha', get_stylesheet_directory_uri() . '/assets/fonts/anisha.css', array(), '' );

		wp_register_style( 'new-wellington', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Montserrat:ital,wght@0,200;0,400;1,400&display=swap', [], null );

		wp_register_style('poppins-playfair', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Poppins:wght@200&display=swap', [], null);

		wp_register_style( 'oswald-roboto', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&display=swap', [], null );

		wp_register_style( 'nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap', [], null );

		wp_register_style( 'lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', [], null );

		wp_register_style( 'overpass', 'https://fonts.googleapis.com/css2?family=Overpass&display=swap', [], null );



		$default_font               = get_theme_mod('fontSelector') == 'default-font';
		$roboto_raleway             = get_theme_mod('fontSelector') == 'roboto-raleway-font';
		$montserrat_oswald          = get_theme_mod('fontSelector') == 'montserrat-oswald-font';
		$montserrat_garamond        = get_theme_mod('fontSelector') == 'montserrat-garamond';
		$anton_barlow               = get_theme_mod('fontSelector') == 'anton-barlow-font';
		$roboto_condensed           = get_theme_mod('fontSelector') == 'roboto-condensed-font';
		$mark_poppins               = get_theme_mod('fontSelector') == 'mark-poppins';
		$blackstone_lato_crimson    = get_theme_mod('fontSelector') == 'blackstone-lato-crimson';
		$anisha_poppins             = get_theme_mod('fontSelector') == 'anisha-poppins';
		$new_wellington             = get_theme_mod('fontSelector') == 'new-wellington';
		$poppins_playfair           = get_theme_mod('fontSelector') == 'poppins-playfair';
		$oswald_roboto              = get_theme_mod('fontSelector') == 'oswald-roboto';
		$forum_work                 = get_theme_mod('fontSelector') == 'forum-work';
		$nunito                     = get_theme_mod('fontSelector') == 'nunito';
		$lato                       = get_theme_mod('fontSelector') == 'lato';
		$overpass                   = get_theme_mod('fontSelector') == 'overpass';
		$mangueira                  = get_theme_mod('fontSelector') == 'mangueira';

		if($mangueira) {
			wp_enqueue_style('mangueira');
		}

		if($new_wellington) {
			wp_enqueue_style('new-wellington');
		}
		if($default_font) {
			wp_enqueue_style('default-font');
		}
		if($roboto_raleway) {
			wp_enqueue_style('roboto-raleway');
		}
		if($montserrat_oswald) {
			wp_enqueue_style('montserrat-oswald-font');
		}
		if($montserrat_garamond) {
			wp_enqueue_style('garamond-montserrat');
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
		if($poppins_playfair) {
			wp_enqueue_style('poppins-playfair');
		}
		if($oswald_roboto) {
			wp_enqueue_style('oswald-roboto');
		}
		if($forum_work) {
			wp_enqueue_style('forum-work');
		}
		if($nunito) {
			wp_enqueue_style('nunito');
		}
		if($lato) {
			wp_enqueue_style( 'lato');
		}
		if($overpass) {
			wp_enqueue_style('overpass');
		}
	}
