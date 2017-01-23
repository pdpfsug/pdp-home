<!-- Posts loop -->

	<?php if ( av_mobile_get_comment_count() > 0 && comments_open() ) { ?>
		<div class="comments">
			<span><?php comments_number( '0', '1', '%' ); ?></span>
		</div>
	<?php } ?>
		
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail-container">
			<a class="tappable" href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 520, 342 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
		</div>
	<?php endif; ?>

	<div class="post-content">

		<span class="post-date-author body-font">
		<?php if ( has_post_thumbnail() ) { ?>
			<?php the_date(); ?>
		<?php } else { ?>
			<?php the_time(); ?>
		<?php } ?>
		<?php echo '&bull;'; ?> <?php _e( 'by', AVLANG ); ?> 
		<?php the_author(); ?>
		</span>

		<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="post-excerpt-wrapper">
			<p><?php av_excerpt_more( 15 ); ?></p>
		</div>

	</div>