<?php get_header(); ?>

<div id="content">
	<?php if ( have_posts() ) { ?>
	
		<?php the_post(); ?>
        <div id="post-<?php echo $post->ID; ?>">
	        
			<div id="title-area" class="box ">		
				<h2 class="post-title"><?php the_title(); ?></h2>
				<div class="post-meta">
					<div class="time"><i class="icon-time"></i> <?php the_date(); ?></div>
					<div class="author"><i class="icon-user"></i> <?php echo sprintf( __( 'Written by %s', AVLANG ), get_the_author() ); ?></div>
				</div>
			</div>
	
			<div id="content-area" class="<?php av_mobile_post_classes(); ?> box">
			<?php the_content(); ?>
			<?php av_mobile_get_next_page_link(); ?>
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
</div>

<?php get_footer(); ?>