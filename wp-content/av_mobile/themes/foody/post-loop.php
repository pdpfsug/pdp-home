<!-- Posts loop -->
<div class="post-loop-container">
	 
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail-container">
			<a class="tappable" href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 480, 380 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
		</div>
	<?php endif; ?>
	
	<div class="post-title-wrapper <?php if ( has_post_thumbnail() ) { ?>has-thumbnail<?php } ?>">
		<span class="post-date-author body-font"><?php the_date( 'M j, Y'); ?></span>
		<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	
	<div class="post-excerpt-wrapper">
		<p><?php av_excerpt_more( 15 ); ?></p>
	</div>
		
</div>