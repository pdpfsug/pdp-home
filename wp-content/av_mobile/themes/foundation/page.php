
	<?php get_header(); ?>

	<div id="content">
		<?php if ( have_posts() ) { ?>
			<?php the_post(); ?>
			<?php get_template_part( 'page-content' ); ?>
		<?php } ?>
	</div> <!-- content -->

	<?php get_footer(); ?>
