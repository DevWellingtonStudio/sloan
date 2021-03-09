<?php
	/* ==== Loads the image management javascript using wp enqueue media ==== */
 function posts_image_enqueue() {
	 global $typenow;
	 if( $typenow == 'post' ) {
		 wp_enqueue_media();

		 // Registers and enqueues the required javascript for image management within wp dashboard/stream report.
		 wp_register_script( 'meta-box-image', get_stylesheet_directory_uri() . '/meta-fields/meta-box-image.js', array( 'jquery' ) );
		 wp_localize_script( 'meta-box-image', 'meta_image',
			 array(
				 'title' => __( 'Choose or Upload an Image', 'wellington-studio' ),
				 'button' => __( 'Use this image', 'wellington-studio' ),
			 )
		 );
		 wp_enqueue_script( 'meta-box-image' );
	 }
 }
add_action( 'admin_enqueue_scripts', 'posts_image_enqueue' );
