<?php
	/**
	 * Adds features to posts and pages
	 */

	add_action('genesis_after_header', 'add_jumbotron_post', 5);
	function add_jumbotron_post() {
		$default  = '';
		$posts_jumbotron_title  = get_post_meta(get_the_ID(), 'posts-jumbotron-title', true);
		$posts_jumbotron_text  = get_post_meta(get_the_ID(), 'posts-jumbotron-text', true);
		$posts_jumbotron_img  = get_post_meta(get_the_ID(), 'posts-jumbotron-img', true);
		if(is_single()) {
			if($posts_jumbotron_img !== $default){
			echo '<div class="post jumbotron jumbotron-fluid" style="background-image:url(' . $posts_jumbotron_img . ');">
						  <div class="container">
						    <h1 class="display-4">' . $posts_jumbotron_title . '</h1>
						    <p class="lead">' . $posts_jumbotron_text . '</p>
						  </div>
						</div>';
			}
		}
	}
