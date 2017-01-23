<!-- Posts loop -->

<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<span class="post-date-author body-font"><?php the_date( 'M, j'); ?></span>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumbnail-container">
		<a class="tappable" href="<?php the_permalink(); ?>">
			<img src="<?php av_mobile_the_post_thumbnail( 100, 100 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" />
		</a>
	</div>
<?php endif; ?>

<div class="post-content">
	<p><?php av_excerpt_more( 12 ); ?></p>
</div>

<span class="bottom-border"><!--css border--></span>
