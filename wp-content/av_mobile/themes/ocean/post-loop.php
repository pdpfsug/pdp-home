<!-- Posts loop -->
		
	<div class="post-content">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<span class="post-meta post-category body-font">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						} ?>
					</span>
				</div>
				<div class="col-6 text-right">
					<span class="post-date-author body-font">
						<?php the_date( 'M, j'); ?>
					</span>
				</div>
			</div><!-- .row -->
		</div>
		
		<h2 class="post-title heading-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail-container">
			<a class="tappable" href="<?php the_permalink(); ?>"><img src="<?php av_mobile_the_post_thumbnail( 480, 300 ); ?>" alt="thumbnail" class="post-thumbnail wp-post-image" /></a>
		</div>
		<?php endif; ?>
		
		<div class="post-excerpt-wrapper">
			<p><?php av_excerpt_more( 20 ); ?></p>
		</div>
	</div>
	