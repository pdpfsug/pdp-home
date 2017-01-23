<!-- Posts loop -->

<div class="post-meta">
	<span class=" post-category">
		<?php
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
		echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		} ?>
		<span class="sep">/</span>
	</span>
	<span class="post-date-author"><?php the_date( 'M j, Y'); ?></span>
</div>

<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumbnail-container">
		<a class="tappable" href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 480, 290 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
	</div>
<?php endif; ?>

<p><?php av_excerpt_more( 40 ); ?></p>

<span class="bottom-border"><!--css border--></span>
