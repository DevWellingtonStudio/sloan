<?php
	/**
	 * Template Name: Dark Solar Template
	 *
	 * @package      Bootstrap for Genesis
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/wellington-studio
	 * @author       Wellington Studiio <themes@wellington-studio.com>
	 * @copyright    Copyright (c) 2021, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */



	add_action('genesis_after_header', 'add_darksolar_content', 10);
	function add_darksolar_content() {
	  $default = '';
	  $top_feed_cat			= get_post_meta(get_the_ID(), 'top-feed-cat', true);
	  $top_feature_row		= get_post_meta(get_the_ID(), 'top-feature-row', true);
	  $masthead				= get_post_meta(get_the_ID(), 'masthead', true);

	if($top_feature_row !== $default) {
	?>

	<div id="dark-solar-feature-row" class="container-fluid">
	  <div class="d-flex justify-content-center align-items-center pt-5 pb-5">
	  	<?php echo $top_feature_row; ?>
	  </div>
	</div>
	  <div class="container-fluid mt-5 mb-5 masthead-dark-solar">
		<?php echo $masthead ?>
	  </div>

	<?php
	}

	  $args = array(
		  'category_name' => $top_feed_cat,
	  );

	  $query = new WP_Query( $args );
	  echo '<div id="dark-solar-top-feed" class="container-xl top-post-feed">' .
		   '<div class="row">';

	  if ( $query->have_posts() ) {
		while ( $query->have_posts() && $top_feed_cat !== $default ) {
		  $query->the_post();

		  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		  $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

		  echo '<div class="col-md-3">' .
			   '<div class="card">' .
			   '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'"><img class="card-img-top" src="' . $featured_img_url . '" alt="' . $alt . '"></a>' .
			   '<div class="card-body">' .
			   '<h2 class="card-title"><a href="'. get_the_permalink() .'" title="'. get_the_title() .'">' . get_the_title() . '</a></h2>' .
			   '<p class="card-text">' . get_the_excerpt() . '</p>' .
			   '</div>' .
			   '</div>' .
			   '</div>';
		}
	  }
	  wp_reset_postdata();
	  echo '</div>' .
	  '</div>';
	}

	// Bottom Blog Feed
  	add_action('genesis_before_footer', 'add_bottom_blog_feed', 5);
  	function add_bottom_blog_feed() {
  	  $default	= '';
	  $bottom_feed_cat	= get_post_meta(get_the_ID(), 'bottom-feed-cat', true);
	  $args = array(
		  'category_name' => $bottom_feed_cat,
	  );

	  $query = new WP_Query( $args );
	  echo '<div id="dark-solar-bottom-feed" class="container-xl bottom-post-feed mb-5">' .
		   '<div class="row">';

	  if ( $query->have_posts() && $bottom_feed_cat !== $default ) {
		while ( $query->have_posts() ) {

		  $query->the_post();

		  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		  $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

		  echo '<div class="col-md-3">' .
			   '<div class="card">' .
			   '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'"><img class="card-img-top" src="' . $featured_img_url . '" alt="' . $alt . '"></a>' .
			   '<div class="card-body">' .
			   '<h2 class="card-title"><a href="'. get_the_permalink() .'" title="'. get_the_title() .'">' . get_the_title() . '</a></h2>' .
			   '<p class="card-text">' . get_the_excerpt() . '</p>' .
			   '</div>' .
			   '</div>' .
			   '</div>';
		}
	  }
	  wp_reset_postdata();
	  echo '</div>' .
		  '</div>';
	}

	genesis();
