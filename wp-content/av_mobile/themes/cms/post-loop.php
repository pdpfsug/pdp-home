<div class="entry">
	<?php if ( has_post_thumbnail() ) { ?>
		<img src="<?php av_mobile_the_post_thumbnail( 150, 150 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" />
	<?php } else { ?> 
		<span class="placeholder">
			<i class="icon-camera-retro"></i>
		</span>
	<?php } ?>
	 
	<a href="<?php the_permalink(); ?>">
		<div class="entry-inner">
			<div class="post-meta">
				<span class="post-date"><?php the_date(); ?></span>
			</div>
			<h2 class="post-title heading-font"><?php the_title(); ?>
				<a class="post-link-button">
					<i class="icon-angle-right"></i>
				</a>
			</h2>
		</div><!-- entry-inner -->
	</a><!-- permalink -->
</div><!-- entry -->

<?php get_template_part( 'nav-bar' ); ?>