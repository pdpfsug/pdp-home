<div class="page-wrapper">
	<div id="header">
		
		<div id="header-top">
			<a href="<?php bloginfo( 'url' ); ?>" <?php if ( av_mobile_has_header_image() ) { ?>class="header-logo"<?php } ?>>
			<?php if ( av_mobile_has_header_image() ) { ?>
				<img class="header-image" src="<?php echo av_mobile_get_header_image(); ?>" />
			<?php } else { ?>
				<h1 class="heading-font"><?php bloginfo( 'site_title' ); ?></h1>
			<?php } ?>
			</a>
			
			<div id="header-buttons">	
				<?php if ( av_mobile_has_menu() ) { ?>
					<a href="#" id="page-menu-button" class="button-dark show-hide-toggle no-ajax" data-effect-target="main-menu" data-effect-close="alt-menu">
						<?php _e( 'menu', AVLANG ); ?> <i class="icon-caret-down"></i>
					</a>
				<?php } ?>
				
				<?php if( av_mobile_show_search() ) { ?>
					<a href="#" id="search-menu-button" class="button-dark show-hide-toggle no-ajax needsclick" data-effect-target="search-dropper"><i class="icon-search"></i></a> 
				<?php } ?>
			</div>
		</div> <!-- #header-top -->
		
		<?php if( av_mobile_show_search() ) { ?>
		<div id="search-dropper">
			<div id="wptouch-search-inner">
				<form method="get" id="searchform" action="<?php echo home_url(); ?>">
					<input type="text" name="s" id="search-text" placeholder="<?php _e( 'search this website', AVLANG ); ?>&hellip;" />
					<input name="submit" type="submit" id="search-submit" value="<?php _e( 'search', AVLANG ); ?>" class="button-dark" />
				</form>
			</div>
		</div>	
		<?php } ?>
		
	<?php if ( ( is_home() || is_front_page() || is_archive() ) && av_mobile_show_featured_slider() ) { ?>
		<div id="section-slider" class="generic-slider">
			<?php av_mobile_ordered_cat_list( 15, false ); ?>
		</div>
	<?php } ?>

	<?php if ( is_search() || is_archive() ) { // On single post pages load the nav bar // ?>
		<div id="single-nav-bar">
			<?php if ( is_single() ) { ?>
				<div id="nav-controls">
					<?php if ( av_mobile_if_previous_post_link() ) { ?>
						<a href="<?php av_mobile_get_previous_post_link(); ?>" class="button-dark older"><i class=" icon-caret-<?php if ( av_mobile_should_load_rtl() ) echo 'right'; else echo 'left'; ?> prev-button"></i> <?php _e( 'older posts', AVLANG ); ?></a>
					<?php } ?>
					
					<?php if ( av_mobile_if_next_post_link() ) { ?>
						<a href="<?php av_mobile_get_next_post_link(); ?>" class="button-dark newer"><?php _e( 'newer posts', AVLANG ); ?> <i class=" icon-caret-<?php if ( av_mobile_should_load_rtl() ) echo 'left'; else echo 'right'; ?> next-button"></i></a>
					<?php } ?>
				</div>
			<?php } else { ?>
				<?php av_mobile_archive_title_text(); ?>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if ( av_mobile_has_menu() ) { ?>
		<div id="main-menu" class="wptouch-menu show-hide-menu">		
			<?php av_mobile_show_menu(); ?>
		</div>
	<?php } ?>
	</div><!-- #header -->

			
	<?php if ( is_home() || is_front_page() ) { ?>
		<?php if ( function_exists( 'av_mobile_featured_slider' ) ) { ?>
			<?php av_mobile_featured_slider(); ?>
		<?php } ?>
	<?php } ?>