<!-- Posts loop -->
<div class="entry box clearfix show-thumbnails">
	
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 150, 150 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
	<?php } else { ?> 
		<a href="<?php the_permalink(); ?>"><span class="placeholder"><!-- styled in css --></span></a>
	<?php } ?>
	<div class="text-expand icon-chevron-down"></div>

	<h2 class="post-title heading-font">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>

	<div class="post-meta clearfix">
		<div class="time-author">
			<i class="icon-time"></i> <?php the_date(); ?> 
			<div class="author">
				<em><?php _e( 'by', AVLANG ); ?></em> <?php the_author(); ?>
			</div>
		</div>
		
		<?php if ( av_mobile_get_comment_count() > 0 && comments_open() ) { ?>
			<div class="comments">
				<i class="icon-comment"></i>
				<a href="<?php the_permalink(); ?>#comments">
					<?php comments_number( __( 'no responses', AVLANG ), __( '1 response', AVLANG ), __( '% responses', AVLANG ) ); ?>
				</a>
			</div>
		<?php } ?>
	</div>

	<div class="post-content" style="display: none;">
		<?php the_excerpt(); ?>
		<a class="read-more" href="<?php the_permalink(); ?>">
			<?php _e( 'Read This Post', AVLANG ); ?>
			<i class="icon-chevron-right"></i>
		</a>
	</div>
	
</div>
