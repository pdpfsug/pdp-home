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
		<ul>
			<?php
				$query = new WP_Query( $query_string . '&post_type=' . $post_type . '&max_num_pages=10&posts_per_page=10' );
				if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();
			?>	
	
			<li class="<?php av_mobile_post_classes(); ?>">
				<p class="date"><?php the_date(); ?></p>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php the_excerpt(); ?>
			</li>
	
			<?php } // Query ?>
			
		</ul>

		<?php } else { ?>
			
			<?php if ( empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) { ?>
				<li><?php _e( 'No search results found', AVLANG ); ?></li>
			<?php } ?>
			
		<?php } ?>

	</div><!-- .search-loop -->

	<div class="posts-nav">
		<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', AVLANG ), __( 'older posts', AVLANG ) . ' &rsaquo;' ); ?>
	</div>

	<?php } ?>

</div> <!-- content -->

<?php get_footer(); ?>