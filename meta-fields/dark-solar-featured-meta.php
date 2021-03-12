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

	include 'sanitize/sanitize_dark_solar_featured.php';

	add_action( 'add_meta_boxes', 'dark_solar_featured_meta' );
	function dark_solar_featured_meta() { global $post;
		if(!empty($post)) {
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == 'templates/dark-solar-featured.php') {
				$types = array( 'post', 'page' );
				foreach($types as $type) {
					add_meta_box( 'dark_solar_featured_temp_meta', __( 'Dark Solar Feature Template Settings', 'wellington-studio' ), 'dark_solar_feature_temp_meta_callback', $type, 'normal', 'high' );
				}
			}
		}
	}

	function dark_solar_feature_temp_meta_callback( $post ) {

		wp_nonce_field( basename( __FILE__ ), 'dark_solar_feat_temp_nonce' );
		$dark_solar_feat_temp_stored_meta = get_post_meta( $post->ID ); ?>

		<p>
			<strong><label for="feat-feed-cat" class="feat-feed-cat"><?php _e('Grid Post Category','wellington-studio' )?></label></strong>
			<input style="width:20%;" type="text" name="feat-feed-cat" id="feat-feed-cat" value="<?php if (isset($dark_solar_feat_temp_stored_meta['feat-feed-cat'])) echo $dark_solar_feat_temp_stored_meta['feat-feed-cat'][0]; ?>" />
		</p>

		<p>

			<strong><label for="button-text-feat" class="button-text-feat"><?php _e('Button Label','wellington-studio' )?></label></strong>
			<input style="width:20%;" type="text" name="button-text-feat" id="button-text-feat" value="<?php if (isset($dark_solar_feat_temp_stored_meta['button-text-feat'])) echo $dark_solar_feat_temp_stored_meta['button-text-feat'][0]; ?>" />

		</p>

		<p>
			<strong><label for="dark-solar-feat-textarea" class="signature-events-row-title"><?php _e( 'Dark Solar Featured Template Textarea ', 'wellington-studio' )?></label></strong>
			<textarea style="width: 100%;" rows="4" name="dark-solar-feat-textarea" id="dark-solar-feat-textarea"><?php if ( isset ( $dark_solar_feat_temp_stored_meta['dark-solar-feat-textarea'] ) ) echo $dark_solar_feat_temp_stored_meta['dark-solar-feat-textarea'][0]; ?></textarea>
		</p>

	<?php }

