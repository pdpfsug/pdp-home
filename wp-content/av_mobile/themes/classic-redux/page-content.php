<?php get_template_part( 'nav-bar.php' ); ?>

<div id="title-area" class="box">		
		<h2 class="post-title"><?php the_title(); ?></h2>
	</div>

<div id="content-area" class="<?php av_mobile_post_classes(); ?> box">
	<?php the_content(); ?>
</div>		