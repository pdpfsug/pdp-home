<!-- Posts loop -->
		
<div class="post-content">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail-container">
			<a class="tappable" href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 90, 90 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
		</div>
	<?php endif; ?>
	
	<div class="container">
		<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
</div>
