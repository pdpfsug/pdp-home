<!-- Posts loop -->
<div class="post-loop-container">
	
	<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail-container">
			<a class="tappable" href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 100, 80 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
		</div>
	<?php endif; ?>

	<p><?php av_excerpt_more( 13 ); ?></p>
	
	<span class="bottom-border"><!--css border--></span>
	
</div>
