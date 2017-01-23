<!-- Posts loop -->
<a href="<?php the_permalink(); ?>" class="loop-link tappable clearfix">

	<?php if ( av_mobile_get_comment_count() > 0 && comments_open() ) { ?>
		<div class="comments">
			<span><?php comments_number( '0', '1', '%' ); ?></span>
		</div>
	<?php } ?>
	
	<?php if ( has_post_thumbnail() ) { ?>
		<img src="<?php av_mobile_the_post_thumbnail( 480, 320 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" />
	<?php } ?>
	
	<h2 class="post-title heading-font"><?php the_title(); ?></h2>
	
</a>