
		<?php if( ! is_singular() ) {
			do_action( 'mobile_secondary_banner' ); 
			} ?>
		<?php get_template_part( 'footer-top' ); ?>
		<div>
			<?php wp_footer(); ?>
		</div>
		
		<?php if ( !is_front_page() ) { ?>
			<a href="#" class="back-to-top"><?php _e( 'Back to top', AVLANG ); ?></a>
		<?php } ?>

	</div><!-- page wrapper -->
</body>
</html>
