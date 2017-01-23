<?php get_header(); ?>

<div id="content">

	<?php if ( is_archive() ) { ?>
		<h2 class="heading-font archive-title"><?php av_mobile_archive_title_text(); ?></h2>
	<?php } ?>

	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<div class="<?php av_mobile_post_classes(); ?>">
			<?php get_template_part( 'post-loop' ); ?>
		</div> <!-- post classes -->
	<?php } ?>

	<div class="posts-nav">
		<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', AVLANG ), __( 'older posts', AVLANG ) . ' &rsaquo;' ); ?>
	</div>

</div> <!-- content -->

<?php get_footer(); ?>