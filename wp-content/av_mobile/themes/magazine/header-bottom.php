<div class="page-wrapper">

	<header id="header">
	
		<?php if ( av_mobile_has_header_image() ) { ?>
			<div class="header-logo">
				<a href="<?php bloginfo( 'url' ); ?>" class="header-center tappable">
					<img class="header-image" src="<?php echo av_mobile_get_header_image(); ?>" />
				</a>
			</div>
		<?php } else { ?>
			<h1 class="heading-font <?php if ( av_mobile_has_menu() ) { ?>has-menu<?php } ?>">
				<a href="<?php bloginfo( 'url' ); ?>" class="tappable"><?php bloginfo( 'site_title' ); ?></a>
			</h1>
		<?php } ?>
	
		<?php if ( av_mobile_has_menu() ) { ?>
			<div id="menu-toggle" class="show-hide-toggle tappable" data-effect-target="menu" role="button">
				<span class="button-toggle"></span>
			</div>
		<?php } ?>
			
	</header><!-- #header -->
	
	<div id="header-nav">
		<div id="menu" class="wptouch-menu show-hide-menu">		
			<?php if ( av_mobile_has_menu() ) { av_mobile_show_menu(); } ?>
			
			<?php if ( av_mobile_show_search() ) { ?>
				<div id="search-dropper">
					<div id="wptouch-search-inner">
						<form method="get" id="searchform" action="<?php echo home_url(); ?>">
							<input type="text" name="s" id="search-text" placeholder="<?php _e( 'Search this website', AVLANG ); ?>&hellip;" />
							<input name="submit" type="submit" id="search-submit" value="<?php _e( 'Search', AVLANG ); ?>" class="button-dark" />
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
	</div><!-- #header-nav -->
	

<?php if ( is_archive() ) { ?>
	<div class="post-page-head-area magazine">
		<?php av_mobile_archive_title_text(); ?>
	</div>
<?php } ?>
