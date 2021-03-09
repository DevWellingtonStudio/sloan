<?php
	/** Hero images, carousel, video
	 *
	 * https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4
	 */

add_action('genesis_after_header', 'add_hero_video', 5);
function add_hero_video() {

	$default  = '';
	$hero_url         = get_theme_mod('hero_url', $default);
	$hero_video_title = get_theme_mod('hero_video_title', $default);
	$hero_video_text  = get_theme_mod('hero_video_text', $default);
	$wst_slider1	    = get_theme_mod('wst_slider1', $default );
	$slider1_id       = attachment_url_to_postid($wst_slider1);
	$slider1_alt      = get_post_meta( $slider1_id, '_wp_attachment_image_alt', true );
	$slider1title	    = get_theme_mod('slider1title', $default );
	$slider1text		  = get_theme_mod('slider1text', $default );
	$wst_slider2	    = get_theme_mod('wst_slider2', $default );
	$slider2_id       = attachment_url_to_postid($wst_slider2);
	$slider2_alt      = get_post_meta( $slider2_id, '_wp_attachment_image_alt', true );
	$slider2title	    = get_theme_mod('slider2title', $default );
	$slider2text		  = get_theme_mod('slider2text', $default );
	$wst_slider3	    = get_theme_mod('wst_slider3', $default );
	$slider3_id       = attachment_url_to_postid($wst_slider3);
	$slider3_alt      = get_post_meta( $slider3_id, '_wp_attachment_image_alt', true );
	$slider3title	    = get_theme_mod('slider3title', $default );
	$slider3text		  = get_theme_mod('slider3text', $default );

	$p_slider_title1  = get_theme_mod('p-slider-title1', $default);
	$p_slider_text1   = get_theme_mod('p-slider-text1', $default);
	$port1_btn_url    = get_theme_mod('port1_btn_url', $default);
	$port_slider1     = get_theme_mod('port_slider1', $default);
	$port_slider2     = get_theme_mod('port_slider2', $default);
	$p_slider_title2  = get_theme_mod('p-slider-title2', $default);
	$p_slider_text2   = get_theme_mod('p-slider-text2', $default);
	$port2_btn_url    = get_theme_mod('port2_btn_url', $default);
	$p_slider_title3  = get_theme_mod('p-slider-title3', $default);
	$p_slider_text3   = get_theme_mod('p-slider-text3', $default);
	$port3_btn_url    = get_theme_mod('port3_btn_url', $default);
	$port_slider3     = get_theme_mod( 'port_slider3', $default);


	$slider1_id   = attachment_url_to_postid($wst_slider1);
	$slider1_alt  = get_post_meta( $slider1_id, '_wp_attachment_image_alt', true );

	if($hero_url !== $default) {
		if ( ! is_active_sidebar( 'home-featured' ) && is_page_template( 'templates/dark-solar.php' ) ) {

			echo '
		<section id="hero-video-section">
		<div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">';
			if ( $hero_url !== $default ) {
				echo '<source src = "' . $hero_url . '" type = "video/mp4" >';
			}

			echo '
			</video>
			<div class="container h-100">
			<div class="d-flex h-100 text-center align-items-center">
			<div id="hero-video-text" class="w-100 text-white">
			<h1 class="display-3">'. $hero_video_title .'</h1>
			<p class="lead mb-0">'. $hero_video_text .'</p>
			</div>
			</div>
			</div>
		</section>
		';
		}
	} elseif($wst_slider1 !== $default && $hero_url == $default && ! is_active_sidebar( 'home-featured' ) && is_page_template( 'templates/dark-solar.php' )) {

echo '
		    <div id="hero-section">
				  <div id="wstTopSlider" class="carousel slide carousel-fade" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#wstTopSlider" data-slide-to="0" class="active"></li>';
				        if($wst_slider2 !== $default) {
				        echo '<li data-target="#wstTopSlider" data-slide-to="1"></li>';
				       }
				      if($wst_slider3 !== $default) {
				        echo '<li data-target="#wstTopSlider" data-slide-to="2"></li>';
				       }
		echo ' </ol>
				    <div class="carousel-inner">
				      <div id="slider-one" class="carousel-item active">
				        <img src="' . $wst_slider1 . '" class="d-block w-100" alt="'. $slider1_alt .'">
				        <div class="carousel-caption d-md-block">
				          <h2 class="slider-one-title">' . $slider1title  . '</h2>
				          <p class="slider-one-text lead">' . $slider1text	 . '</p>
				        </div>
				      </div>';
						  if($wst_slider2 !== $default) {
				       echo ' <div id="slider-two" class="carousel-item">
				         <img src="' . $wst_slider2 . '" class="d-block w-100" alt="'. $slider2_alt .'">
				         <div class="carousel-caption d-md-block">
				           <h2 class="slider-two-title">' . $slider2title  . '</h2>
				           <p class="slider-two-text lead">' .  $slider2text  . '</p>
				         </div>
				       </div>';
						  }
						 if($wst_slider3 !== $default) {
				       echo ' <div id="slider-three" class="carousel-item">
							         <img src="' . $wst_slider3 . '" class="d-block w-100" alt="'. $slider3_alt .'">
							         <div class="carousel-caption d-md-block">
							           <h2 class="slider-three-title">' . $slider3title . '</h2>
							           <p class="slider-three-text lead">' . $slider3text  . '</p>
							         </div>
							       </div>';
						  }
				    echo '</div>';
						 if($wst_slider2 !== $default) {

						echo '<a class="carousel-control-prev" href="#wstTopSlider" role="button" data-slide="prev">
							      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="carousel-control-next" href="#wstTopSlider" role ="button" data-slide="next">
							      <span class="carousel-control-next-icon" aria-hidden="true"></span>
							      <span class="sr-only">Next</span>
							    </a>';
				      }
				  echo '</div>
						</div>';
	} elseif($port_slider1 !== $default && $wst_slider1 == $default && $hero_url == $default && ! is_active_sidebar( 'home-featured' ) && is_page_template( 'templates/dark-solar.php' )) {

	echo '<div id="portrait-section">
				 <div id="wstPortraitSlider" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
					 <li data-target="#wstPortraitSlider" data-slide-to="0" class="active"></li>';
						if($port_slider2 != $default) {
						echo '<li data-target="#wstPortraitSlider" data-slide-to="1"></li >';
						}
						if($port_slider3 !== $default) {
						echo '<li data-target="#wstPortraitSlider" data-slide-to="2"></li >';
						}
	echo	 '</ol>
					<div class="carousel-inner">
					 <div id="portrait-item-one" class="carousel-item active slider-one-title-color">
						<div id="portrait-hero" class="card">
						 <div class="row no-gutters">
							<div class="col-md-6 card-body-wrapper">
							 <div class="card-body">
								<h1 id="portrait-one-slider-title" class="card-title">'. $p_slider_title1 .'</h1>
								<p id="portrait-one-slider-text" class="card-text">'. $p_slider_text1 .'</p>';

								 if($port1_btn_url !== ''){echo '<a class="btn-1-link" id="btn-one-link" href="' . $port1_btn_url . '" title="Read More"><button type="button" class="zindex-btn btn btn-1"><h5>Find Out More...</h5></button></a>';}

					echo '</div>
							</div>
							<div class="col-md-6 portrait-image">
						 		<img src="'. $port_slider1 .'" class="card-img" alt="...">
							</div>
						 </div>
						</div>
					 </div>';

		      if($port_slider2 !== $default) {
		 echo '<div id ="portrait-item-two" class="carousel-item slider-two-title-color">
						<div id="portrait-hero" class="card">
						 <div class="row no-gutters" >
							<div class="col-md-6 portrait-image">
							 <img src ="'. $port_slider2 .'" class="card-img" alt ="..." >
							</div >
							<div class="col-md-6 card-body-wrapper">
							 <div class="card-body">
								<h1 id="portrait-two-slider-title" class="card-title"> '. $p_slider_title2 .'</h1>
								<p id="portrait-two-slider-text" class="card-text"> '. $p_slider_text2 .'</p> ';

								 if($port2_btn_url !== ''){echo '<a class="btn-2-link" id="btn-two-link" href="' . $port2_btn_url . '" title ="Read More"><button type ="button" class="zindex-btn btn btn-2"><h5>Read More Here...</h5></button ></a>';}

							 echo '</div>
							</div>
						 </div>
						</div>
					 </div>';
		      }
		      if($port_slider3 !== $default) {
		echo '<div id ="portrait-item-three" class="carousel-item slider-three-title-color">
						<div id="portrait-hero" class="card">
						 <div class="row no-gutters">
							<div class="col-md-6 card-body-wrapper">
							 <div class="card-body">
								<h1 id="portrait-three-slider-title" class="card-title"> '. $p_slider_title3 .'</h1>
								<p id="portrait-three-slider-text" class="card-text"> '. $p_slider_text3 .'</p> ';

								if($port3_btn_url !== ''){ echo ' <a class="btn-3-link" id="btn-three-link" href ="' . $port3_btn_url . '" title = "Read More"><button type = "button" class="zindex-btn btn btn-3"><h5>Read More...</h5></button ></a> ';}

							 echo '</div>
							</div>
							<div class="col-md-6 portrait-image">
							 <img src = "'. $port_slider3 .'" class="card-img" alt = "..." >
							</div>
						 </div>
						</div>
					 </div>';
		      }
	 echo '</div>
      </div>';
			if($port_slider2 !== $default) {
	 echo '<a class="carousel-control-prev" href="#wstPortraitSlider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				 </a>
				 <a class="carousel-control-next" href="#wstPortraitSlider" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span >
					<span class="sr-only">Next</span>
				 </a>';
		   }
	echo '</div>';
	} elseif($hero_url == $default && $wst_slider1 == $default && $port_slider1 == $default) {
		echo '<div class="no-hero-margin"></div>';
	}
 }


