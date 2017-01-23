<?php get_header(); ?>

<div id="content" class="search">
	
	<div class="post-page-head-area">
		<div class="archive-text">
			<?php echo sprintf( __( 'You searched for "%s"', AVLANG ), $_GET['s'] ); ?>:
		</div>
	</div>
	
	<?php
		$post_types = av_mobile_get_search_post_types();		
		foreach( $post_types as $post_type ) { global $search_post_type; $search_post_type = $post_type;
	?>

	<div id="<?php echo strtolower( av_mobile_get_search_post_type() ); ?>-results">		
			<?php $query = new WP_Query( $query_string . '&post_type=' . $post_type . '&max_num_pages=10&posts_per_page=10' ); if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>	
	
			<?php get_template_part( 'post-loop' ); ?>
			
			<?php } // $query ?>
			
			<?php } else { ?>
	
				<?php if ( empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) { ?>
					<span class="no-results">
						<?php _e( 'No results found', AVLANG ); ?>.
					</span>
				<?php } ?>
			
			<?php } ?>

	<div class="posts-nav">
		<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', AVLANG ), __( 'older posts', AVLANG ) . ' &rsaquo;' ); ?>
	</div>
	</div>

	<?php } ?>

</div> <!-- content -->

<?php get_footer(); ?>