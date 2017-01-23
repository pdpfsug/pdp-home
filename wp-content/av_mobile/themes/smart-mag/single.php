<?php get_header(); ?>

	<!--
	<div class="crumb-path easy-blog">
		<p>
			<a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'site_title' ); ?></a> 
			<i class="icon-angle-right"></i> 
			<span><?php the_title(); ?></span>
		</p>
	</div>
	-->

	<div id="content">
		<?php while ( have_posts() ) { ?>
		
			<?php the_post(); ?>
            <div id="post-<?php echo $post->ID; ?>">
	            
				<div class="<?php av_mobile_post_classes(); ?>">
					<div class="post-page-head-area easy-blog">
						<span class="post-date-comments">
							<?php the_date(); ?>
							<?php if ( comments_open() ) echo '&harr;'; ?>
							<?php if ( comments_open() ) comments_number( __( 'no comments', AVLANG ), __( '1 comment', AVLANG ), __( '% comments', AVLANG ) ); ?>
						</span>
						<h2 class="post-title heading-font"><?php the_title(); ?></h2>
						<span class="post-author"><?php the_author(); ?></span>
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