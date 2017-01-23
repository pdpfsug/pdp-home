<?php get_header(); ?>


<div id="content" class="search">

	<h3 class="search-heading page-heading"><?php echo sprintf( __( 'You searched for "%s"', AVLANG ), $_GET['s'] ); ?>:</h3>
	
	<?php
		$post_types = av_mobile_get_search_post_types();		
		foreach( $post_types as $post_type ) { 
		global $search_post_type; 
		$search_post_type = $post_type; 
	?>
	
	<div class="search-loop">		
		
		<?php $query = new WP_Query( $query_string . '&post_type=' . $post_type . '&max_num_pages=10&posts_per_page=10' ); ?>
			
		<?php if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>	
	
			<div class="<?php av_mobile_post_classes(); ?>">
				<p class="date"><?php the_date(); ?></p>
				<p class="heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<?php the_excerpt(); ?>
			</div>
	
			<?php } // Query ?>			

		<?php } else { ?>
			
			<?php if ( empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) { ?>
				<div class="no-results"><p><?php _e( 'No search results found', AVLANG ); ?></p></div>
			<?php } ?>
			
		<?php } ?>
		
	</div><!-- .search-loop -->

	<div class="posts-nav">
		<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', AVLANG ), __( 'older posts', AVLANG ) . ' &rsaquo;' ); ?>
	</div>

	<?php } ?>

</div> <!-- content -->

<?php get_footer(); ?>