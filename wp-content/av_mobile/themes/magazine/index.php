<?php get_header(); ?>

<div id="content">
	
	<div class="posts-loop">
	
		<?php if (have_posts()) : ?>
		
			<?php $c=0; ?>
			
			<?php while (have_posts()) : the_post(); ?>
		
				<?php $c++;
					if( !$paged && $c == 1) :?>
					
					<div class="featured-post">
						<div class="<?php av_mobile_post_classes(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="post-thumbnail-container">
									<a class="tappable" href="<?php the_permalink(); ?>">
										<img src="<?php av_mobile_the_post_thumbnail( 480, 300 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" />
									</a>
								</div>
							<?php endif; ?>
							
							<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<span class="post-date-author body-font"><?php the_date( 'M, j'); ?></span>
							
							<p><?php av_excerpt_more( 30 ); ?></p>
							
							<span class="bottom-border"><!--css border--></span>
						</div>
					</div> <!-- .featured-post -->
							
				<?php else :?>
					
					<div class="<?php av_mobile_post_classes(); ?>">
						<?php get_template_part( 'post-loop' ); ?>
					</div> <!-- post classes -->
								
				<?php endif;?>
			
			<?php endwhile; ?>
			
			<?php else :?>
			
			<!-- no posts -->
			
		<?php endif; ?>
	
	</div><!-- .posts-loop -->
	
	<div class="posts-nav">
		<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', AVLANG ), __( 'older posts', AVLANG ) . ' &rsaquo;' ); ?>
	</div>

</div><!-- #content -->

<?php get_footer(); ?>
