<?php get_header(); ?>

	<div id="content">
		<div class="<?php av_mobile_post_classes(); ?>">
			<p class="not-found heading-font">
				<?php _e( '404 Not Found', AVLANG ); ?>
			</p>
			<p class="not-found-text"><?php _e( 'The post or page you requested is no longer available.', AVLANG ); ?></p>
		</div>
	</div> <!-- content -->

<?php get_footer(); ?>