<?php
	/**
	 * Adds an image meta boxes to dark solar grid template..
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

	include 'sanitize/sanitize_dark_solar_grid_template.php';

	add_action( 'add_meta_boxes', 'dark_solar_cust_grid_meta' );
	function dark_solar_cust_grid_meta() { global $post;
		if(!empty($post)) {
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == 'templates/dark-solar-grid.php') {
				$types = array( 'post', 'page' );
				foreach($types as $type) {
					add_meta_box( 'dark_solar_grid_temp_meta', __( 'Dark Solar Grid Template Settings', 'wellington-studio' ), 'dark_solar_grid_temp_meta_callback', $type, 'normal', 'high' );
				}
			}
		}
	}

	function dark_solar_grid_temp_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'dark_solar_grid_temp_nonce' );
	$dark_solar_grid_temp_stored_meta = get_post_meta( $post->ID ); ?>

		<p>
			<strong><label for="grid-feed-cat" class="grid-feed-cat"><?php _e('Grid Post Category','wellington-studio' )?></label></strong>
			<input style="width:20%;" type="text" name="grid-feed-cat" id="grid-feed-cat" value="<?php if (isset($dark_solar_grid_temp_stored_meta['grid-feed-cat'])) echo $dark_solar_grid_temp_stored_meta['grid-feed-cat'][0]; ?>" />
		</p>

		<p>

		  <strong><label for="button-text-grid" class="button-text-grid"><?php _e('Button Label','wellington-studio' )?></label></strong>
		  <input style="width:20%;" type="text" name="button-text-grid" id="button-text-grid" value="<?php if (isset($dark_solar_grid_temp_stored_meta['button-text-grid'])) echo $dark_solar_grid_temp_stored_meta['button-text-grid'][0]; ?>" />

		</p>

		<p>
		  <strong><label for="dark-solar-textarea" class="signature-events-row-title"><?php _e( 'Grid Template Textarea ', 'wellington-studio' )?></label></strong>
		  <textarea style="width: 100%;" rows="4" name="dark-solar-textarea" id="dark-solar-textarea"><?php if ( isset ( $dark_solar_grid_temp_stored_meta['dark-solar-textarea'] ) ) echo $dark_solar_grid_temp_stored_meta['dark-solar-textarea'][0]; ?></textarea>
		</p>

<?php }
