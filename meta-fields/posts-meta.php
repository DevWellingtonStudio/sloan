<?php
	/**
	 * Adds an image meta boxes to dark solar template..
	 * @package		Bootstrap For Genesis
	 * @since		1.0
	 * @author		Wellington Studiio <themes@wellington-studio.com>
	 * @link		https://github.com/DevWellingtonStudio/wellington-studio
	 * @copyright    Copyright (c) 2021, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 */

	// Prevents direct access to files
	if (!defined('ABSPATH')) {
		exit('Cheatin&#8217; uh?');
	}

	include 'sanitize/post-meta-sanitize.php';

	add_action( 'add_meta_boxes', 'posts_cust_meta' );
	function posts_cust_meta() { global $post;
		if(!empty($post)) {
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == is_single()) {
				$types = array( 'post');
				foreach($types as $type) {
					add_meta_box( 'posts_temp_meta', __( 'Blog Post Meta', 'wellington-studio' ), 'posts_temp_meta_callback', $type, 'normal', 'high' );
				}
			}
		}
	}

	function posts_temp_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'posts_nonce' );
	$posts_stored_meta = get_post_meta( $post->ID ); ?>

		<p> <!-- ==== Blog Logo ==== -->
			<label for="posts-jumbotron-img" class="travel-row-title"><?php _e( '<h3>Jumbotron Image</h3>', 'wellington-studio' );?></label>

			<input type="text" name="posts-jumbotron-img" id="posts-jumbotron-img" value="<?php if ( isset ( $posts_stored_meta['posts-jumbotron-img'] ) ) echo $posts_stored_meta['posts-jumbotron-img'][0];?>" />
			<input type="button" id="posts-jumbotron-img-button" class="button" value="<?php _e( 'Choose or Upload an Image', 'wellington-studion' );?>" />
		</p>

		<p>
			<strong><label for="posts-jumbotron-title" class="blog-row-title"><?php _e('Call To Action Tilte','wellington-studio')?></label></strong>
			<input style="width: 100%;" type="text" name="posts-jumbotron-title" id="posts-jumbotron-title" value="<?php if (isset($posts_stored_meta['posts-jumbotron-title'])) echo $posts_stored_meta['posts-jumbotron-title'][0]; ?>" />
		</p>

		<p>
			<strong><label for="posts-jumbotron-text" class="posts-jumbotron-text"><?php _e( 'Jumbotron Text', 'wellington-studio' )?></label></strong>
			<textarea style="width: 100%;" rows="4" name="posts-jumbotron-text" id="posts-jumbotron-text"><?php if ( isset ( $posts_stored_meta['posts-jumbotron-text'] ) ) echo $posts_stored_meta['posts-jumbotron-text'][0]; ?></textarea>
		</p>

<?php
}
