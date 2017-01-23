<?php get_header(); ?>

<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<div class="<?php av_mobile_post_classes(); ?>">
			<?php get_template_part( 'post-loop' ); ?>
		</div> <!-- post classes -->
	<?php } else { ?> 
		<!-- no posts -->
	<?php } ?>
	
	<div class="posts-nav">
		<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', AVLANG ), __( 'older posts', AVLANG ) . ' &rsaquo;' ); ?>
	</div>

</div><!-- #content -->

<?php get_footer(); ?>