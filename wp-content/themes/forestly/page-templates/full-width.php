<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 * Description: Use this page template to remove the sidebar from any page.
 * 
 * @package forestly
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
