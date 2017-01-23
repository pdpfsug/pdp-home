<?php get_header(); ?>

	<div id="content">
		<div class="comment-error">
			<h2 class="heading-font">
				<?php _e( 'Comment Error', AVLANG ); ?>
			</h2>
			<p><?php _e( 'Please enter all fields correctly to post a comment.', AVLANG ); ?></p>
			<p><center><a class="back-button button" href="#"><i class="icon-arrow-left"></i> <?php _e( 'Go back', AVLANG ); ?></a></center></p>
		</div>
	</div> <!-- content -->

<?php get_footer(); ?>