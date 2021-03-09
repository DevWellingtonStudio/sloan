<?php
	/**
	 * Template Name: Dark Solar Grid Template
	 *
	 * @package      Bootstrap for Genesis
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/wellington-studio
	 * @author       Wellington Studiio <themes@wellington-studio.com>
	 * @copyright    Copyright (c) 2021, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */

	add_action('genesis_after_content', 'add_dark_solar_grid');
	function add_dark_solar_grid() {
		$default    = '';
		$grid_feed_cat = get_post_meta(get_the_ID(), 'grid-feed-cat', true);
		$button_text_grid = get_post_meta(get_the_ID(), 'button-text-grid', true);

		if($grid_feed_cat !== $default) {
			$args = array(
				'category_name' => $grid_feed_cat,
			);
		} else {
			$args = array(
				'post_type' => 'post',
			);
		}

		$query = new WP_Query( $args );
		echo '<div id="dark-solar-grid-feed" class="container grid-feed">' .
		     '<div class="row justify-content-center">';

		if ( $query->have_posts() ) {
			//while ( $query->have_posts() && $grid_feed_cat !== $default ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				$alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

				echo '<div class="col-md-4">' .
				     '<div class="card">' .
				     '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'"><img class="card-img-top" src="' . $featured_img_url . '" alt="' . $alt . '"></a>' .
				     '<div class="card-body">' .
				     '<h2 class="card-title has-text-align-center"><a href="'. get_the_permalink() .'" title="'. get_the_title() .'">' . get_the_title() . '</a></h2>';
						if($button_text_grid !== $default) {
						echo '<a class="text-center d-block" href="' . get_the_permalink() . '" title="' . get_the_title() . '"><button type="button" class="btn btn-dark">' . $button_text_grid . '</button></a>';
						}
				echo '</div>' .
				     '</div>' .
				     '</div>';
			}
		}
		wp_reset_postdata();
		echo '</div>' .
		     '</div>';
	}

	add_action('genesis_before_footer', 'add_textarea_above_footer', 5);
	function add_textarea_above_footer() {
		$default = '';
		$dark_solar_textarea = get_post_meta( get_the_ID(), 'dark-solar-textarea', true );
		$content = apply_filters('the_content', $dark_solar_textarea);
		$content = str_replace(array('<p>', '</p>'), '', $content);
		if ( $dark_solar_textarea !== $default ) {
			echo '<div id="dark-solar-grid-textarea" class="container-fluid">
						' . apply_filters( 'the_content', $dark_solar_textarea ) . '
					</div>';
		}
	}

	genesis();

