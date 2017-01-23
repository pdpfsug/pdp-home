<?php  if ( is_single() ) { ?>
	<div class="nav-controls clearfix">
		
		<?php if ( av_mobile_if_previous_post_link() ) { ?>
			<div class="previous">
				<?php _e( 'previous post', AVLANG ); ?>
				<?php av_mobile_get_previous_post_link_w_title(); ?>
			</div>
		<?php } ?>
			
		<?php if ( av_mobile_if_next_post_link() ) { ?>
			<div class="next">
			<?php _e( 'next post', AVLANG ); ?>
			<?php av_mobile_get_next_post_link_w_title(); ?>
			</div>
		<?php } ?>
	</div>
<?php } ?>