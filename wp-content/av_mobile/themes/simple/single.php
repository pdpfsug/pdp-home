<?php get_header(); ?>

	<div id="content">
		<?php while ( have_posts() ) { ?>
		
			<?php the_post(); ?>
            <div id="post-<?php echo $post->ID; ?>">
				<div class="<?php av_mobile_post_classes(); ?>">
					<div class="post-page-head-area simple">
						<h2 class="post-title heading-font"><?php the_title(); ?></h2>
						<div class="post-meta">
							<span class="post-author"><?php the_author(); ?></span>
							<span class="post-date-comments">
								<?php the_date( 'Y/m/d ' ); ?>
								<?php if ( comments_open() ) echo ' <span class="sep"></span><span class="icon-comments"></span>  '; ?>
								<?php if ( comments_open() ) comments_number( __( 'no comments', AVLANG ), __( '1 comment', AVLANG ), __( '% comments', AVLANG ) ); ?>
							</span>
						</div>
					</div>
					<div class="post-page-content">
						<?php the_content(); ?>
						<?php av_mobile_get_next_page_link(); ?>
					</div>
				</div>
									
				<?php if ( comments_open() ) { ?>
					<?php if ( ! isset( $_GET['av_comments'] ) ) { ?>
						<div id="av-comments-link" class="av-comments-link">
							<button onclick="document.getElementById('comments').style.display='block';document.getElementById('av-comments-link').style.display='none';"><?php _e( 'Leave a Reply', AVLANG ); ?></button>
						</div>
					<?php } ?>
					<div id="comments" <?php if ( ! isset( $_GET['av_comments'] ) ) { echo 'style="display:none;"'; } ?>>
						<?php comments_template(); ?>
					</div>
				<?php } ?>
			</div>

		<?php } ?>
	</div> <!-- content -->
	
<?php get_footer(); ?>