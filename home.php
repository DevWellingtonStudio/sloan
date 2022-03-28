<?php
	/* Home */

	/**
	 * Genesis custom loop
	 */
	remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );

	add_action('genesis_after_header', 'blog_hero_image');
	function blog_hero_image() {
		$featured_image = get_theme_mod('blog_hero');

		echo '<div id="category-hero" class="jumbotron jumbotron-fluid category-jumbotron">' .
		     '<img src="' . $featured_image . '" alt="News">' .
		     '<div class="container category-hero-img-container">';?>

				  <h1><?php echo single_post_title(); ?></h1>

		<?php

		echo '</div>' .
		     '</div>';
	}



	function be_custom_loop() {
		global $post;

		// arguments, adjust as needed
		$args = array(
		 'post_type'      => 'post',
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
		global $id;
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

