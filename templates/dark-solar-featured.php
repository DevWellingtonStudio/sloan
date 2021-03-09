<?php
	/**
	 * Template Name: Dark Solar Feature Template
	 *
	 * @package      Bootstrap for Genesis
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/wellington-studio
	 * @author       Wellington Studiio <themes@wellington-studio.com>
	 * @copyright    Copyright (c) 2021, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */

	add_action('genesis_after_content', 'add_dark_solar_featured');
	function add_dark_solar_featured() {
		$default    = '';
		$dark_solar_featured_cat = get_post_meta(get_the_ID(), 'feat-feed-cat', true);
		$button_text_feat        = get_post_meta(get_the_ID(), 'button-text-feat', true);

		if($dark_solar_featured_cat !== $default) {
			$args = array(
				'category_name' => $dark_solar_featured_cat,
			);
		} else {
			$args = array(
				'post_type' => 'post',
			);
		}

		$query = new WP_Query( $args );
		echo '<div id="dark-solar-featured-feed" class="container grid-feed">' .
		     '<div class="row justify-content-center">';

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				$alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

				echo '<div class="col-md-4">' .
				     '<div class="card">' .
				     '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'"><img class="card-img-top" src="' . $featured_img_url . '" alt="' . $alt . '"></a>' .
				     '<div class="card-body">' .
				     '<h2 class="card-title has-text-align-center"><a href="'. get_the_permalink() .'" title="'. get_the_title() .'">' . get_the_title() . '</a></h2>';
				if($button_text_feat !== $default) {
					echo '<a class="text-center d-block" href="' . get_the_permalink() . '" title="' . get_the_title() . '"><button type="button" class="btn btn-dark">' . $button_text_feat . '</button></a>';
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

	add_action('genesis_before_footer', 'add_dark_solar_featured_textarea', 5);
	function add_dark_solar_featured_textarea() {
		$default  = '';
		$dark_solar_feat_textarea = get_post_meta(get_the_ID(), 'dark-solar-feat-textarea', true);
		$content = apply_filters('the_content', $dark_solar_feat_textarea);
		$content = str_replace(array('<p>', '</p>'), '', $content);
		if($dark_solar_feat_textarea !== '') {
			echo '<div id="dark-soalr-featured-textarea" class="container-fluid">
							<div class="row feat-row">
								' . apply_filters( 'the_content', $dark_solar_feat_textarea ) . '
							</div>
					  </div>';
		}

	}

	genesis();
