<?php
	/* Template Name: Archive Grid */

	/**
	 * Genesis custom loop
	 */

	//* Remove custom headline and / or description to category / tag / taxonomy archive pages.

	remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );

//* Remove custom headline and description to blog template pages.

	remove_action( 'genesis_before_loop', 'genesis_do_blog_template_heading' );

//* Remove custom headline and description to date archive pages.

	remove_action( 'genesis_before_loop', 'genesis_do_date_archive_title' );

//* Remove custom headline and description to author archive pages.

	//remove_action( 'genesis_before_loop', 'genesis_do_author_title_description', 15 );

//* Remove custom headline and description to relevant custom post type archive pages.

	//remove_action( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );

	// Get the current category ID, e.g. if we're on a category archive page

	add_action('genesis_after_header', 'category_hero_image', 15);
	function category_hero_image() {
		$category = get_category( get_query_var( 'cat' ) );
		$cat_id   = $category->cat_ID;
		$image_id = get_term_meta( $cat_id, 'category-image-id', true );
		$featured_image = wp_get_attachment_image( $image_id, 'large' );

	 echo '<div id="category-hero" class="jumbotron jumbotron-fluid category-jumbotron">' .
	       $featured_image .
	      '<div class="container category-hero-img-container">';

	      foreach((get_the_category()) as $category) {
		      echo '<h1>'. $category->cat_name . ''. '</h1>';
	      }

        echo '</div>' .
	      '</div>';
	}

	function be_custom_loop() {
		global $post;
		global $id;

		// arguments, adjust as needed
		$args = array(
		 'cat'            => get_query_var('cat') ,
		 'posts_per_page' => get_option('posts_per_page'),
		 'post_status'    => 'publish',
		 'paged'          => get_query_var( 'paged' )
		);

		/*
		Overwrite $wp_query with our new query.
		The only reason we're doing this is so the pagination functions work,
		since they use $wp_query. If pagination wasn't an issue,
		use: https://gist.github.com/3218106
		*/


		global $wp_query;
		$wp_query = new WP_Query( $args );

		if ( have_posts() ) :
			echo '<div id="archive-basic" class="mt-5 mb-5">';
			echo '<div class="container feature">';
			echo '<div class="row">';
			while ( have_posts() ) : the_post();

				echo '<div class="col-lg-4 d-flex align-items-stretch mt-5 mb-5">';
				echo '<div class="card">';
				echo '<div class="card-body">';
				echo '<div class="testimonial-image"><a href="'. get_the_permalink() .'" title="Archive Image">'. get_the_post_thumbnail( $id, array(350,250) ).'</a></div>';
				echo '<a href="'. get_the_permalink() .'" title="Archive Title"><h3>' . get_the_title() . '</h3></a>';
				echo '<blockquote>' . get_the_excerpt() . '</blockquote>';
				echo '</div>';
				echo '</div>';
				echo '</div>';


			endwhile;
			echo '</div>';
			echo '</div>';
			echo '</div>';
			do_action( 'genesis_after_endwhile' );
			//genesis_posts_nav();
		endif;

		wp_reset_query();
	}
	add_action( 'genesis_loop', 'be_custom_loop' );
	remove_action( 'genesis_loop', 'genesis_do_loop' );


	genesis();

