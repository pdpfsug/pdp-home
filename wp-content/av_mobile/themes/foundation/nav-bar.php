<?php  if ( is_single() ) { ?>
	<div class="nav-bar clearfix">		
		<div class="nav-controls">
			<?php if ( av_mobile_if_previous_post_link() ) { ?>
				<a class="prev-post" href="<?php av_mobile_get_previous_post_link(); ?>">
					<?php _e( 'previous post', AVLANG ); ?>
				</a>
			<?php } ?>
				
			<?php if ( av_mobile_if_next_post_link() ) { ?>
				<a class="next-post" href="<?php av_mobile_get_next_post_link(); ?>">
					<?php _e( 'next post', AVLANG ); ?>
				</a>
			<?php } ?>
		</div>
	</div><!-- nav-bar -->
<?php } ?>