<!-- Posts loop -->
<a href="<?php the_permalink(); ?>" class="loop-link tappable clearfix">

	<?php if ( av_mobile_get_comment_count() > 0 && comments_open() ) { ?>
		<div class="comments">
			<span><?php comments_number( '0', '1', '%' ); ?></span>
		</div>
	<?php } ?>
	
	<?php if ( has_post_thumbnail() ) { ?>
		<img src="<?php av_mobile_the_post_thumbnail( 150, 150 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" />
	<?php } else if ( !has_post_thumbnail() ) { ?>
		<div class="date-circle">
			<span class="month"><?php the_time( 'M' ); ?></span>
			<span class="day"><?php the_time( 'j' ); ?></span>
		</div>
	<?php } ?>

	<span class="post-date-author body-font">
		<?php if ( has_post_thumbnail() ) { ?>
			<?php the_date(); ?>
		<?php } else { ?>
			<?php the_time(); ?>
		<?php } ?>
		<?php echo '&bull;'; ?> <?php _e( 'by', AVLANG ); ?> 
		<?php the_author(); ?>
	 </span>

	<h2 class="post-title heading-font"><?php the_title(); ?></h2>
	<i class="arrow icon-angle-right"></i>
	<span class="bottom-border"><!--css border--></span>
</a>