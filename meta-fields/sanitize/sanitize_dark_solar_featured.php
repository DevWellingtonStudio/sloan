<?php

	add_action( 'save_post', 'dark_solar_featured_meta_save' );
	function dark_solar_featured_meta_save( $post_id ) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['dark_solar_feat_temp_nonce'] ) && wp_verify_nonce( $_POST['dark_solar_feat_temp_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and saves if needed

		if ( isset( $_POST['feat-feed-cat'] ) ) {
			update_post_meta( $post_id, 'feat-feed-cat', $_POST['feat-feed-cat'] );
		}

		if ( isset( $_POST['button-text-feat'] ) ) {
			update_post_meta( $post_id, 'button-text-feat', $_POST['button-text-feat'] );
		}

		if ( isset( $_POST['dark-solar-feat-textarea'] ) ) {
			update_post_meta( $post_id, 'dark-solar-feat-textarea', $_POST['dark-solar-feat-textarea'] );
		}
	}
