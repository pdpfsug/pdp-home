<div class="page-wrapper clearfix"><!-- tag closed in foundation's footer.php -->


	<div id="header">
			<h2 class="site-title heading-font"><a href="<?php bloginfo( 'url' ); ?>" class="tappable"><?php bloginfo( 'site_title' ); ?></a></h2>

		<?php if ( av_mobile_has_menu() ) { ?>
			<div class="icon-list-ul tappable menu-drop show-hide-toggle" data-effect-target="menu">
			</div>
		<?php } ?>
	</div>

	<?php if ( av_mobile_has_menu() ) { ?>

		<div id="menu" class="default-menu show-hide-menu noise">
			<ul class="tab-menu clearfix noise">
				<li><a href="#" class="icon-list-ul no-ajax" data-section="menu" title="<?php _e( 'Menu', AVLANG ); ?>"></a></li>
				<li><a href="#" class="icon-th no-ajax" data-section="categories" title="<?php _e( 'Categories', AVLANG ); ?>"></a></li>
				<li><a href="#" class="icon-tags no-ajax" data-section="tags" title="<?php _e( 'Tags', AVLANG ); ?>"></a></li>
				<?php if( av_mobile_show_search() ) { ?>
				<li><a href="#" class="icon-search no-ajax needsclick" data-section="search" title="<?php _e( 'Search', AVLANG ); ?>"></a></li>
				<?php } ?>
			</ul>

			<div class="tab-section cat-tag categories wptouch-menu">
				<h4><?php _e( 'Categories', AVLANG ); ?></h4>
				<?php av_mobile_ordered_cat_list( 20 ); ?>
			</div>

			<div class="tab-section cat-tag tags wptouch-menu">
				<h4><?php _e( 'Tags', AVLANG ); ?></h4>
				<?php av_mobile_ordered_tag_list( 20 ); ?>
			</div>
			<?php if( av_mobile_show_search() ) { ?>
			<div class="tab-section search clearfix">
				<form method="get" id="searchform" action="<?php echo home_url(); ?>">
					<div>
						<input type="text" name="s" id="search-text" placeholder="<?php _e( 'Search this website', AVLANG ); ?>&hellip;" />
						<button name="submit" type="submit" id="search-submit" class="button-dark">
							<?php _e( 'Search', AVLANG ); ?>
						</button>
					</div>
				</form>
			</div>
			<?php } ?>

			<div class="tab-section wptouch-menu menu">
				<h4><?php _e( 'Menu', AVLANG ); ?></h4>
				<?php av_mobile_show_menu(); ?>
			</div>
		</div><!-- menu -->

	<?php } ?>

	<?php if ( is_home() || is_front_page() ) { ?>
		<?php if ( function_exists( 'av_mobile_featured_slider' ) ) { ?>
			<?php av_mobile_featured_slider(); ?>
		<?php } ?>
	<?php } ?>