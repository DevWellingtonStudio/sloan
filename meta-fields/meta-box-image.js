// Featured Image 1
jQuery(document).ready( function($){ "use strict";

  // Instantiates the variable that holds the media library frame.
  var posts_image_frame;

  // Runs when the image button is clicked.
  $('#posts-jumbotron-img-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( posts_image_frame ) {
		posts_image_frame.open();
		return;
	 }

	 // Sets up the media library frame
	 posts_image_frame = wp.media.frames.posts_image_frame = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 posts_image_frame.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = posts_image_frame.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#posts-jumbotron-img').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 posts_image_frame.open();
  });
});
