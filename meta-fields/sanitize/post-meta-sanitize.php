<?php

	add_action( 'save_post', 'posts_nonce_meta_save' );
	function posts_nonce_meta_save( $post_id ) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['posts_nonce'] ) && wp_verify_nonce( $_POST['posts_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and saves if needed
		if ( isset( $_POST['posts-jumbotron-img'] ) ) {
			update_post_meta( $post_id, 'posts-jumbotron-img', $_POST['posts-jumbotron-img'] );
		}

		if ( isset( $_POST['posts-jumbotron-title'] ) ) {
			update_post_meta( $post_id, 'posts-jumbotron-title', $_POST['posts-jumbotron-title'] );
		}

		if ( isset( $_POST['posts-jumbotron-text'] ) ) {
			update_post_meta( $post_id, 'posts-jumbotron-text', $_POST['posts-jumbotron-text'] );
		}
	}
